<?php
/**
 * ============================================================================
 * ARCHITECTURE: header-knox.php
 * ============================================================================
 * Context: RaggieSoft Books - Project: KNOX Navigation.
 * Narrative/Purpose: Contextual navigation for the "K.N.O.X." universe.
 *
 * TECHNICAL NOTES:
 * - Built strictly with Web Awesome v3.13.0 (<wa-button>, <wa-dropdown>,
 *   <wa-dropdown-item>, <wa-divider>) per llms-webawesome.txt.
 * - Uses direct <wa-dropdown-item> children inside <wa-dropdown>.
 * ============================================================================
 */

$uri = $_SERVER['REQUEST_URI'] ?? '';

$isChapters = str_contains($uri, '/books/knox');
$isLore     = str_contains($uri, '/knox/lore');
?>

<!-- START: Knox Navigation Container -->
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">

    <!-- START: Dossier Overview Link -->
    <wa-button appearance="plain" href="/raggiesoft-books/knox">
        <i slot="start" class="fa-duotone fa-crosshairs" aria-hidden="true"></i>Dossier
    </wa-button>

    <!-- START: Read Story Link -->
    <wa-button appearance="plain" href="/raggiesoft-books/books/knox" class="<?php echo $isChapters ? 'active' : ''; ?>">
        <i slot="start" class="fa-duotone fa-book-open-reader" aria-hidden="true"></i>Read the Story
    </wa-button>

    <!-- START: Lore Dropdown Navigation -->
    <wa-dropdown placement="bottom-start">
        <wa-button class="<?php echo $isLore ? 'active' : ''; ?>" slot="trigger" appearance="plain" with-caret>
            <i slot="start" class="fa-duotone fa-planet-ringed" aria-hidden="true"></i>The Telsan Gap
        </wa-button>
        <wa-dropdown-item value="/raggiesoft-books/knox/lore">
            <i slot="icon" class="fa-solid fa-earth-americas text-success"></i>World Data: Telsus Minor
        </wa-dropdown-item>
        <wa-divider></wa-divider>
        <wa-dropdown-item value="/raggiesoft-books/knox/lore/toys">
            <i slot="icon" class="fa-solid fa-box-dollar text-danger"></i>Merchandising vs. Reality
        </wa-dropdown-item>
    </wa-dropdown>

    <!-- START: Global Exit -->
    <wa-button appearance="plain" href="/raggiesoft-books">
        <i slot="start" class="fa-duotone fa-arrow-right-from-bracket text-body-secondary" aria-hidden="true"></i>
        <span class="text-body-secondary small">Ocean View Archives</span>
    </wa-button>

</div>