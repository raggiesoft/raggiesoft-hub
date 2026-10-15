<?php
/**
 * ============================================================================
 * FILE: pages/engine-room/radio.php
 * ============================================================================
 * PURPOSE:
 * Redirects legacy requests for the Engine Room Radio (`/engine-room/radio`)
 * directly to the dedicated broadcast station on `music.raggiesoft.com/radio`.
 *
 * ARCHITECTURAL RATIONALE:
 * As part of the RaggieSoft subdomain modularization, all audio streaming,
 * continuous radio shuffling (preserving both standalone Rock Operas and
 * multi-album Rock Opera Series), synchronized lyrics, and DSP routing have
 * been consolidated onto The Listening Room (`https://music.raggiesoft.com/radio`).
 *
 * LICENSE:
 * Code: MIT License
 * ============================================================================
 */
header("Location: https://music.raggiesoft.com/radio", true, 301);
exit;