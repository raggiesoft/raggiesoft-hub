<?php
// Page data
$pageTitle = "The Lore - The Stardust Engine";
?>

<div class="container py-5">
    
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">
            The Archives
        </h1>
        <p class="lead text-secondary mx-auto" style="max-width: 800px;">
            The Stardust Engine is more than a band; it's a survival story.
            Explore the history, the scandal, and the origins of the "Ironheads."
        </p>
    </div>

    <!-- FEATURED: AD ASTRA (THE BOOK) -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="card bg-dark border-info shadow-lg overflow-hidden position-relative group-hover-scale">
                <div class="row g-0">
                    <div class="col-lg-7 position-relative">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra/band-ready.jpg" 
                             class="img-fluid h-100 object-fit-cover" 
                             alt="A wide-angle shot captures Cassidy O'Connell singing into a microphone on stage, wearing a red t-shirt and jeans. To her right, her older brother Ryan O'Connell plays an electric guitar, seated in a wheelchair. In the background, their twin cousins, Evan (on bass guitar) and Tyler (on drums), perform. They are on a stage inside a spaceship, with a massive window behind them displaying a vibrant nebula in space. A banner with a rocket logo hangs on the right."
                             style="min-height: 350px;">
                        <!-- Gradient Overlay for text readability on mobile/desktop overlap -->
                        <div class="position-absolute top-0 start-0 w-100 h-100" 
                             style="background: linear-gradient(90deg, transparent 50%, #0d1117 100%); opacity: 0.8;"></div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center" style="background-color: #0d1117;">
                        <div class="card-body p-4 p-lg-5 position-relative z-1">
                            <span class="badge bg-info text-dark mb-3 shadow-glow">
                                <i class="fa-duotone fa-book-sparkles me-2"></i>New Release
                            </span>
                            <h2 class="display-5 fw-bold text-uppercase text-light mb-2" style="font-family: 'Audiowide', sans-serif;">
                                Ad Astra
                            </h2>
                            <h3 class="h5 text-info font-monospace text-uppercase mb-4">The Maiden Voyage</h3>
                            <p class="card-text text-secondary mb-4">
                                The definitive account of the star-cruiser <em>Aethelgard</em>. 
                                Read the in-universe narrative of the "Concert at the Edge of the World," presented as an excerpt from the band's official history book.
                            </p>
                            <a href="/story/ad-astra" class="btn btn-outline-info btn-lg rounded-pill px-4 shadow-glow stretched-link">
                                <i class="fa-duotone fa-rocket-launch me-2"></i>Open Mission Log
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- THE ARCHIVE GRID -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        
        <!-- 1. The Crash of '90 (New Entry) -->
        <div class="col">
            <div class="card h-100 border-danger bg-transparent shadow-sm hover-card">
                <img src="https://assets.raggiesoft.com/stardust-engine/images/story/crash-of-1990.jpg" 
                     class="card-img-top" 
                     alt="Ryan in a wheelchair in a hospital room with Holly and Cassidy by his side"
                     style="filter: brightness(0.8);">
                <div class="card-body d-flex flex-column">
                    <h3 class="h5 fw-bold text-danger">The Crash of '90</h3>
                    <p class="card-text text-muted small">
                        December 14, 1990. The night on I-81 that changed everything. Read the accident report and learn how the "Family Unit" adapted to Ryan's injury to keep the engine running.
                    </p>
                    <div class="mt-auto pt-3">
                        <a href="/story/crash-of-90" class="btn btn-outline-danger w-100">
                            <i class="fa-duotone fa-file-medical-alt me-2"></i>View Archive
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. The Friction Catastrophe -->
        <div class="col">
            <div class="card h-100 border-primary bg-transparent shadow-sm hover-card">
                
                <div class="position-relative">
                    
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" 
                         style="z-index: 2; background: rgba(0,0,0,0.5); pointer-events: none;">
                        <div class="bg-danger text-dark fw-bold h2 text-uppercase px-3 py-1" 
                             style="transform: rotate(-15deg); border: 3px dashed #000; opacity: 0.9; font-family: 'Impact', sans-serif; box-shadow: 0 0 10px #000;">
                            Evidence
                        </div>
                    </div>

                    <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/1992-friction/album-art.jpg" 
                         class="card-img-top border-bottom border-primary" 
                         alt="Abstract art representing the Friction scandal"
                         style="filter: grayscale(100%) brightness(0.8);">
                </div>

                <div class="card-body d-flex flex-column">
                    <h3 class="h5 fw-bold text-primary">The Friction Catastrophe</h3>
                    <p class="card-text text-muted small">
                        The defining moment in the band's history. How a "fatal assumption" by a record executive and a disastrous photo shoot in 1992 led to the band's explosive departure from Apex Records.
                    </p>
                    <div class="mt-auto pt-3">
                        <?php $props = [
                            'text' => 'Read The Full Story', 
                            'href' => '/story/friction',
                            'variant' => 'primary',
                            'icon' => 'fa-duotone fa-book-open-cover',
                            'fullWidth' => true
                        ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. CPI & The Forgers -->
        <div class="col">
            <div class="card h-100 border-secondary bg-transparent shadow-sm hover-card">
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/2016-live-at-the-crucible/album-art.jpg" 
                     class="card-img-top" 
                     alt="The Crucible Stadium at night">
                <div class="card-body d-flex flex-column">
                    <h3 class="h5 fw-bold text-light">CPI & The Forgers</h3>
                    <p class="card-text text-muted small">
                        Before they were rock stars, they were "Ironheads." Discover the band's origins at Commonwealth Polytechnic Institute and the story behind their sacred anthem, "Ignition."
                    </p>
                    <div class="mt-auto pt-3">
                        <?php $props = [
                            'text' => 'Enter The Crucible', 
                            'href' => '/story/cpi', 
                            'variant' => 'neutral',
                            'icon' => 'fa-duotone fa-school',
                            'fullWidth' => true
                        ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. The Refusal (New Entry) -->
        <div class="col">
            <div class="card h-100 border-warning bg-transparent shadow-sm hover-card">
                <img src="https://assets.raggiesoft.com/stardust-engine/images/story/150-million-refusal.jpg" 
                     class="card-img-top" 
                     alt="Cassidy O'Connell looking fierce in a corporate boardroom rejecting a contract offer"
                     style="filter: brightness(0.8);">
                <div class="card-body d-flex flex-column">
                    <h3 class="h5 fw-bold text-warning">The $150M Refusal</h3>
                    <p class="card-text text-muted small">
                        The day they said no. Discover how Cassidy O'Connell's meltdown in a corporate boardroom saved <em>Ad Astra</em> from being butchered by an algorithm.
                    </p>
                    <div class="mt-auto pt-3">
                        <a href="/story/nine-figure-refusal" class="btn btn-outline-warning w-100">
                            <i class="fa-duotone fa-shield-halved me-2"></i>Read The Minutes
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. Port Telsus -->
         <div class="col">
            <div class="card h-100 border-info bg-transparent shadow-sm hover-card">
                <img src="https://assets.raggiesoft.com/engine-room-records/artists/the-stardust-engine/2017-knox-ost/album-art.jpg" 
                     class="card-img-top" 
                     alt="The neon-lit industrial sprawl of Port Telsus"
                     style="filter: brightness(0.8);">
                <div class="card-body d-flex flex-column">
                    <h3 class="h5 fw-bold text-info">The Ironworks</h3>
                    <p class="card-text text-muted small">
                        The band's current base of operations. Explore the "sanctioned entertainment zone" in the lower decks of Port Telsus, where they broadcast their signal to the Weave.
                    </p>
                    <div class="mt-auto pt-3">
                        <?php $props = [
                            'text' => 'Enter Sector 4', 
                            'href' => '/concepts/port', 
                            'variant' => 'neutral',
                            'icon' => 'fa-duotone fa-location-dot',
                            'fullWidth' => true
                        ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. Complete Timeline -->
        <div class="col">
            <div class="card h-100 border-secondary bg-transparent shadow-sm hover-card">
                <img src="https://assets.raggiesoft.com/stardust-engine/images/story/timeline.jpg" 
                     class="card-img-top" 
                     alt="A stylized timeline graphic showing key events in the band's history"
                     style="filter: brightness(0.8);">
                <div class="card-body d-flex flex-column">
                    <h3 class="h5 fw-bold text-secondary">Complete Timeline</h3>
                    <p class="card-text text-muted small">
                        From the dorm rooms of 1985 to the reunion tour of 2015. A chronological look at every album, tour, and major event in the band's 30-year history.
                    </p>
                    <div class="mt-auto pt-3">
                        <?php $props = [
                            'text' => 'View Timeline', 
                            'href' => '/band/band-history', 
                            'variant' => 'neutral',
                            'icon' => 'fa-duotone fa-clock-rotate-left',
                            'fullWidth' => true
                        ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>