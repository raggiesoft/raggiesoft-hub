<?php 
// includes/components/styles/zenith-theme.php 
// Shared CSS for all Zenith Report pages
?>
<style>
    /* NEWSPAPER THEME - ADAPTIVE */
    .zenith-paper {
        background-color: #f9f9f9;
        color: #1a1a1a;
        transform: rotate(1deg); /* The slight tilt */
        transition: all 0.3s ease;
        border: 1px solid #d3d3d3;
    }
    
    .zenith-header {
        background-color: #ffffff;
        border-bottom: 3px solid #000;
        font-family: 'Times New Roman', serif;
    }

    .zenith-body {
        font-family: 'Georgia', serif;
        font-size: 1.1rem;
        line-height: 1.8;
    }

    .zenith-sidebar-header {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-bottom: 2px solid #000;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
    }

    /* DARK MODE OVERRIDES */
    [data-bs-theme="dark"] .zenith-paper {
        background-color: #15171e; /* Dark slate paper */
        color: #e0e0e0;
        border-color: #444;
    }

    [data-bs-theme="dark"] .zenith-header {
        background-color: #1c2029; /* Slightly lighter header */
        border-bottom: 3px solid #e0e0e0;
    }

    [data-bs-theme="dark"] .zenith-header h2 {
        color: #e0e0e0 !important;
    }

    /* Force text utility classes to adapt */
    [data-bs-theme="dark"] .text-dark {
        color: #e0e0e0 !important;
    }
    
    [data-bs-theme="dark"] .border-dark {
        border-color: #555 !important;
    }
    
    [data-bs-theme="dark"] .border-secondary-subtle {
        border-color: #333 !important;
    }

    /* ACCESSIBILITY: REDUCED MOTION SUPPORT */
    /* Overrides the tilt and transition if the user requests reduced motion */
    @media (prefers-reduced-motion: reduce) {
        .zenith-paper {
            transform: none !important; /* Force paper straight */
            transition: none !important; /* Remove animation */
        }
    }
</style>