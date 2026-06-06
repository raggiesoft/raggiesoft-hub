<?php
// includes/components/sidebars/raggiesoft-media/licensing/sidebar-licensing.php
// Contextual navigation for the Master Licensing portal.
?>

<div class="mb-4">
    <h5 class="pt-3 pb-2 mb-3 border-bottom border-secondary-subtle text-uppercase h6 fw-bold text-secondary">
        <i class="fa-solid fa-folder-tree me-2"></i>IP Portfolio
    </h5>
    <ul class="nav flex-column small">
        <li class="nav-item mb-1">
            <a class="nav-link link-body-emphasis hover-text-primary" href="/raggiesoft-media/licensing">
                <i class="fa-duotone fa-house me-2"></i>Licensing Overview
            </a>
        </li>
        <li class="nav-item mb-1">
            <a class="nav-link link-body-emphasis hover-text-primary" href="/raggiesoft-media/licensing/commercial">
                <i class="fa-duotone fa-briefcase me-2 text-primary"></i>Commercial Sync
            </a>
        </li>
        <li class="nav-item mb-1">
            <a class="nav-link link-body-emphasis hover-text-warning" href="/raggiesoft-media/licensing#cc-by-sa">
                <i class="fa-brands fa-creative-commons me-2 text-warning"></i>Creative Commons
            </a>
        </li>
        <li class="nav-item mb-1">
            <a class="nav-link link-body-emphasis hover-text-info" href="/raggiesoft-media/projects/elara">
                <i class="fa-brands fa-github me-2 text-info"></i>MIT Architecture
            </a>
        </li>
    </ul>
</div>

<div class="mb-4">
    <h6 class="text-uppercase fw-bold text-body-secondary mb-3 small border-bottom border-secondary-subtle pb-2">
        <i class="fa-solid fa-envelope me-2"></i>Direct Desks
    </h6>
    <ul class="nav flex-column small">
        <li class="nav-item mb-2">
            <a class="nav-link p-0 link-secondary font-monospace hover-text-primary" href="mailto:sync@raggiesoftmedia.com">
                sync@raggiesoftmedia.com
            </a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link p-0 link-secondary font-monospace hover-text-warning" href="mailto:licensing@raggiesoftmedia.com">
                licensing@raggiesoftmedia.com
            </a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link p-0 link-secondary font-monospace hover-text-info" href="mailto:ops@raggiesoftmedia.com">
                ops@raggiesoftmedia.com
            </a>
        </li>
    </ul>
</div>

<style>
    .hover-text-primary:hover { color: var(--bs-primary) !important; }
    .hover-text-warning:hover { color: var(--bs-warning) !important; }
    .hover-text-info:hover { color: var(--bs-info) !important; }
</style>