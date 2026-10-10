<?php
/**
 * Engine Room - DSP Verification Header
 * 
 * ARCHITECTURAL OVERVIEW:
 * A minimal, utilitarian header used strictly for the "DSP Verification" portal.
 * It intentionally avoids deep lore links or mega-menus to simulate a secure, 
 * B2B administrative environment.
 * 
 * LOGIC & CONSTRAINTS:
 * - Simple layout using Web Awesome buttons.
 * - The `mailto:` link is currently hardcoded and exposed. (Unlike the obfuscated
 *   email links in the main Engine Room header).
 * 
 * File Info: includes/components/headers/engine-room/header-dsp.php
 * Sterile, administrative header for DSP verifiers. No lore links.
 */
?>
<div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center gap-2 ms-auto py-3 py-md-0 w-100 mobile-nav-menu">
  
  
    <wa-button appearance="plain" href="/engine-room/dsp-verification" class="active fw-bold text-info">
        <i slot="start" class="fa-solid fa-folder-open me-2" aria-hidden="true"></i>Master Directory
    </wa-button>
  

  
      <wa-button appearance="plain" href="mailto:dsp.operations@engineroom-records.com" class="text-body-secondary hover-text-info">
        <i slot="start" class="fa-solid fa-envelope me-2" aria-hidden="true"></i><span class="small">Contact DSP Support</span>
      </wa-button>
  

</div>