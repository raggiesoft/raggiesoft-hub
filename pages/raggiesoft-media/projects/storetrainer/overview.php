<?php
// pages/raggiesoft-media/projects/storetrainer.php
// The StoreTrainer Legacy Archive
// Theme: Amber/Warning (Legacy Open Source)

$pageTitle = "StoreTrainer Archive | RaggieSoft Media";
?>

<style>
    /* --- LEGACY HERO SECTION --- */
    .legacy-hero {
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid var(--raggie-glass-border);
        box-shadow: 0 8px 32px rgba(255, 179, 0, 0.08);
        color: var(--bs-body-color);
        z-index: 1;
    }

    .legacy-hero::before {
        content: '';
        position: absolute;
        top: -5%; left: -5%; right: -5%; bottom: -5%; 
        background-image: url('https://assets.raggiesoft.com/raggiesoft-media/images/hero/dark-aero.jpg'); /* Defaults to dark aero for legacy feel */
        background-size: cover;
        background-position: center;
        z-index: -2;
        animation: aero-pan 40s linear infinite alternate;
        filter: sepia(100%) hue-rotate(5deg) saturate(150%) brightness(0.6); /* Amber tinting */
    }

    .legacy-hero::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(120deg, rgba(7, 11, 20, 0.95) 0%, rgba(255, 179, 0, 0.05) 100%);
        z-index: -1;
    }

    /* --- COMPONENT STYLING --- */
    .legacy-card {
        background: rgba(255, 179, 0, 0.05);
        border: 1px solid rgba(255, 179, 0, 0.2);
        box-shadow: inset 0 0 20px rgba(255, 179, 0, 0.02);
        border-radius: 12px;
    }
    
    .code-block {
        background: #0d1117;
        border: 1px solid #30363d;
        border-radius: 8px;
        color: #e6edf3;
        font-family: 'Courier New', Courier, monospace;
        font-size: 0.85rem;
    }
</style>

<div class="legacy-hero py-5 mb-5 text-light">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <span class="badge border border-warning rounded-pill font-monospace text-uppercase shadow-sm py-2 px-3 text-warning fw-bold mb-3" style="background: rgba(255, 179, 0, 0.1);">
                    <i class="fa-solid fa-box-archive me-1" aria-hidden="true"></i> Verified Legacy Software
                </span>
                <h1 class="display-4 fw-bold text-uppercase mb-2 brand-font" style="text-shadow: 0 0 15px rgba(255,179,0,0.5);">
                    StoreTrainer
                </h1>
                <p class="lead tech-font mb-0" style="max-width: 700px; color: #ced4da;">
                    A definitive archive of bare-metal Windows API engineering. Designed to store the locations of PC games and trainers in a unified, highly resilient interface.
                </p>
            </div>
            <div class="col-md-4 text-end d-none d-md-block">
                <i class="fa-duotone fa-floppy-disk fa-6x text-warning opacity-50" aria-hidden="true" style="filter: drop-shadow(0 0 15px rgba(255,179,0,0.5));"></i>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">

    <div class="row g-5">
        
        <div class="col-lg-8">
            <h2 class="h4 fw-bold text-uppercase text-warning mb-4 border-bottom border-warning pb-2">The Architecture</h2>
            
            <p class="mb-4">
                Maintained natively within a dedicated Windows 2000 Professional SP4 (Update Rollup 1) virtual machine, StoreTrainer is compiled in Visual Basic 6.0 Professional. The project is an exercise in extreme backward and forward compatibility, bridging the gap between the Windows 9x kernel architecture and the modern 64-bit Windows ecosystem.
            </p>

            <div class="legacy-card p-4 mb-5">
                <h3 class="h5 fw-bold text-body-emphasis mb-3"><i class="fa-solid fa-microchip text-warning me-2" aria-hidden="true"></i>Bare-Metal Defense</h3>
                <p class="small text-body-secondary mb-3">
                    The source code relies heavily on dynamic API loading to prevent fatal crashes on legacy systems. For example, explicitly calling <code>IsWow64Process</code> on a Windows 98 machine would cause an immediate termination. StoreTrainer circumvents this by manually querying memory addresses:
                </p>
                <pre class="code-block p-3 overflow-x-auto mb-0"><code>' DetectOSBits.bas - Dynamic WOW64 Verification
