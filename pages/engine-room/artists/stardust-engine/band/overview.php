<?php
// Page data
$pageTitle = "The Band - The Stardust Engine";
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container">
    
    <!-- Page Header -->
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">
            The Band
        </h1>
        <p class="lead text-secondary mx-auto" style="max-width: 800px;">
            A Family Unit. A Creative Fortress.
        </p>
    </div>

    <!-- Section 1: The Family Unit Intro -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 fs-5 text-center text-light">
            <p class="text-white-50">
                To understand The Stardust Engine, you must first understand that they are not a "band" in the traditional sense; they are a <strong>true family</strong>. The O'Connell members (Ryan, Cassidy, and Holly) are siblings, and the Wright members (Evan and Tyler) are their identical twin cousins.
            </p>
            <p class="text-white-50">
                Their name was a tribute to their shared passion for astronomy: the <strong>"Stardust"</strong> (the cosmos) and the <strong>"Engine"</strong> (the rockets to get there). Their label, Apex Records, twisted this scientific passion into a marketable gimmick, forcing reductive nicknames on them that the band despised.
            </p>
            <p class="text-white-50">
                Their close-knit bond is their defining feature. They are famously affectionate, often found piled on a single motel bed (the O'Connells on one, the Wrights on the other) or cuddling on a tour bus sofa. This family bond was their "Fortress" against an industry that tried to tear them apart.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 my-5">

    <!-- Visual Context Note -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <div class="alert alert-dark border-info bg-opacity-10 d-flex align-items-center">
                <i class="fa-duotone fa-camera-retro text-info fs-2 me-3"></i>
                <div class="small text-info">
                    <strong>Archival Note:</strong> The following portraits are from the <strong>1997 "Hard Reset" Press Kit</strong>. These photos marked the band's return to the public eye as independent artists. Note the "Professional" styling—a deliberate choice by Holly O'Connell to prove to distributors that Engine Room Records was a stable business, despite their "Wilderness Years."
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2: The Bios -->
    <div class="row g-5 justify-content-center">

        <!-- Ryan O'Connell -->
        <div class="col-lg-10">
            <div class="card glass-card border-secondary overflow-hidden">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4 position-relative">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/ryan.jpg" 
                             class="img-fluid h-100 object-fit-cover" 
                             style="min-height: 300px;"
                             alt="Ryan O'Connell (1997). Seated in his wheelchair, wearing a velvet shirt and glasses. He looks calm and confident.">
                        <!-- The Wheelchair Detail -->
                        <div class="position-absolute bottom-0 start-0 w-100 p-2 bg-black bg-opacity-75 text-center d-md-none">
                            <small class="text-white-50">The "Engine" (1997)</small>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4 p-lg-5">
                            <a href="/band/ryan-oconnell" class="text-decoration-none">
                                <h2 class="display-5 fw-bold text-primary text-uppercase" style="font-family: 'Impact', sans-serif;">Ryan O'Connell</h2>
                            </a>
                            <p class="h5 text-warning fw-bold mb-3">Lead Vocals, Lead Guitar</p>
                            <p class="text-white-50 fs-5">
                                As the oldest sibling, Ryan is fiercely protective of his family. By 1997, he had fully adapted to life as a paraplegic following the Crash of '90. In this photo, the wheelchair is visible but understated—a compromise between his reality and the press's comfort level.
                            </p>
                            <div class="mt-4">
                                <?php $props = [
                                    'text' => 'Read Ryan\'s Full Bio', 
                                    'href' => '/band/ryan-oconnell', 
                                    'variant' => 'axiom', 
                                    'icon' => 'fa-duotone fa-arrow-right',
                                    'iconPosition' => 'after'
                                ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cassidy O'Connell -->
        <div class="col-lg-10">
            <div class="card glass-card border-secondary overflow-hidden">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/cassidy.jpg" 
                             class="img-fluid h-100 object-fit-cover" 
                             style="min-height: 300px;"
                             alt="Cassidy O'Connell (1997). Wearing glasses and a simple rust-colored shirt. Her hair is blown out in 90s style.">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4 p-lg-5">
                            <a href="/band/cassidy-oconnell" class="text-decoration-none">
                                <h2 class="display-5 fw-bold text-primary text-uppercase" style="font-family: 'Impact', sans-serif;">Cassidy O'Connell</h2>
                            </a>
                            <p class="h5 text-warning fw-bold mb-3">Lead Vocals, Piano, Synthesizers</p>
                            <p class="text-white-50 fs-5">
                                Cassidy is the band's classical heart. By 1997, she had shed the "Stardust" pop-princess persona for a more grounded, intellectual look. She is Ryan's "Anchor" and Safe Person.
                            </p>
                            <div class="mt-4">
                                <?php $props = [
                                    'text' => 'Read Cassidy\'s Full Bio', 
                                    'href' => '/band/cassidy-oconnell', 
                                    'variant' => 'pact', 
                                    'icon' => 'fa-duotone fa-arrow-right',
                                    'iconPosition' => 'after'
                                ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Holly O'Connell -->
        <div class="col-lg-10">
            <div class="card glass-card border-secondary overflow-hidden">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/holly.jpg" 
                             class="img-fluid h-100 object-fit-cover" 
                             style="min-height: 300px;"
                             alt="Holly O'Connell (1997). Wearing a sharp black blazer and glasses. The look of a CEO.">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4 p-lg-5">
                             <a href="/band/holly-oconnell" class="text-decoration-none">
                                <h2 class="display-5 fw-bold text-primary text-uppercase" style="font-family: 'Impact', sans-serif;">Holly O'Connell</h2>
                            </a>
                            <p class="h5 text-warning fw-bold mb-3">Manager (CEO, Engine Room Records)</p>
                            <p class="text-white-50 fs-5">
                                The "Anchor". In this 1997 portrait, Holly embraces the "Executive" aesthetic. Having successfully sued Apex Records and founded her own label, she is the formidable legal shield that protects the family.
                            </p>
                            <div class="mt-4">
                                <?php $props = [
                                    'text' => 'Read Holly\'s Full Bio', 
                                    'href' => '/band/holly-oconnell', 
                                    'variant' => 'neutral', 
                                    'icon' => 'fa-duotone fa-arrow-right',
                                    'iconPosition' => 'after'
                                ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Evan Wright -->
        <div class="col-lg-10">
            <div class="card glass-card border-secondary overflow-hidden">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/evan.jpg" 
                             class="img-fluid h-100 object-fit-cover" 
                             style="min-height: 300px;"
                             alt="Evan Wright (1997). Wearing an orange t-shirt, holding his bass guitar neck.">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4 p-lg-5">
                            <a href="/band/evan-wright" class="text-decoration-none">
                                <h2 class="display-5 fw-bold text-primary text-uppercase" style="font-family: 'Impact', sans-serif;">Evan Wright</h2>
                            </a>
                            <p class="h5 text-warning fw-bold mb-3">Bass Guitar, Rhythm Guitar</p>
                            <p class="text-white-50 fs-5">
                                The "Texture". Evan's calm demeanor in this photo reflects his role as the steady hand of the rhythm section. Along with his twin Tyler, he is the physical "Human Ramp" that makes Ryan's touring life possible.
                            </p>
                            <div class="mt-4">
                                <?php $props = [
                                    'text' => 'Read Evan\'s Full Bio', 
                                    'href' => '/band/evan-wright', 
                                    'variant' => 'neutral', 
                                    'icon' => 'fa-duotone fa-arrow-right',
                                    'iconPosition' => 'after'
                                ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tyler Wright -->
        <div class="col-lg-10">
            <div class="card glass-card border-secondary overflow-hidden">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/band-members/tyler.jpg" 
                             class="img-fluid h-100 object-fit-cover" 
                             style="min-height: 300px;"
                             alt="Tyler Wright (1997). Wearing a simple orange t-shirt. The 'Power' of the group.">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4 p-lg-5">
                            <a href="/band/tyler-wright" class="text-decoration-none">
                                <h2 class="display-5 fw-bold text-primary text-uppercase" style="font-family: 'Impact', sans-serif;">Tyler Wright</h2>
                            </a>
                            <p class="h5 text-warning fw-bold mb-3">Drums, Percussion</p>
                            <p class="text-white-50 fs-5">
                                The "Power". Tyler's simple styling in 1997—jeans and a t-shirt—was a direct rejection of the glam costumes Apex forced on him in the 80s. He is the "Human Metronome" and the physical muscle of the operation.
                            </p>
                            <div class="mt-4">
                                <?php $props = [
                                    'text' => 'Read Tyler\'s Full Bio', 
                                    'href' => '/band/tyler-wright', 
                                    'variant' => 'neutral', 
                                    'icon' => 'fa-duotone fa-arrow-right',
                                    'iconPosition' => 'after'
                                ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- End of Bios Row -->
</div>