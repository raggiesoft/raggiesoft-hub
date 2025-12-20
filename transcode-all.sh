#!/bin/bash
#
# --- Engine Room Records, LLC: MASTER TRANSCODER (v16) ---
#
# PIPELINE:
# 1. Transcodes WAV to MP3 (V0 VBR) & OGG (Q9).
# 2. Generates a README.txt manifest.
# 3. Creates ZIP archives for MP3/OGG downloads.
# 4. Creates 7z archives for WAV master downloads.
# 5. Includes 'lyrics' folder in archives if present.
# 6. Generates 'metadata.json' search index.
#
# UPDATES (v16):
# - PATH FIX: Updated for ~/Dev/RaggieSoft environment (Removed 'production/' folder).
# - SYSTEM CHECK: Checks for system-wide 7zip before local binaries.
#

echo "Starting Engine Room Records Label Transcode (v16)..."
echo "Targeting: /raggiesoft-assets/engine-room-records/artists/"

ROOT_DIR=$(pwd)
ENCODING_DATE=$(date +"%Y-%m-%d") 

# --- PATH CONFIGURATION (UPDATED) ---
# We are now relative to ~/Dev/RaggieSoft, so we point directly to the folder.
SEARCH_PATH="./raggiesoft-assets/engine-room-records/artists"
METADATA_FILE="$ROOT_DIR/raggiesoft-assets/engine-room-records/artists/metadata.json"
TEMP_SEARCH_INDEX="$ROOT_DIR/temp_search_index.jsonl"

# Initialize Index
echo "" > "$TEMP_SEARCH_INDEX" 

# --- LOCATE 7-ZIP BINARY ---
# Priority 1: System Path (Brew/Apt/Windows Path)
if command -v 7z &> /dev/null; then
    SEVEN_ZIP_CMD="7z"
elif command -v 7zz &> /dev/null; then
    SEVEN_ZIP_CMD="7zz"
else
    # Priority 2: Local '7zip' folder fallback
    SEVEN_ZIP_DIR="$ROOT_DIR/7zip"
    if [[ "$OSTYPE" == "msys" || "$OSTYPE" == "cygwin" ]]; then
        SEVEN_ZIP_CMD="$SEVEN_ZIP_DIR/7za.exe"
    else
        SEVEN_ZIP_CMD="$SEVEN_ZIP_DIR/7zz"
        if [ -f "$SEVEN_ZIP_CMD" ]; then
            chmod +x "$SEVEN_ZIP_CMD"
        fi
    fi
fi

USE_SEVEN_ZIP=false
if [ -f "$SEVEN_ZIP_CMD" ] || command -v "$SEVEN_ZIP_CMD" &> /dev/null; then
    USE_SEVEN_ZIP=true
    echo "  [OK] 7-Zip found: $SEVEN_ZIP_CMD"
else
    echo "  [WARN] 7-Zip not found. WAV archives will be skipped."
fi

ffmpeg_flag="-n" 
if [[ "$1" == "--rebuild" || "$1" == "-y" ]]; then
  ffmpeg_flag="-y"
  echo "  WARNING: Rebuild flag detected. Overwriting existing files."
fi

if [ ! -d "$SEARCH_PATH" ]; then
    echo "  ERROR: Directory not found at $SEARCH_PATH"
    echo "  Are you running this from ~/Dev/RaggieSoft?"
    exit 1
fi