handle = GetProcAddress(GetModuleHandle("kernel32"), "IsWow64Process")

' The function exists, so call it safely
If handle <> 0 Then
    IsWow64Process GetCurrentProcess(), is64Bit
End If</code></pre>
            </div>

            <h2 class="h4 fw-bold text-uppercase text-warning mb-4 border-bottom border-warning pb-2">Deployment & Preservation</h2>
            
            <p class="mb-3">
                The distribution of StoreTrainer is handled via a highly complex Nullsoft Scriptable Install System (NSIS) package. Because modern operating systems (up to and including Windows 11) incredibly still ship with <code>MSVBVM60.DLL</code>, the software runs natively today. However, the installer assumes absolutely nothing about the host machine.
            </p>
            <p class="mb-4">
                The <code>TSSetup.nsi</code> package serves as a self-contained preservation capsule, dropping the complete source code and necessary Microsoft Redistributables directly onto the target machine.
            </p>

            <div class="table-responsive mb-5">
                <table class="table table-hover align-middle border-secondary-subtle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" class="text-uppercase small">Included Dependency</th>
                            <th scope="col" class="text-uppercase small">Deployment Target</th>
                            <th scope="col" class="text-uppercase small">Purpose</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold font-monospace small">msvbvm60.dll / oleaut32.dll</td>
                            <td class="small">Windows 95/98/ME</td>
                            <td class="small">The 2012 Security Patch versions of the core VB6 runtimes. Installed safely via the <code>InstallLib</code> macro to avoid System File Protection violations.</td>
                        </tr>
                        <tr>
                            <td class="fw-bold font-monospace small">DCOM98.exe</td>
                            <td class="small">Windows 9x Only</td>
                            <td class="small">Installs the Distributed Component Object Model necessary for legacy systems to process advanced object creation.</td>
                        </tr>
                        <tr>
                            <td class="fw-bold font-monospace small">WScr9x.exe / WScrNT2k.exe</td>
                            <td class="small">Win 9x & NT 4.0/2000</td>
                            <td class="small">Installs Windows Script Host 5.6 (satisfying the <code>wshom.ocx</code> dependency) conditionally based on kernel detection.</td>
                        </tr>
                        <tr>
                            <td class="fw-bold font-monospace small">$INSTDIR\Source</td>
                            <td class="small">All Systems</td>
                            <td class="small">Extracts the pristine `.vbp` project file, forms, and modules directly to the user's drive for full educational auditing and recompilation.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="col-lg-4">
            
            <div class="card bg-body-tertiary border-secondary-subtle shadow-sm mb-4">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-uppercase mb-3 text-secondary">Tech Specs</h3>
                    
                    <ul class="list-unstyled small mb-0">
                        <li class="mb-2 d-flex justify-content-between border-bottom border-secondary-subtle pb-2">
                            <span class="text-body-secondary">Language:</span>
                            <span class="fw-bold">Visual Basic 6.0</span>
                        </li>
                        <li class="mb-2 d-flex justify-content-between border-bottom border-secondary-subtle pb-2">
                            <span class="text-body-secondary">Installer:</span>
                            <span class="fw-bold">NSIS (Wizard95 UI)</span>
                        </li>
                        <li class="mb-2 d-flex justify-content-between border-bottom border-secondary-subtle pb-2">
                            <span class="text-body-secondary">UI Engine:</span>
                            <span class="fw-bold text-end">Comdlg32 / Luna Aero <br><span class="fw-normal opacity-75">(via InitCommonControls)</span></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span class="text-body-secondary">Compatibility:</span>
                            <span class="fw-bold text-success">Win95 — Win11</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="d-grid gap-3">
                <a href="https://raggiesoft.com/products/storetrainer/" target="_blank" rel="noopener noreferrer" class="btn btn-warning py-3 fw-bold text-uppercase shadow-sm text-dark">
                    <i class="fa-solid fa-download me-2" aria-hidden="true"></i> Download Archive
                </a>
            </div>

        </div>

    </div>
</div>