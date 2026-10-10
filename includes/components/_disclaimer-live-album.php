<!--
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file provides a reusable disclaimer component injected into pages detailing "Live" album releases.
 * 
 * DESIGN INTENT:
 * - Clarifies the dual-nature of the lore: presenting the in-universe narrative context alongside the meta-reality (AI generation via Suno, post-production in GarageBand).
 * - Utilizes standard Bootstrap 5 alert styling (`alert-dark`, `border-warning`) to differentiate meta-text from pure narrative text.
 * 
 * MAINTENANCE NOTES:
 * - This file contains no PHP logic, purely static HTML.
 * - Included via `include` or `require` in album templates. Ensure it is placed within an appropriate container so the `.mt-5` top margin renders correctly.
 -->
<!-- /includes/components/_disclaimer-live-album.php -->
<!-- A reusable disclaimer for all "Live" album pages -->

<div class="alert alert-dark border-secondary mt-5" role="alert">
    <h4 class="alert-heading text-warning"><i class="fa-duotone fa-circle-info me-2"></i>A Note on "Live" Recordings</h4>
    
    <div class="row">
        <!-- LEGACY LAYOUT: Two-column grid splitting narrative lore (left) and meta AI creation process (right). -->
        <div class="col-md-6 mb-3 mb-md-0">
            <strong>In-Universe Narrative:</strong>
            <p class="mb-0 small text-muted">
                This album is presented as a "live" recording from its respective venue (e.g., The Crucible or The Norfolk Scope). The tracklist, banter, and crowd energy reflect the band's story at that specific moment in time.
            </p>
        </div>
        <div class="col-md-6 border-start-md border-warning">
            <strong>Real-World (Meta) Creation:</strong>
            <p class="mb-0 small text-muted">
                This "live" sound was created by Michael Ragsdale (as Director) and Gemini (as Co-Producer) using Suno AI. We used the "Cover" function to re-record studio tracks with specific "live" style prompts. Post-production was done in <strong>GarageBand</strong> to enhance audience sounds and layer in crowd effects, creating the final stadium atmosphere.
            </p>
        </div>
    </div>
</div>