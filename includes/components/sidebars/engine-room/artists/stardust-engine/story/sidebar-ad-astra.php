<!--
 * ARCHITECTURE & MAINTENANCE (LEGACY)
 *
 * This file provides the sidebar navigation for the "Ad Astra" detailed mission logs.
 * 
 * DESIGN INTENT:
 * - Hardcoded, simple list group designed to look like a sequential mission timeline.
 * - Utilizes CSS variables (`--astra-warning`, `--astra-success`, etc.) to color-code the severity or status of each log entry, reinforcing the "mission control" aesthetic.
 * 
 * MAINTENANCE NOTES:
 * - This sidebar lacks dynamic `active` state highlighting. It relies entirely on the color coding to differentiate the links.
 * - If the `--astra-*` CSS variables are not defined in the parent context, the text colors will fallback unpredictably.
 -->
<div class="mb-3">
    <h6 class="text-uppercase fw-bold  small mb-2">Detailed Logs</h6>
    <!-- LEGACY LAYOUT: The left border (border-start) simulates a vertical timeline connecting the chronological log entries. -->
    <div class="list-group list-group-flush border-start border-secondary ps-2">
        <a href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-01" class="list-group-item list-group-item-action bg-transparent py-1 border-0 text-uppercase small" style="color: var(--astra-warning);">
            Day 01: Ignition
        </a>
        <a href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-02" class="list-group-item list-group-item-action bg-transparent py-1 border-0 text-uppercase small" style="color: var(--astra-success);">
            Day 02: Stabilization
        </a>
        <a href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-03" class="list-group-item list-group-item-action bg-transparent py-1 border-0 text-uppercase small" style="color: var(--astra-text);">
            Day 03: Ship's Time
        </a>
        <a href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-10" class="list-group-item list-group-item-action bg-transparent py-1 border-0 text-uppercase small" style="color: var(--astra-info);">
            Day 10: The Drift
        </a>
        <a href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-21" class="list-group-item list-group-item-action bg-transparent py-1 border-0 text-uppercase small" style="color: var(--astra-danger);">
            Day 21: The Drop
        </a>
    </div>
</div>