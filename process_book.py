import os           
import re           
import subprocess   
import argparse     
import json         
import shutil       
import sys          

# --- CONFIGURATION (UPDATED v2) ---
# Input: Where your .docx files live (locally)
BUILD_SOURCE_PATH = "build/books" 

# Output: Where the assets repo lives (The "Suitcase")
# Updated to match the flattened ~/Dev/RaggieSoft/ structure
WEBSITE_ASSET_PATH = "raggiesoft-assets/raggiesoft-books"

# CDN: The public URL for images
CDN_BASE_URL = "https://assets.raggiesoft.com/raggiesoft-books"

def parse_arguments():
    parser = argparse.ArgumentParser(description="Convert narrative docx to Markdown and generate JSON manifest.")
    parser.add_argument("--book", help="Optional: Process only this specific book slug.")
    return parser.parse_args()

def slugify(text):
    text = text.lower().strip()
    text = re.sub(r'[^\w\s-]', '', text) 
    text = re.sub(r'[\s_]+', '-', text)
    return text

def extract_frontmatter(lines):
    """
    Reads Key: Value pairs until '---' or end of block.
    Keys are normalized to lowercase (e.g., 'Image-Alt' -> 'image-alt').
    """
    metadata = {}
    clean_lines = []
    iterator = iter(lines)
    found_divider = False
    
    # Regex allows 'Key: Value' with flexible spacing
    kv_pattern = re.compile(r'^([A-Za-z0-9_-]+):\s*(.*)$')
    
    for line in iterator:
        stripped = line.strip()
        if stripped == '---':
            found_divider = True
            break 
            
        match = kv_pattern.match(stripped)
        if match:
            key = match.group(1).lower()
            value = match.group(2).strip()
            metadata[key] = value
        elif stripped == "":
            pass
        else:
            if not found_divider:
                clean_lines.append(line)
                break 

    for line in iterator:
        clean_lines.append(line)

    return clean_lines, metadata

def process_book(book_slug):
    # 1. Define Paths
    source_dir = os.path.join(BUILD_SOURCE_PATH, book_slug)
    input_docx = os.path.join(source_dir, f"{book_slug}.docx")
    
    # Target output inside the Rclone-synced folder
    output_dir = os.path.join(WEBSITE_ASSET_PATH, book_slug)
    json_path = os.path.join(WEBSITE_ASSET_PATH, f"{book_slug}.json")
    media_target_root = os.path.join(output_dir, "media") 

    print(f"📖 Processing: {book_slug}")

    if not os.path.exists(input_docx):
        print(f"❌ Error: Source file not found at {input_docx}")
        return

    # Clean Media Directory
    if os.path.exists(media_target_root):
        try:
            shutil.rmtree(media_target_root)
        except OSError as e:
            print(f"⚠️  Warning: Could not clear media directory: {e}")
    os.makedirs(media_target_root, exist_ok=True)

    # Run Pandoc (No media extraction, we handle it manually)
    try:
        result = subprocess.run(
            ['pandoc', input_docx, '-f', 'docx', '-t', 'gfm', '--wrap=none'],
            capture_output=True, text=True, encoding='utf-8'
        )
        if result.returncode != 0:
            print("❌ Pandoc Error:", result.stderr)
            return
    except FileNotFoundError:
        print("❌ Error: Pandoc is not installed or not in PATH.")
        return

    full_text = result.stdout
    lines = full_text.split('\n')
    
    manifest = {
        "title": book_slug.replace("-", " ").title(),
        "base_path": f"/library/{book_slug}/reader",
        "structure": []
    }

    current_book_obj = None
    current_chap_obj = None
    current_part_obj = None
    
    bk_slug, ch_slug, pt_slug, sc_slug = "", "", "", ""
    current_scene_title = "Scene 1"
    content_buffer = []

    print("⚡ Parsing hierarchy...")

    for line in lines:
        stripped_line = line.strip()
        if not stripped_line: continue

        # LEVEL 1: BOOK (#)
        if line.startswith('# '):
            if current_part_obj:
                finalize_scene(output_dir, source_dir, bk_slug, ch_slug, pt_slug, sc_slug, current_scene_title, content_buffer, current_part_obj, book_slug)
                content_buffer = []

            clean_title = line.replace('# ', '').strip()
            bk_slug = slugify(clean_title)
            current_book_obj = { "id": bk_slug, "title": clean_title, "chapters": [] }
            manifest["structure"].append(current_book_obj)
            continue
            
        # LEVEL 2: CHAPTER (##)
        if line.startswith('## '):
            if current_part_obj:
                finalize_scene(output_dir, source_dir, bk_slug, ch_slug, pt_slug, sc_slug, current_scene_title, content_buffer, current_part_obj, book_slug)
                content_buffer = []
                current_part_obj = None

            clean_title = line.replace('## ', '').strip()
            ch_slug = slugify(clean_title)
            current_chap_obj = { "id": ch_slug, "title": clean_title, "parts": [] }
            if current_book_obj: current_book_obj["chapters"].append(current_chap_obj)
            continue
            
        # LEVEL 3: PART (###)
        if line.startswith('### '):
            if current_part_obj:
                finalize_scene(output_dir, source_dir, bk_slug, ch_slug, pt_slug, sc_slug, current_scene_title, content_buffer, current_part_obj, book_slug)
                content_buffer = []

            clean_title = line.replace('### ', '').strip()
            pt_slug = slugify(clean_title)
            
            sc_slug = "scene-1"
            current_scene_title = clean_title 
            
            current_part_obj = { "id": pt_slug, "title": clean_title, "scenes": [] }
            if current_chap_obj: current_chap_obj["parts"].append(current_part_obj)
            continue

        # LEVEL 4: SCENE (####)
        if line.startswith('#### '):
            if content_buffer:
                finalize_scene(output_dir, source_dir, bk_slug, ch_slug, pt_slug, sc_slug, current_scene_title, content_buffer, current_part_obj, book_slug)
                content_buffer = []
            
            clean_title = line.replace('#### ', '').strip()
            sc_slug = slugify(clean_title)
            current_scene_title = clean_title
            
            content_buffer.append(f"# {clean_title}\n")
            continue

        if current_part_obj is not None:
            content_buffer.append(line)

    if current_part_obj and content_buffer:
        if not content_buffer[0].startswith('# '):
             content_buffer.insert(0, f"# {current_scene_title}\n")
        finalize_scene(output_dir, source_dir, bk_slug, ch_slug, pt_slug, sc_slug, current_scene_title, content_buffer, current_part_obj, book_slug)

    with open(json_path, "w", encoding="utf-8") as f:
        json.dump(manifest, f, indent=2)
    
    print(f"✅ Success: {book_slug} -> {json_path}")


