#!/bin/bash
# migrate-links.sh
# RaggieSoft Migration Tool
# Moves "The Stardust Engine" from Root (/) to Subdirectory (/engine-room/artists/stardust-engine)

# 1. Define the Target Base Path (The new "Home" for the band)
# Note: User specified "stardust-engine" (no "the") in the prompt.
TARGET_BASE="/engine-room/artists/stardust-engine"

# 2. Define the Directories to Scan
# We scan pages, includes, and data to catch content, headers, sidebars, and JSON routes.
SEARCH_DIRS="./pages ./includes ./data"

echo "Starting Migration: Stardust Engine Link Refactor..."
echo "Target Base: $TARGET_BASE"

# --- FUNCTION: SAFE REPLACE ---
# Uses perl for consistent regex handling across MacOS/Linux
# $1 = Find Pattern (Regex)
# $2 = Replace Pattern
# $3 = Description
perform_replace() {
    echo "Processing: $3..."
    
    # The Regex explanation:
    # href=["']          -> Matches href=" or href='
    # \/                 -> Matches the forward slash
    # KEYWORD            -> Matches the specific section (e.g., band, discography)
    # (?!...)            -> Negative Lookahead (Ensures we don't double-replace if run twice)
    
    find $SEARCH_DIRS -type f \( -name "*.php" -o -name "*.json" -o -name "*.html" \) -print0 | xargs -0 perl -pi -e "s|href=[\"']/$1|href=\"$TARGET_BASE/$2|g"
    
    # Also catch JSON value references (e.g., "url": "/band/...")
    find $SEARCH_DIRS -type f -name "*.json" -print0 | xargs -0 perl -pi -e "s|\": \"/$1|\": \"$TARGET_BASE/$2|g"
}

# --- STEP 1: DIRECT MAPPINGS ---
perform_replace "band" "band" "Migrating /band links"
perform_replace "discography" "discography" "Migrating /discography links"
perform_replace "radio" "radio" "Migrating /radio links"
perform_replace "concepts" "concepts" "Migrating /concepts links"

# --- STEP 2: THE "LORE" SHIFT ---
# Narrative change: "Story" is now "Lore"
perform_replace "story" "lore" "Migrating /story to /lore"

# --- STEP 3: THE GENERIC PAGES ---
# These common pages now belong to the Band's subsection
perform_replace "about" "about" "Migrating /about (Mission Profile)"
perform_replace "contact" "contact" "Migrating /contact (Flight Control)"
perform_replace "license" "license" "Migrating /license"

# --- STEP 4: THE HOME LINK (CONTEXTUAL) ---
# This is tricky. We only want to replace href="/" if it's meant to be the Band Home.
# We skip files that are clearly Global/Corporate.
echo "Processing: Homepage Links (Contextual)..."

# Only update the Band's specific header/sidebar files to point Home to the new sub-root
grep -rl 'href="/"' ./includes/components/headers/engine-room/artists/header-stardust.php | xargs perl -pi -e "s|href=\"/\"|href=\"$TARGET_BASE\"|g"
grep -rl 'href="/"' ./includes/components/sidebars/engine-room/artists/sidebar-stardust.php | xargs perl -pi -e "s|href=\"/\"|href=\"$TARGET_BASE\"|g"

echo "---------------------------------------------------"
echo "MIGRATION COMPLETE."
echo "Please manually verify 'header-default.php' as it may contain mixed links."
echo "---------------------------------------------------"