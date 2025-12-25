<?php
// includes/components/headers/header-nine-figure-refusal.php
// Dedicated Navigation for the "Accidental Empire" Case File
// UPDATED: Converted "The Case File" to a 2-Column Mega Menu to handle bloat.

// 1. Determine Active States
$uri = $_SERVER['REQUEST_URI'] ?? '';
$isOverview = str_contains($uri, '/nine-figure-refusal');

// Updated Evidence List
$evidenceFiles = [
    'target-profile', 'ucc-search-report', 'the-bus-memo', 
    'forensic-audit', 'the-smoking-gun', 'the-offer-letter', 'the-counter-offer',
    'the-trigger', 'the-autopsy', 'the-extraction',
    'omni-global-chapter-11', 'liquidation-auction', 'stardust-bus-ride'
];

$isEvidence = false;
foreach ($evidenceFiles as $file) {
    if (str_contains($uri, $file)) {
        $isEvidence = true;
        break;
    }
}

$isAssets = (str_contains($uri, '/the-jessica-miller-center') || str_contains($uri, '/the-non-profit-model'));
$isEpilogue = str_contains($uri, '/frost-interview');
?>

<style>
    /* Desktop: Make the dropdown wide enough for 2 columns */
    @media (min-width: 992px) {
        .mega-menu-case-file {
            min-width: 650px;
        }
    }
</style>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">

    <li class="nav-item">
        <a class="nav-link" href="/"><i class="fa-duotone fa-house me-2"></i>Home</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php echo $isOverview ? 'active fw-bold' : ''; ?>" 
           href="/engine-room/history/nine-figure-refusal">
            <i class="fa-duotone fa-chart-network me-2"></i>Overview
        </a>
    </li>

    <li class="nav-item dropdown position-static">
        <a class="nav-link dropdown-toggle <?php echo $isEvidence ? 'active fw-bold' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-duotone fa-file-magnifying-glass me-2"></i>The Case File
        </a>
        <div class="dropdown-menu dropdown-menu-end shadow-lg border-danger mega-menu-case-file p-0">
            <div class="row g-0">
                
                <div class="col-lg-6 border-end border-secondary border-opacity-25 p-3">
                    <h6 class="dropdown-header text-uppercase text-muted fw-bold small ps-0"><i class="fa-solid fa-chess-pawn me-2"></i>Ch 1: The Setup</h6>
                    <ul class="list-unstyled mb-4">
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/target-profile"><i class="fa-duotone fa-crosshairs me-2 text-danger"></i>Target Profile</a></li>
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/ucc-search-report"><i class="fa-duotone fa-file-certificate me-2 text-secondary"></i>UCC Search Report</a></li>
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/the-bus-memo"><i class="fa-duotone fa-envelope-open-text me-2 text-warning"></i>The Bus Memo</a></li>
                    </ul>

                    <h6 class="dropdown-header text-uppercase text-muted fw-bold small ps-0 border-top pt-3"><i class="fa-solid fa-chess-knight me-2"></i>Ch 2: The Trap</h6>
                    <ul class="list-unstyled mb-0">
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/forensic-audit"><i class="fa-duotone fa-magnifying-glass-dollar me-2 text-primary"></i>Holly's Homework</a></li>
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/the-smoking-gun"><i class="fa-duotone fa-envelope me-2 text-danger"></i>The Smoking Gun</a></li>
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/the-offer-letter"><i class="fa-duotone fa-file-contract me-2 text-dark"></i>The Offer Letter</a></li>
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/the-counter-offer"><i class="fa-duotone fa-envelope-circle-check me-2 text-warning"></i>The Counter-Offer</a></li>
                    </ul>
                </div>

                <div class="col-lg-6 p-3 bg-body-tertiary">
                    <h6 class="dropdown-header text-uppercase text-muted fw-bold small ps-0"><i class="fa-solid fa-chess-queen me-2"></i>Ch 3: The Event</h6>
                    <ul class="list-unstyled mb-4">
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/the-trigger"><i class="fa-duotone fa-bolt me-2 text-danger"></i>The Trigger (Slide 14)</a></li>
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/the-autopsy"><i class="fa-duotone fa-laptop-code me-2 text-success"></i>The Autopsy</a></li>
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/the-extraction"><i class="fa-duotone fa-person-to-door me-2 text-info"></i>The Extraction</a></li>
                    </ul>

                    <h6 class="dropdown-header text-uppercase text-muted fw-bold small ps-0 border-top pt-3"><i class="fa-solid fa-chess-king me-2"></i>Ch 4: The Fallout</h6>
                    <ul class="list-unstyled mb-0">
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/zenith-report/omni-global-chapter-11"><i class="fa-duotone fa-newspaper me-2 text-dark"></i>Market Alert: Ch. 11</a></li>
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/liquidation-auction"><i class="fa-duotone fa-gavel me-2 text-danger"></i>The Liquidation Auction</a></li>
                        <li><a class="dropdown-item rounded" href="/engine-room/history/nine-figure-refusal/zenith-report/stardust-bus-ride"><i class="fa-duotone fa-bus me-2 text-warning"></i>The Bus Ride Article</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo $isAssets ? 'active fw-bold' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-duotone fa-building me-2"></i>Legacy
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-success">
            <li><h6 class="dropdown-header text-uppercase text-success fw-bold">Real Estate</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/the-jessica-miller-center">
                    <i class="fa-duotone fa-building-columns me-2 text-success"></i>The Jessica Miller Center
                </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header text-uppercase text-primary fw-bold">Operations</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/the-non-profit-model">
                    <i class="fa-duotone fa-hand-holding-box me-2 text-primary"></i>The Non-Profit Model
                </a>
            </li>
        </ul>
    </li>

     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo $isEpilogue ? 'active fw-bold' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-duotone fa-building me-2"></i>Epilogue
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-success">
            <li><h6 class="dropdown-header text-uppercase text-success fw-bold">Epilogue</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/frost-interview">
                    <i class="fa-duotone fa-clipboard-question me-2 text-success"></i>Frost Interview
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item border-start ms-2 ps-2">
      <a class="nav-link" href="/engine-room">
        <i class="fa-duotone fa-arrow-right-from-bracket me-2 text-secondary"></i><span class="text-secondary small">Engine Room HQ</span>
      </a>
  </li>

</ul>