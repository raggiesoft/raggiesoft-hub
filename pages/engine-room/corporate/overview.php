<?php
/**
 * ARCHITECTURE & LORE SYSTEM
 * -------------------------------------------------------------------------
 * File: overview.php
 * Component Type: Corporate Landing Page
 * Purpose: Acts as the primary gateway for "The Engine Room" administrative hub.
 * 
 * DESIGN CONSTRAINTS:
 * - Employs a 3-column Bootstrap grid for structural links (Structure, Liquidation, Leadership).
 * - "The Vault" / "Internal Operations" section uses a dark mode card layout.
 * - DO NOT remove FontAwesome duotone icons, as they define the visual hierarchy.
 * - The `d-none d-lg-block` classes control responsive visibility of decorative icons.
 * 
 * MAINTENANCE NOTES:
 * - Links to sub-sections (e.g., `/engine-room/corporate/aethelgard`) must align with routing configs.
 * - The "SYSTEM_STATUS" block is purely aesthetic (narrative lore), not live data.
 */
// pages/engine-room/corporate/overview.php
// Context: The Landing Page for the Family Office.
// Theme: Corporate / Clean.

$pageTitle = "Corporate Gateway - The O'Connell Family Trust";
?>

<div class="container py-5">
    
    <div class="row mb-5 align-items-center">
        <div class="col-lg-8">
            <h6 class="text-uppercase text-muted letter-spacing-2 mb-2">Internal Governance Portal</h6>
            <h1 class="display-4 fw-bold text-primary mb-3">The Engine Room</h1>
            <p class="lead text-secondary">
                The administrative heart of The O'Connell Family Revocable Trust.
                <br>Managing $2.4B in assets across Media, Real Estate, and Philanthropy.
            </p>
        </div>
        <div class="col-lg-4 text-end d-none d-lg-block">
            <i class="fa-duotone fa-shield-halved fa-5x text-body-tertiary"></i>
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-md-4">
            <wa-card class="card h-100 border-primary border-top-4 shadow-sm w-100" style="--body-padding: 0; --header-padding: 0;">
                <div class="card-body p-4">
                    <div class="mb-3 text-primary">
                        <i class="fa-duotone fa-sitemap fa-2x"></i>
                    </div>
                    <h4 class="card-title fw-bold">Structure</h4>
                    <p class="card-text text-muted small">
                        The "Iceberg" Model. How we compartmentalize liability and protect the family's core assets from external threats.
                    </p>
                    <wa-button variant="brand" appearance="outlined" size="small" href="/engine-room/corporate/structure" class="stretched-link">View Architecture</wa-button>
                </div>
            </wa-card>
        </div>

        <div class="col-md-4">
            <wa-card class="card h-100 border-danger border-top-4 shadow-sm w-100" style="--body-padding: 0; --header-padding: 0;">
                <div class="card-body p-4">
                    <div class="mb-3 text-danger">
                        <i class="fa-duotone fa-gavel fa-2x"></i>
                    </div>
                    <h4 class="card-title fw-bold">Liquidation</h4>
                    <p class="card-text text-muted small">
                        <strong>Aethelgard Holdings.</strong> Our strategic acquisition arm. We acquire distressed companies to liberate their assets.
                    </p>
                    <wa-button variant="danger" appearance="outlined" size="small" href="/engine-room/corporate/aethelgard" class="stretched-link">Review Strategy</wa-button>
                </div>
            </wa-card>
        </div>

        <div class="col-md-4">
            <wa-card class="card h-100 border-success border-top-4 shadow-sm w-100" style="--body-padding: 0; --header-padding: 0;">
                <div class="card-body p-4">
                    <div class="mb-3 text-success">
                        <i class="fa-duotone fa-users-viewfinder fa-2x"></i>
                    </div>
                    <h4 class="card-title fw-bold">Leadership</h4>
                    <p class="card-text text-muted small">
                        <strong>The Miller Unit.</strong> Meet the Directors of the Jessica Miller Center and the architects of our daily operations.
                    </p>
                    <wa-button variant="success" appearance="outlined" size="small" href="/engine-room/corporate/leadership" class="stretched-link">Meet the Directors</wa-button>
                </div>
            </wa-card>
        </div>

    </div>

    <wa-card class="card bg-dark text-white shadow-lg mb-5 overflow-hidden w-100" style="--body-padding: 0; --header-padding: 0; --wa-panel-bg: transparent;">
        <div class="row g-0">
            <div class="col-md-8 p-5">
                <h3 class="fw-bold text-info mb-3">
                    <i class="fa-solid fa-server me-2"></i>Internal Operations
                </h3>
                <p class="text-white-50">
                    Access real-time logistics, fleet tracking, and the digital archive ("The Vault"). 
                    <br><small class="text-info">*Restricted to Level 5 Clearance (Justin Miller).</small>
                </p>
                <div class="d-flex gap-3 mt-4">
                    <wa-button variant="brand" appearance="accent" href="/engine-room/corporate/systems" class="fw-bold">
                        <i slot="start" class="fa-solid fa-terminal"></i>Systems Console
                    </wa-button>
                    <wa-button variant="neutral" appearance="outlined" href="/engine-room/corporate/fleet">
                        <i slot="start" class="fa-solid fa-bus"></i>Fleet Command
                    </wa-button>
                </div>
            </div>
            <div class="col-md-4 bg-black d-flex align-items-center justify-content-center p-4">
                <div class="font-monospace text-success small">
                    > SYSTEM_STATUS: ONLINE<br>
                    > UPTIME: 412 DAYS<br>
                    > ENCRYPTION: ACTIVE<br>
                    > LOGIN: AUTHORIZED
                </div>
            </div>
        </div>
    </wa-card>

    <div class="text-center text-muted small fst-italic">
        <p>"Money is just the fuel. The music is the destination." — Cassidy O'Connell</p>
    </div>

</div>