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
    <h6 class="text-uppercase fw-bold small mb-2">Detailed Logs</h6>
    <!-- [LAYOUT] The left border (border-start) simulates a vertical timeline connecting the chronological log entries. -->
    <div class="d-flex flex-column gap-1 border-start border-secondary ps-2">
        <wa-button appearance="plain" size="small" href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-01" class="w-100 text-start justify-content-start text-uppercase" style="text-align: left; color: var(--astra-warning);">
            <i slot="start" class="fa-duotone fa-fire-flame-curved"></i> Day 01: Ignition
        </wa-button>
        <wa-button appearance="plain" size="small" href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-02" class="w-100 text-start justify-content-start text-uppercase" style="text-align: left; color: var(--astra-success);">
            <i slot="start" class="fa-duotone fa-satellite"></i> Day 02: Stabilization
        </wa-button>
        <wa-button appearance="plain" size="small" href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-03" class="w-100 text-start justify-content-start text-uppercase" style="text-align: left; color: var(--astra-text);">
            <i slot="start" class="fa-duotone fa-clock"></i> Day 03: Ship's Time
        </wa-button>
        <wa-button appearance="plain" size="small" href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-10" class="w-100 text-start justify-content-start text-uppercase" style="text-align: left; color: var(--astra-info);">
            <i slot="start" class="fa-duotone fa-stars"></i> Day 10: The Drift
        </wa-button>
        <wa-button appearance="plain" size="small" href="/engine-room/artists/stardust-engine/story/ad-astra/voyage/day-21" class="w-100 text-start justify-content-start text-uppercase" style="text-align: left; color: var(--astra-danger);">
            <i slot="start" class="fa-duotone fa-meteor"></i> Day 21: The Drop
        </wa-button>
    </div>
</div>