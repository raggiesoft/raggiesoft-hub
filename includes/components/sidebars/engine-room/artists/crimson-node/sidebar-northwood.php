<?php
// sidebar-northwood.php
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';

// Determine which accordion should be open
$isStudentActive = strpos($request_uri, '/students/') !== false;
$isStaffActive = strpos($request_uri, '/staff/') !== false;
?>

<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-dark text-white fw-bold text-uppercase" style="letter-spacing: 1px;">
        <a href="/engine-room/artists/crimson-node/characters/northwood" class="text-white text-decoration-none d-block">
            <i slot="start" class="fa-solid fa-arrow-left"></i> Northwood High
        </wa-button>
    </div>

    <div class="accordion accordion-flush" id="northwoodAccordion">
        
        <!-- Students Section -->
        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header" id="headingStudents">
                <button class="accordion-button <?= $isStudentActive ? '' : 'collapsed' ?> bg-body-tertiary fw-bold text-uppercase text-muted" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStudents" aria-expanded="<?= $isStudentActive ? 'true' : 'false' ?>" aria-controls="collapseStudents" style="font-size: 0.85rem; letter-spacing: 1px;">
                    Students
                </button>
            </h2>
            <div id="collapseStudents" class="accordion-collapse collapse <?= $isStudentActive ? 'show' : '' ?>" aria-labelledby="headingStudents" data-bs-parent="#northwoodAccordion">
                <div class="list-group list-group-flush">
                    <a href="/engine-room/artists/crimson-node/characters/northwood/students/courtney-evans" class="list-group-item list-group-item-action <?= ($request_uri == '/engine-room/artists/crimson-node/characters/northwood/students/courtney-evans') ? 'active' : '' ?>">
                        Courtney Evans
                    </wa-button>
                </div>
            </div>
        </div>

        <!-- Staff Section -->
        <div class="accordion-item border-0">
            <h2 class="accordion-header" id="headingStaff">
                <button class="accordion-button <?= $isStaffActive ? '' : 'collapsed' ?> bg-body-tertiary fw-bold text-uppercase text-muted" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStaff" aria-expanded="<?= $isStaffActive ? 'true' : 'false' ?>" aria-controls="collapseStaff" style="font-size: 0.85rem; letter-spacing: 1px;">
                    Staff & Administration
                </button>
            </h2>
            <div id="collapseStaff" class="accordion-collapse collapse <?= $isStaffActive ? 'show' : '' ?>" aria-labelledby="headingStaff" data-bs-parent="#northwoodAccordion">
                <div class="list-group list-group-flush">
                    <a href="/engine-room/artists/crimson-node/characters/northwood/staff/arthur-vance" class="list-group-item list-group-item-action <?= ($request_uri == '/engine-room/artists/crimson-node/characters/northwood/staff/arthur-vance') ? 'active' : '' ?>">
                        Arthur Vance
                    </wa-button>
                    <a href="/engine-room/artists/crimson-node/characters/northwood/staff/mrs-demarco" class="list-group-item list-group-item-action <?= ($request_uri == '/engine-room/artists/crimson-node/characters/northwood/staff/mrs-demarco') ? 'active' : '' ?>">
                        Mrs. DeMarco
                    </wa-button>
                    <a href="/engine-room/artists/crimson-node/characters/northwood/staff/mrs-periwinkle" class="list-group-item list-group-item-action <?= ($request_uri == '/engine-room/artists/crimson-node/characters/northwood/staff/mrs-periwinkle') ? 'active' : '' ?>">
                        Mrs. Periwinkle
                    </wa-button>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-header bg-danger text-white fw-bold text-uppercase" style="letter-spacing: 1px;">
        The Phalanx
    </div>
    <div class="list-group list-group-flush">
        <a href="/engine-room/artists/crimson-node/characters/family" class="list-group-item list-group-item-action">
            View Family Directory
        </wa-button>
    </div>
</div>
