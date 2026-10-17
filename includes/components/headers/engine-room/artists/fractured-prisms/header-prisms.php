<?php
/**
 * ============================================================================
 * ARCHITECTURE: header-prisms.php
 * ============================================================================
 * Context: Engine Room Records - Fractured Prisms Header Navigation.
 * Narrative/Purpose: Provides primary navigation for the "Fractured Prisms"
 * artist hub ("The Fragile Fortress"), connecting the band overview, lore
 * archives, album lore, personnel profiles ("The Residents"), and The Listening Room.
 *
 * TECHNICAL NOTES:
 * - Built strictly with Web Awesome v3.13.0 (<wa-button>, <wa-dropdown>,
 *   <wa-dropdown-item>, <wa-divider>) per llms-webawesome.txt.
 * - Direct <wa-dropdown-item> children inside <wa-dropdown> (never <wa-menu>).
 * ============================================================================
 */
?>
<!-- START: Fractured Prisms Navigation Container -->
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

    <wa-button appearance="plain" href="/engine-room/artists/fractured-prisms">
        <i slot="start" class="fa-duotone fa-house" aria-hidden="true"></i>The Square
    </wa-button>

    <!-- START: Lore Archives Dropdown -->
    <wa-dropdown placement="bottom-start">
        <wa-button slot="trigger" appearance="plain" with-caret>
            <i slot="start" class="fa-duotone fa-book-journal-whills" aria-hidden="true"></i>Lore
        </wa-button>
        <wa-dropdown-item value="/engine-room/artists/fractured-prisms/story/the-hollow-square">
            <i slot="icon" class="fa-duotone fa-chess-rook"></i>The Hollow Square
        </wa-dropdown-item>
        <wa-dropdown-item value="/engine-room/artists/fractured-prisms/story/1985-american-shores-tour">
            <i slot="icon" class="fa-duotone fa-globe-americas"></i>1985 American Shores Tour
        </wa-dropdown-item>
        <wa-dropdown-item value="/engine-room/artists/fractured-prisms/lore/colonial-theatre">
            <i slot="icon" class="fa-duotone fa-masks-theater"></i>The Colonial Theatre (1985)
        </wa-dropdown-item>
        <wa-divider></wa-divider>
        <wa-dropdown-item value="/engine-room/artists/stardust-engine/story/hard-reset/hard-reset-tour/london-discovery">
            <i slot="icon" class="fa-duotone fa-box-open-full"></i>1999 London Discovery
        </wa-dropdown-item>
    </wa-dropdown>

    <wa-button appearance="plain" href="/engine-room/artists/fractured-prisms/discography">
        <i slot="start" class="fa-duotone fa-compact-disc" aria-hidden="true"></i>Album Lore
    </wa-button>

    <wa-button appearance="plain" href="https://music.raggiesoft.com/fractured-prisms" class="text-warning fw-bold">
        <i slot="start" class="fa-duotone fa-turntable" aria-hidden="true"></i>Listening Room
    </wa-button>

    <!-- START: Character/Residents Dropdown -->
    <wa-dropdown placement="bottom-start">
        <wa-button slot="trigger" appearance="plain" with-caret>
            <i slot="start" class="fa-duotone fa-ghost" aria-hidden="true"></i>The Residents
        </wa-button>
        <wa-dropdown-item value="/engine-room/artists/fractured-prisms/band">
            <i slot="icon" class="fa-duotone fa-users"></i>Personnel Overview
        </wa-dropdown-item>
        <wa-divider></wa-divider>
        <wa-dropdown-item value="/engine-room/artists/fractured-prisms/band/claire-manning">
            <i slot="icon" class="fa-duotone fa-flute"></i>Claire Manning
        </wa-dropdown-item>
        <wa-dropdown-item value="/engine-room/artists/fractured-prisms/band/rhys-manning">
            <i slot="icon" class="fa-duotone fa-sliders"></i>Rhys Manning
        </wa-dropdown-item>
    </wa-dropdown>

    <!-- START: Exit to Engine Room HQ -->
    <wa-button appearance="plain" href="/engine-room">
        <i slot="start" class="fa-solid fa-arrow-turn-up" aria-hidden="true"></i>Engine Room HQ
    </wa-button>

</div>