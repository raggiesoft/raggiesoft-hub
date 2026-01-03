<?php
/**
 * COMPONENT: Corporate Letterhead Generator
 * PATH: /includes/components/corporate/letterhead.php
 * Updated: WCAG Compliance (Forced Light Mode) & URL Updates
 */

// Default Settings
$current_brand = $brand ?? 'engine-room';
$stamp_text = $letter_stamp ?? null;
$stamp_class = $stamp_color ?? 'success'; 
$rotation = $letter_rotation ?? 0;

// Brand Logic
if ($current_brand === 'pacific-rim') {
    // PACIFIC RIM PROPERTIES CONFIGURATION
    $brand_name = "Pacific Rim Properties, LLC";
    $brand_font = "'Playfair Display', serif"; // Old Money / Legal
    $brand_sub = "Asset Management & Real Estate Holdings";
    $brand_est = "Est. 2012 (DE)";
    
    // UPDATED URL: Hidden for privacy (Stealth Wealth)
    $brand_url = null; 
    
    $brand_logo = '<i class="fa-duotone fa-building-columns fa-3x text-secondary"></i>'; 
    
    // Signature: The Lawyer 
    $sig_title = "Attorney for Landlord";
    $sig_sub = "State Bar of California"; 
    $sig_creds = "Representing: The O'Connell Family Revocable Trust";
    
} else {
    // ENGINE ROOM RECORDS CONFIGURATION (Default)
    $brand_name = "Engine Room Records, LLC";
    $brand_font = "'Impact', sans-serif"; // Industrial / Bold
    $brand_sub = "Wilmington, Delaware";
    $brand_est = "Est. 1992 (VA)";
    
    // UPDATED URL
    $brand_url = "raggiesoft.com/engine-room";
    
    $brand_logo = '<img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.jpg" alt="Official Seal" style="width: 100px; mix-blend-mode: multiply; filter: contrast(120%);">';
    
    // Signature: The CEO
    $sig_title = "Chief Executive Officer & General Counsel";
    $sig_sub = "J.D. ('94) & LL.M. in Taxation ('98)";
    $sig_creds = "Bar Admissions: VA, NY, CA, DE &bull; CFA &bull; Cr.FA &bull; CIRA";
}

$rotation_style = $rotation ? "transform: rotate({$rotation}deg);" : "";
?>

<style>
    /* FORCED LIGHT MODE FOR PHYSICAL DOCUMENTS */
    /* Ensures AAA Contrast (Black on White) regardless of system theme */
    .physical-document {
        background-color: #ffffff !important;
        color: #000000 !important;
    }
    
    /* Override Bootstrap utilities inside the document context */
    .physical-document .text-muted { color: #6c757d !important; }
    .physical-document .text-secondary { color: #6c757d !important; }
    .physical-document .text-dark { color: #000000 !important; }
    .physical-document .border-dark { border-color: #000000 !important; }
    .physical-document .border-secondary { border-color: #6c757d !important; }
    
    /* Ensure links inside don't turn blue/invisible in dark mode */
    .physical-document a { color: #000000 !important; text-decoration: underline; }
</style>

<div class="card border-0 shadow-lg mx-auto physical-document" 
     style="max-width: 850px; <?php echo $rotation_style; ?> transition: transform 0.3s ease;">
    
    <div class="card-body p-5 position-relative overflow-hidden">
        
        <div class="d-flex justify-content-between align-items-center border-bottom border-dark pb-4 mb-4">
            <div>
                <h4 class="fw-bold text-uppercase mb-0 text-dark" style="font-family: <?php echo $brand_font; ?>; letter-spacing: 1px;">
                    <?php echo $brand_name; ?>
                </h4>
                
                <div class="text-secondary text-uppercase letter-spacing-1 fw-bold d-flex align-items-center gap-2" style="font-size: 0.75rem;">
                    <span><?php echo $brand_sub; ?></span>
                    <i class="fa-solid fa-circle" style="font-size: 4px;"></i>
                    <span><?php echo $brand_est; ?></span>
                    <i class="fa-solid fa-circle" style="font-size: 4px;"></i>
                    <span>Privately Held</span>
                </div>

                <?php if ($brand_url): ?>
                <div class="text-secondary letter-spacing-1 fw-bold mt-1" style="font-size: 0.75rem;">
                    <i class="fa-solid fa-globe me-1 opacity-50"></i>
                    <span style="font-family: 'Courier New', monospace; text-transform: lowercase;"><?php echo $brand_url; ?></span>
                </div>
                <?php endif; ?>
            </div>

            <div class="text-end">
                <?php echo $brand_logo; ?>
            </div>
        </div>

        <div class="text-dark" style="font-family: 'Times New Roman', serif; font-size: 1.1rem; line-height: 1.6;">
            
            <div class="mb-4">
                <p class="mb-1"><strong>Date:</strong> <?php echo $letter_date; ?></p>
                <p class="mb-0"><strong>To:</strong> <?php echo $letter_to; ?></p>
            </div>
            
            <div class="letter-content mb-5 text-justify">
                <?php echo $letter_body; ?>
            </div>

            <div class="mt-5 position-relative d-inline-block">
                <div class="position-absolute" 
                     style="top: -45px; left: -10px; font-family: 'Mrs Saint Delafield', cursive; font-size: 3.5rem; color: #1a237e; transform: rotate(-5deg); opacity: 0.9; pointer-events: none; white-space: nowrap;">
                    Holly O'Connell
                </div>
                
                <div class="pt-2 position-relative" style="z-index: 1;">
                    <p class="mb-0 fw-bold text-uppercase letter-spacing-1 text-dark">Holly O'Connell, Esq.</p>
                    <p class="mb-1 small text-secondary fw-bold text-uppercase"><?php echo $sig_title; ?></p>
                    
                    <div class="text-muted border-top border-secondary pt-1" style="font-size: 0.7rem; line-height: 1.4; font-family: 'Arial', sans-serif;">
                        <p class="mb-0 fw-bold"><?php echo $sig_sub; ?></p>
                        <p class="mb-0 fst-italic"><?php echo $sig_creds; ?></p>
                    </div>
                </div>
            </div>

        </div>

        <?php if ($stamp_text): ?>
        <div class="position-absolute bottom-0 end-0 p-5 opacity-75" 
             style="transform: rotate(-10deg); mix-blend-mode: multiply; pointer-events: none;">
            
            <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="grunge-filter-<?php echo strtolower(str_replace(' ', '', $stamp_text)); ?>">
                        <feTurbulence type="fractalNoise" baseFrequency="0.05" numOctaves="3" result="noise" />
                        <feColorMatrix type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" in="noise" result="coloredNoise" />
                        <feComposite operator="in" in="coloredNoise" in2="SourceGraphic" result="composite" />
                    </filter>
                </defs>
            </svg>

            <div class="border border-4 border-<?php echo $stamp_class; ?> text-<?php echo $stamp_class; ?> p-2 fw-bold text-uppercase fs-1 text-center" 
                 style="font-family: 'Black Ops One', cursive; line-height: 1; filter: url(#grunge-filter-<?php echo strtolower(str_replace(' ', '', $stamp_text)); ?>);">
                <?php echo $stamp_text; ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>