def finalize_scene(target_root, source_root, bk, ch, pt, sc_id, sc_title, lines, part_object, book_slug):
    """
    Saves scene content and enforces strict WCAG compliance for images.
    """
    if not lines: return 

    # 1. Extract Metadata
    clean_lines, metadata = extract_frontmatter(lines)

    # 2. IMAGE PROCESSING LOGIC
    # We look for 'image' and 'image-alt' in the frontmatter dictionary
    image_rel_path = metadata.get('image')
    image_alt = metadata.get('image-alt') 
    
    if image_rel_path:
        # --- WCAG ENFORCEMENT ---
        # If image is present, Alt Text MUST be present.
        if not image_alt:
            print(f"\n❌ WCAG COMPLIANCE ERROR")
            print(f"   Book:     {book_slug}")
            print(f"   Scene:    {sc_title}")
            print(f"   Image:    {image_rel_path}")
            print(f"   Reason:   Image defined but 'Image-Alt' is missing.")
            print(f"   Action:   Add 'Image-Alt: Your description' to the frontmatter.")
            print(f"   Status:   Compilation Aborted.")
            sys.exit(1) # Hard Fail - Stops the script immediately
        # ------------------------

        # A. Find the Source Image
        src_img_full = os.path.join(source_root, image_rel_path)
        
        if os.path.exists(src_img_full):
            # B. Copy File
            target_img_full = os.path.join(target_root, "media", image_rel_path)
            os.makedirs(os.path.dirname(target_img_full), exist_ok=True)
            shutil.copy2(src_img_full, target_img_full)
            
            # C. Construct URL
            url_path = image_rel_path.replace('\\', '/')
            cdn_url = f"{CDN_BASE_URL}/{book_slug}/media/{url_path}"
            
            # D. Inject Tag
            # Insert Markdown image tag after the H1 title
            image_markdown = f"\n![{image_alt}]({cdn_url})\n"
            
            if clean_lines and clean_lines[0].startswith('# '):
                clean_lines.insert(1, image_markdown)
            else:
                clean_lines.insert(0, image_markdown)
                
            print(f"    🖼️  Image injected: {image_rel_path}")
        else:
            print(f"    ⚠️  Warning: Image not found at {src_img_full}")
    
    # 3. Apply Drop Cap
    final_lines = []
    dropped = False
    for line in clean_lines:
        if not dropped and line.strip() and not line.startswith('#') and not line.startswith('!['):
            if re.match(r'^[A-Za-z]', line):
                first_char = line[0]
                rest = line[1:]
                line = f'<span class="drop-cap">{first_char}</span>{rest}'
                dropped = True
        final_lines.append(line)

    # 4. Update JSON Object
    scene_data = {
        "id": sc_id,
        "title": sc_title,
        "theme": metadata.get('theme'),
        "music": metadata.get('music'),
        "location": metadata.get('location'),
        "pov": metadata.get('pov')
    }
    # Clean nulls
    scene_data = {k: v for k, v in scene_data.items() if v is not None}
    part_object["scenes"].append(scene_data)

    # 5. Save Markdown
    dir_path = os.path.join(target_root, bk, ch, pt)
    os.makedirs(dir_path, exist_ok=True)
    file_path = os.path.join(dir_path, f"{sc_id}.md")
    
    with open(file_path, "w", encoding="utf-8") as f:
        f.write('\n\n'.join(final_lines))

if __name__ == "__main__":
    args = parse_arguments()
    
    # Safety Check: Does the assets folder exist?
    if not os.path.exists("raggiesoft-assets"):
        print("❌ CRITICAL ERROR: 'raggiesoft-assets' folder not found.")
        print("   Did you run 'rclone sync' yet? The suitcase is missing.")
        sys.exit(1)

    if args.book:
        process_book(args.book)
    else:
        print(f"🚀 Batch Mode: Scanning {BUILD_SOURCE_PATH}...")
        if not os.path.exists(BUILD_SOURCE_PATH):
            print(f"❌ Error: Build path '{BUILD_SOURCE_PATH}' does not exist.")
            print(f"   Please create it: mkdir -p build/books")
            sys.exit(1)
            
        for entry in os.scandir(BUILD_SOURCE_PATH):
            if entry.is_dir():
                book_slug = entry.name
                docx_path = os.path.join(entry.path, f"{book_slug}.docx")
                if os.path.exists(docx_path):
                    process_book(book_slug)
