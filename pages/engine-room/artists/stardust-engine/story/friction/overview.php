<?php
// pages/engine-room/artists/stardust-engine/story/friction/overview.php
// The Friction Catastrophe Archive
// Context: The "Science vs. Sex" Misunderstanding.

$pageTitle = "The Friction Catastrophe - Engine Room History";

// Asset Path for the "Intended" Art (Cassidy's Drawing)
$intended_art = 'https://assets.raggiesoft.com/stardust-engine/images/story/friction-intended-art.jpg'; 
?>

<div class="container py-5">
    
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold text-uppercase text-primary-emphasis" style="font-family: 'Impact', sans-serif;">
            The Friction Catastrophe
        </h1>
        <p class="lead text-body-secondary mx-auto" style="max-width: 800px;">
            How a fatal assumption and a catastrophic photo shoot in 1992
            ended the band's "Cold War" and gave them their freedom.
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10 mx-auto">
            
            <div class="card bg-dark border-secondary mb-5 shadow-lg overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-7 position-relative">
                         <img src="https://assets.raggiesoft.com/stardust-engine/images/story/friction-photoshoot.jpg" 
                             class="img-fluid h-100 object-fit-cover" 
                             style="filter: sepia(10%) contrast(1.1);"
                             alt="The Stardust Engine waiting in a cold warehouse. Ryan is in his wheelchair. Cassidy is shivering in a black dress.">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-black bg-opacity-75 border border-secondary text-white shadow-sm">
                                <i class="fa-duotone fa-camera-retro me-2 text-danger"></i>Los Angeles, 1992
                            </span>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex align-items-center bg-dark">
                        <div class="card-body p-4">
                            <h3 class="h5 text-white fw-bold border-bottom border-secondary pb-2 mb-3">
                                The "Toon Brigade" Incident
                            </h3>
                            <p class="text-white-50 small mb-3">
                                <strong>09:30 AM:</strong> The band arrived to a freezing warehouse. They were excited. They believed this shoot was for their space-themed concept album.
                            </p>
                            <p class="text-white-50 small mb-0">
                                When executive <strong>Julian Vance</strong> walked in, he didn't see a band of sci-fi nerds ready to talk about orbital mechanics. He saw "The Lovers." And he had a clipboard that would destroy the band.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="h3 fw-bold border-bottom border-secondary pb-2 mb-4">
                1. The "Two Frictions" Theory
            </h2>
            
            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="card h-100 border-info bg-body-tertiary shadow-sm">
                        <div class="card-header bg-info bg-opacity-10 text-info-emphasis fw-bold">
                            <i class="fa-duotone fa-shuttle-space me-2"></i>The Band's Vision (Science)
                        </div>
                        <img src="<?php echo $intended_art; ?>" 
                             class="card-img-top p-3 bg-white" 
                             alt="Cassidy's drawing of a space shuttle re-entering atmosphere with a trail of fire.">
                        <div class="card-body">
                            <h6 class="fw-bold">Definition: "Re-Entry Heat"</h6>
                            <p class="card-text small text-body-secondary">
                                When Julian pitched the title <em>Friction</em>, the band was ecstatic. They thought the label was finally letting them do a sci-fi concept album.
                            </p>
                            <p class="card-text small text-body-secondary">
                                Cassidy drew this cover art depicting the <strong>thermal friction</strong> of a shuttle hull re-entering the atmosphere. They wrote the song "Atmosphere" about the violence of physics, not passion.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 border-danger bg-body-tertiary shadow-sm">
                        <div class="card-header bg-danger bg-opacity-10 text-danger-emphasis fw-bold">
                            <i class="fa-duotone fa-bed me-2"></i>The Label's Vision (Sex)
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center">
                            <div class="text-center mb-4 opacity-50">
                                <i class="fa-duotone fa-lips fa-5x text-danger"></i>
                            </div>
                            <h6 class="fw-bold">Definition: "Sexual Tension"</h6>
                            <p class="card-text small text-body-secondary">
                                Julian Vance wanted to compete with <strong>Cydele's</strong> <em>Sanctuary</em> (Erotica). He looked at the siblings and assumed they were a "White Stripes" style married couple with intense chemistry.
                            </p>
                            <p class="card-text small text-body-secondary">
                                He heard the lyrics to "Atmosphere" ("Burning up," "Shaking hull") and assumed they were double-entendres for sex. He never clarified. He just booked the photographer.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="h3 fw-bold border-bottom border-secondary pb-2 mb-3">
                2. The "Atmosphere" Evidence
            </h2>
            <p class="fs-5 text-body-secondary mb-4">
                The tragedy of the catastrophe is most visible in the lyrics of the demo they recorded just days before the shoot. It wasn't a dirty song. It was a physics lesson.
            </p>

            <div class="card border-primary mb-5 shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="h5 fw-bold text-primary mb-2">
                                <i class="fa-duotone fa-file-audio me-2"></i>Exhibit B: "Atmosphere" (1992 Demo)
                            </h4>
                            <p class="card-text text-body-secondary small mb-0">
                                <em>"The fragile hull begins to shake / A promise that we're bound to make..."</em><br>
                                Read the lyrics that Julian Vance completely misinterpreted.
                            </p>
                        </div>
                        <div class="col-md-4 text-end">
                            <?php $props = [
                                'text' => 'Read Lyrics', 
                                'href' => '#', // Link to modal or lyrics page
                                'variant' => 'outline-primary', 
                                'size' => 'small',
                                'icon' => 'fa-duotone fa-eye',
                                'iconPosition' => 'after'
                            ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="h3 fw-bold border-bottom border-secondary pb-2 mb-3 mt-5">
                3. The Photo Shoot (The Collision)
            </h2>
            <p class="fs-5 text-body-secondary mb-4">
                The two realities collided at 10:00 AM on September 14, 1992. Julian rejected Cassidy's shuttle drawing, calling it "childish." He then presented his own storyboard: <strong>SHOT 12: THE LOVERS.</strong>
            </p>
            <div class="alert alert-dark border-start border-4 border-danger bg-body-secondary">
                <div class="d-flex">
                    <i class="fa-duotone fa-triangle-exclamation text-danger fs-3 me-3 mt-1"></i>
                    <div>
                        <strong class="text-danger-emphasis">The Realization:</strong>
                        <p class="mb-0 text-body-secondary small">
                            It wasn't just that he wanted them to be sexy. It was that he wanted <strong>Ryan and Cassidy</strong>—brother and sister—to simulate intercourse on camera. The "Friction" he wanted wasn't atmospheric; it was incestuous.
                        </p>
                    </div>
                </div>
            </div>

            <h2 class="h3 fw-bold border-bottom border-secondary pb-2 mb-3 mt-5">
                4. The Aftermath
            </h2>
            <div class="alert alert-dark border-primary mt-4 text-body-emphasis shadow-sm" role="alert">
                <h4 class="alert-heading text-primary"><i class="fa-duotone fa-flag me-2"></i>The Rebirth</h4>
                <p>
                    <strong>Friction</strong> was permanently canceled. The band was free. Holly O'Connell founded <strong>Engine Room Records, LLC</strong>, and the band, fueled by the trauma, retreated to their Blacksburg warehouse to record their true debut: 1995's <strong>The Warehouse Tapes.</strong>
                </p>
            </div>

        </div>
    </div>
</div>