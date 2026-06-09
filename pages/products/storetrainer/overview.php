<?php
// pages/products/storetrainer/overview.php
// Legacy Endpoint for TSSetup.nsi (MUI_FINISHPAGE_LINK_LOCATION)
// Theme: Windows Classic / Y2K Time Capsule

$pageTitle = "StoreTrainer | RaggieSoft Software";
?>

<style>
    /* --- TIME CAPSULE: WINDOWS CLASSIC THEME --- */
    .time-capsule-wrapper {
        background-color: #008080; /* Classic Windows 95 Desktop Teal */
        font-family: 'Tahoma', 'MS Sans Serif', sans-serif;
        padding: 40px 20px;
        min-height: 80vh;
        color: #000;
    }

    /* Classic Windows Application Window */
    .win-window {
        background-color: #c0c0c0;
        border-top: 2px solid #ffffff;
        border-left: 2px solid #ffffff;
        border-right: 2px solid #808080;
        border-bottom: 2px solid #808080;
        max-width: 800px;
        margin: 0 auto;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
    }

    /* Classic Title Bar */
    .win-titlebar {
        background: linear-gradient(90deg, #000080, #1084d0); /* Active Titlebar Blue */
        color: white;
        padding: 3px 5px;
        font-weight: bold;
        font-size: 14px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .win-titlebar-buttons span {
        display: inline-block;
        width: 16px;
        height: 14px;
        background-color: #c0c0c0;
        border-top: 1px solid #ffffff;
        border-left: 1px solid #ffffff;
        border-right: 1px solid #000000;
        border-bottom: 1px solid #000000;
        color: #000;
        font-size: 10px;
        text-align: center;
        line-height: 12px;
        cursor: default;
        margin-left: 2px;
    }

    /* Classic Content Area */
    .win-content {
        padding: 20px;
        font-size: 12px;
    }

    /* Classic Sunken TextBox/Panel */
    .win-sunken {
        background-color: #ffffff;
        border-top: 2px solid #808080;
        border-left: 2px solid #808080;
        border-right: 2px solid #ffffff;
        border-bottom: 2px solid #ffffff;
        padding: 10px;
        margin-bottom: 20px;
    }

    /* Classic Button */
    .win-button {
        background-color: #c0c0c0;
        border-top: 2px solid #ffffff;
        border-left: 2px solid #ffffff;
        border-right: 2px solid #808080;
        border-bottom: 2px solid #808080;
        padding: 6px 15px;
        font-family: 'Tahoma', sans-serif;
        font-size: 12px;
        color: #000;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
    }
    .win-button:active {
        border-top: 2px solid #808080;
        border-left: 2px solid #808080;
        border-right: 2px solid #ffffff;
        border-bottom: 2px solid #ffffff;
        padding: 7px 14px 5px 16px; /* Shift content slightly down and right */
    }

    /* Reset some Elara SPA / Bootstrap defaults inside the capsule */
    .time-capsule-wrapper h1, 
    .time-capsule-wrapper h2, 
    .time-capsule-wrapper h3 {
        font-family: 'Tahoma', 'MS Sans Serif', sans-serif;
        font-weight: bold;
        margin-bottom: 10px;
        color: #000;
    }
    .time-capsule-wrapper p {
        margin-bottom: 15px;
        line-height: 1.4;
    }
    .time-capsule-wrapper hr {
        border-top: 1px solid #808080;
        border-bottom: 1px solid #ffffff;
        margin: 15px 0;
        opacity: 1;
    }
</style>

<div class="time-capsule-wrapper w-100">
    <div class="win-window">
        
        <div class="win-titlebar">
            <span><i class="fa-solid fa-floppy-disk me-2" aria-hidden="true" style="font-size: 12px;"></i> RaggieSoft StoreTrainer - Microsoft Internet Explorer</span>
            <div class="win-titlebar-buttons">
                <span>_</span><span>&#9723;</span><span>X</span>
            </div>
        </div>

        <div class="win-content">
            <h1 style="font-size: 24px; display: flex; align-items: center;">
                <i class="fa-duotone fa-box-archive text-primary me-3" aria-hidden="true" style="font-size: 32px;"></i> 
                RaggieSoft StoreTrainer
            </h1>
            <hr>

            <div class="row">
                <div class="col-md-8">
                    <p><strong>Version:</strong> 1.0.0 (Legacy Archive)</p>
                    <p><strong>Architecture:</strong> 32-bit (x86) / Visual Basic 6.0</p>
                    
                    <div class="win-sunken">
                        <h2 style="font-size: 14px;">Program Description</h2>
                        <p>
                            RaggieSoft StoreTrainer is a specialized utility designed to manage and store the locations of your PC games and trainers in an easy-to-use format. Built with absolute system resilience in mind, the software ensures correct data routing across decades of Windows hardware.
                        </p>
                        <p style="margin-bottom: 0;">
                            <em>Note: This is preserved legacy software. The installer dynamically detects your operating system and safely unpacks the required runtime libraries (including DCOM98 and WSH 5.6 for legacy environments).</em>
                        </p>
                    </div>

                    <h2 style="font-size: 14px;">System Requirements</h2>
                    <ul style="padding-left: 20px;">
                        <li><strong>OS:</strong> Windows 95, 98, ME, NT 4.0 (SP3), 2000, XP, Vista, 7, 8, 10, or 11</li>
                        <li><strong>CPU:</strong> Intel Pentium or compatible</li>
                        <li><strong>RAM:</strong> 32 MB minimum</li>
                        <li><strong>Rights:</strong> Administrator privileges required for installation</li>
                    </ul>
                </div>

                <div class="col-md-4 text-center mt-3 mt-md-0">
                    <div style="border: 2px solid #808080; padding: 15px; background: #e0e0e0; border-top-color: #ffffff; border-left-color: #ffffff;">
                        <i class="fa-duotone fa-file-exe mb-3" aria-hidden="true" style="font-size: 48px; color: #000080;"></i>
                        <br>
                        <strong>tssetup100.exe</strong>
                        <p style="font-size: 10px; margin-top: 5px; color: #666;">(Includes Source Code & Redistributables)</p>
                        
                        <a href="https://assets.raggiesoft.com/products/downloads/store-trainer/tssetup100.exe" class="win-button mt-3 fw-bold">
                            <i class="fa-solid fa-download me-1" aria-hidden="true"></i> Download Now
                        </a>
                    </div>

                    <div class="mt-4 text-start">
                        <div class="win-sunken bg-light" style="font-size: 10px; color: #555;">
                            <i class="fa-solid fa-triangle-exclamation text-danger mb-1" aria-hidden="true"></i> <strong>Archive Notice:</strong><br>
                            This page is part of the RaggieSoft Media Open Source preservation project. It is rendered in a historical UI format to support legacy installer web hooks.
                        </div>
                    </div>
                </div>
            </div>
            
            <hr>
            <div class="text-center" style="font-size: 10px; color: #666;">
                Copyright &copy; 2018-2026 RaggieSoft. Built for the Elara SPA routing engine.<br>
                <a href="/raggiesoft-media/projects/storetrainer" class="text-primary text-decoration-none">Return to Modern RaggieSoft Media Hub</a>
            </div>

        </div>
    </div>
</div>