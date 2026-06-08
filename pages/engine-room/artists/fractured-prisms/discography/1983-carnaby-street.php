<?php
// pages/engine-room/artists/fractured-prisms/discography/1983-carnaby-street.php
// Page data
$pageTitle = "Carnaby Street (1983) - Fractured Prisms";
$album_path_web = '/engine-room-records/artists/fractured-prisms/1983-carnaby-street';

?>

<div class="container py-5 bg-prism-dark">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Carnaby Street Album Art',
            'variant' => 'mod-revival' 
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase gothic-font text-glow-prism mb-0">
                Carnaby Street
            </h1>
            <p class="h4 text-secondary fw-bold mb-3" style="font-family: var(--font-tech);">
                The 1983 Debut Album
            </p>
            <p class="lead">
                The masterpiece that defined an era. Blending atmospheric progressive rock with sharp, melodic pop sensibilities, this 1983 release cemented Fractured Prisms as architects of the modern rock landscape.
            </p>
            <p class="text-muted">
                Following the devastating loss of their four bandmates in the 1981 Shap Fell disaster, surviving siblings Claire and Rhys fled the UK for the quiet isolation of Williamsport, Maryland. Inside their father's vacant childhood home, they built a "fragile fortress" of synthesisers, sequencers, and drum machines. The result is an electronic séance—a mechanical resurrection of their family's sound that balances soaring, ethereal pop with the crushing weight of profound grief.
            </p>
        </div>
    </div>

    <hr class="border-prism opacity-50 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <h3 class="h5 fw-bold text-uppercase text-muted mt-5 mb-4 border-bottom border-prism pb-2" style="font-family: var(--font-tech);">
        <i class="fa-duotone fa-box-archive me-2 pulse-icon"></i>Studio Archives
    </h3>

    <div class="row g-4 mb-5 align-items-stretch">
        
        <div class="col-md-5">
            <div class="card h-100 lore-card rounded-0">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <i class="fa-duotone fa-chart-network fs-3 text-primary"></i>
                        <h5 class="card-title h6 fw-bold text-uppercase ms-3 mb-0 align-self-center" style="font-family: var(--font-tech);">The Chart Phenomenon</h5>
                    </div>
                    <p class="card-text small">
                        When the grief finally crystallised into this record, the world was completely unprepared for its emotional weight. The opening track, "The Hollow Square," became an absolute cultural phenomenon. It sat immovable at #1 on both the US and UK charts for 14 straight weeks, famously blocking pop titans from the top spot and inadvertently triggering a massive, unexpected IRS tax bill for the isolated, grieving siblings.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card h-100 artifact-paper rounded-0 p-3">
                <h5 class="h6 fw-bold text-uppercase mb-2">
                    <i class="fa-duotone fa-music-note me-2"></i>The Relics: Gwen's Flute
                </h5>
                <p class="mb-0 small artifact-text-muted">
                    There are no hired session musicians on <em>Carnaby Street</em>. When a traditional instrument cuts through the icy synthesisers, it is a holy relic pulled from the 1981 wreckage. When the piercing, organic breath of the flute anchors tracks like "Mirrors of Yesterday," it is Claire physically holding and playing her deceased cousin's wooden flute to keep her "Safe Harbor" melody alive in the room.
                </p>
            </div>
        </div>

        <div class="col-md-3 d-flex justify-content-center align-items-center">
            <div class="polaroid-prism">
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/fractured-prisms/carnaby-street/archive-1883.jpg" alt="Claire and Rhys with the salvaged flute and cables">
                <div class="polaroid-caption text-center">
                    Williamsport, MD (1983)
                </div>
            </div>
        </div>

    </div>
</div>