# --- MAIN LOOP ---
find "$SEARCH_PATH" -name "tracks.json" | while read tracks_file; do
    
    album_dir=$(dirname "$tracks_file")
    cd "$album_dir" || continue
    
    ALBUM_JSON="album.json"
    ART_FILE="album-art.jpg"

    if [ ! -f "$ALBUM_JSON" ] || [ ! -d "wav" ]; then
        cd "$ROOT_DIR" || exit
        continue
    fi

    # Parse Album Data
    ALBUM_ARTIST=$(jq -r '.albumArtist' "$ALBUM_JSON")
    ALBUM_NAME=$(jq -r '.albumName' "$ALBUM_JSON")
    NARRATIVE_YEAR=$(jq -r '.narrativeReleaseDate' "$ALBUM_JSON")
    GENRE=$(jq -r '.genre' "$ALBUM_JSON")
    
    # Slugs
    ALBUM_SLUG=$(basename "$album_dir")
    ARTIST_DIR_PATH=$(dirname "$album_dir")
    ARTIST_SLUG=$(basename "$ARTIST_DIR_PATH")

    # Construct Web URL
    WEB_URL="/engine-room/artists/$ARTIST_SLUG/albums/$ALBUM_SLUG"

    # Archive Naming
    SAFE_ALBUM_NAME=$(echo "$ALBUM_NAME" | tr '[:upper:]' '[:lower:]' | tr -d '[:punct:]' | tr ' ' '-')
    ARCHIVE_BASE_NAME="${NARRATIVE_YEAR}-${SAFE_ALBUM_NAME}"

    echo ""
    echo "Processing: $ALBUM_ARTIST - $ALBUM_NAME"
    echo "  -> Web URL: $WEB_URL"

    # Album Art Parameter for FFmpeg
    if [ ! -f "$ART_FILE" ]; then
        ART_FILE_PARAM=""
    else
        ART_FILE_PARAM="-i $ART_FILE -map 0:a -map 1:v -codec:v mjpeg -disposition:v attached_pic"
    fi

    # Check for Lyrics
    HAS_LYRICS=false
    if [ -d "lyrics" ]; then
        HAS_LYRICS=true
    fi

    mkdir -p mp3
    mkdir -p ogg
    mkdir -p archives

    # --- GENERATE README ---
    README_FILE="read-me.txt"
    {
        echo "=================================================================="
        echo "  $ALBUM_NAME ($NARRATIVE_YEAR)"
        echo "  by $ALBUM_ARTIST"
        echo "=================================================================="
        echo "Genre: $GENRE"
        echo "Released by: Engine Room Records, LLC"
        echo "Website: https://raggiesoft.com$WEB_URL"
        echo ""
        echo "TRACKLIST:"
    } > "$README_FILE"
    
    # Process Tracks
    jq -c '.tracks[]' "tracks.json" | while read -r track_json; do

        FILE_BASE=$(echo "$track_json" | jq -r '.fileName')
        TITLE=$(echo "$track_json" | jq -r '.title')
        DISC_NUM=$(echo "$track_json" | jq -r '.disc')
        TRACK_NUM=$(echo "$track_json" | jq -r '.track')

        echo "$TRACK_NUM. $TITLE" >> "$README_FILE"

        # --- SEARCH INDEX GENERATION ---
        LYRICS_CONTENT=""
        LYRIC_FILE="lyrics/${FILE_BASE}.md"
        if [ -f "$LYRIC_FILE" ]; then
            LYRICS_CONTENT=$(cat "$LYRIC_FILE")
        fi

        jq -n -c \
            --arg id "$FILE_BASE" \
            --arg title "$TITLE" \
            --arg artist "$ALBUM_ARTIST" \
            --arg album "$ALBUM_NAME" \
            --arg url "$WEB_URL" \
            --arg type "track" \
            --arg content "$LYRICS_CONTENT" \
            '{id: $id, title: $title, artist: $artist, album: $album, url: $url, type: $type, content: $content}' >> "$TEMP_SEARCH_INDEX"

        # --- TRANSCODING ---
        WAV_FILE="wav/${FILE_BASE}.wav"
        OUTPUT_BASE_NAME="$FILE_BASE"

        if [ ! -f "$WAV_FILE" ]; then
            continue
        fi

        # MP3 (V0)
        ffmpeg -nostdin -loglevel error $ffmpeg_flag -i "$WAV_FILE" $ART_FILE_PARAM \
        -codec:a libmp3lame -q:a 0 \
        -id3v2_version 3 -write_id3v1 1 \
        -metadata title="$TITLE" \
        -metadata artist="$ALBUM_ARTIST" \
        -metadata album="$ALBUM_NAME" \
        -metadata date="$NARRATIVE_YEAR" \
        -metadata track="$TRACK_NUM" \
        -metadata disc="$DISC_NUM" \
        "mp3/$OUTPUT_BASE_NAME.mp3"

        # OGG (Q9)
        ffmpeg -nostdin -loglevel error $ffmpeg_flag -i "$WAV_FILE" \
        -codec:a libvorbis -q:a 9 \
        -metadata title="$TITLE" \
        -metadata artist="$ALBUM_ARTIST" \
        -metadata album="$ALBUM_NAME" \
        -metadata date="$NARRATIVE_YEAR" \
        -metadata tracknumber="$TRACK_NUM" \
        -metadata discnumber="$DISC_NUM" \
        "ogg/$OUTPUT_BASE_NAME.ogg"

    done

    # --- PACKAGING (ARCHIVES) ---
    # Note: I am restoring the archive logic here since your provided file had placeholders
    if [ "$USE_SEVEN_ZIP" = true ]; then
        
        # Define Archive Names
        ZIP_MP3="archives/${ARCHIVE_BASE_NAME}-mp3.zip"
        ZIP_OGG="archives/${ARCHIVE_BASE_NAME}-ogg.zip"
        ZIP_WAV="archives/${ARCHIVE_BASE_NAME}-wav.7z"

        # Cleanup old archives if rebuilding
        rm -f "$ZIP_MP3" "$ZIP_OGG" "$ZIP_WAV"

        # MP3 ZIP
        "$SEVEN_ZIP_CMD" a -tzip -mx=5 "$ZIP_MP3" ./mp3/*.mp3 "$README_FILE" "$ART_FILE" > /dev/null
        if [ "$HAS_LYRICS" = true ]; then
            "$SEVEN_ZIP_CMD" a -tzip -mx=5 "$ZIP_MP3" ./lyrics/*.md > /dev/null
        fi

        # OGG ZIP
        "$SEVEN_ZIP_CMD" a -tzip -mx=5 "$ZIP_OGG" ./ogg/*.ogg "$README_FILE" "$ART_FILE" > /dev/null
        if [ "$HAS_LYRICS" = true ]; then
            "$SEVEN_ZIP_CMD" a -tzip -mx=5 "$ZIP_OGG" ./lyrics/*.md > /dev/null
        fi

        # WAV 7Z (Masters)
        # Higher compression for massive WAV files
        "$SEVEN_ZIP_CMD" a -t7z -mx=9 -ms=on "$ZIP_WAV" ./wav/*.wav "$README_FILE" "$ART_FILE" > /dev/null
        if [ "$HAS_LYRICS" = true ]; then
            "$SEVEN_ZIP_CMD" a -t7z -mx=9 "$ZIP_WAV" ./lyrics/*.md > /dev/null
        fi
        
        echo "  -> Archives Created."
    fi
    
    rm "$README_FILE"
    cd "$ROOT_DIR" || exit
done

# --- FINALIZE SEARCH INDEX ---
echo ""
echo "Building Search Index..."
if [ -f "$TEMP_SEARCH_INDEX" ]; then
    # Create valid JSON array from JSONL
    jq -s '.' "$TEMP_SEARCH_INDEX" > "$METADATA_FILE"
    rm "$TEMP_SEARCH_INDEX"
    echo "  [OK] Index built at: $METADATA_FILE"
fi

echo "--- Complete ---"
