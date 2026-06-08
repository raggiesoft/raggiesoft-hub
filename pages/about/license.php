<?php
// pages/about/license.php
// DEPRECATED: Notice page for the old licensing URL.
// All traffic should now route to the centralized RaggieSoft Media portal.

$pageTitle = "Licensing Portal Moved | RaggieSoft";
?>

<div class="container py-5 min-vh-50 d-flex flex-column justify-content-center">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            
            <div class="mb-4">
                <i class="fa-duotone fa-signs-post fa-5x text-warning opacity-75" aria-hidden="true"></i>
            </div>
            
            <h1 class="display-5 fw-bold mb-3 text-body-emphasis">Portal Relocated</h1>
            
            <p class="lead text-body-secondary mb-5">
                The RaggieSoft licensing and copyright documentation has been centralized. All open-source (MIT), creative (CC BY-SA 4.0), and commercial synchronization clearances are now managed through the <strong>RaggieSoft Media&trade;</strong> B2B portal.
            </p>

            <div class="card border-warning bg-warning-subtle shadow-sm mb-4">
                <div class="card-body p-4 p-md-5">
                    <h2 class="h4 fw-bold text-warning-emphasis mb-3">Please update your bookmarks.</h2>
                    <a href="/raggiesoft-media/licensing" class="btn btn-warning btn-lg rounded-pill px-5 fw-bold shadow-sm text-dark text-uppercase" style="letter-spacing: 1px;">
                        Go to the New Licensing Portal <i class="fa-solid fa-arrow-right ms-2" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <p class="small text-muted font-monospace mt-4">
                <i class="fa-solid fa-circle-info me-1" aria-hidden="true"></i> System Note: You reached this page from an outdated link in the archives. Redirecting automatically...
            </p>

        </div>
    </div>
</div>

<script>
    // Automatically route the user to the new portal after 5 seconds.
    // Because Elara intercepts standard clicks, we use a standard window.location 
    // here to force the browser to navigate if they sit idle.
    setTimeout(function() {
        window.location.href = '/raggiesoft-media/licensing';
    }, 5000);
</script>