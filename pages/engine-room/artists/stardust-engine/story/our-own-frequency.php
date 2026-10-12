<?php
// Page data
$pageTitle = "Story: Our Own Frequency - The Stardust Engine";
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <wa-breadcrumb class="mb-4">
                <wa-breadcrumb-item href="/engine-room/artists/stardust-engine">The Stardust Engine</wa-breadcrumb-item>
                <wa-breadcrumb-item href="/engine-room/artists/stardust-engine/story">Story</wa-breadcrumb-item>
                <wa-breadcrumb-item>Our Own Frequency</wa-breadcrumb-item>
            </wa-breadcrumb>

            <h1 class="display-4 fw-bold mb-4 font-heading">Our Own Frequency</h1>
            
            <img src="<?= $cdnBaseUrl ?>/engine-room-records/artists/the-stardust-engine/2008-our-own-frequency/social-preview.jpg" class="img-fluid rounded shadow-sm mb-4" alt="Our Own Frequency">

            <div class="lead mb-4">
                By 2008, the crushing weight of their success had taken its toll. Seeking an escape from the stadium rock lifestyle and endless tours, the entire band retreated to the studio to record something deeply intimate and purely for themselves.
            </div>

            <h2 class="h3 fw-bold mt-5 mb-3 font-heading text-primary">The Burnout</h2>
            <p>
                After the massive ambition of the Twin Moons project in 2003, The Stardust Engine found themselves on a treadmill they couldn't turn off. Years of non-stop touring, media obligations, and the physical toll of Ryan's condition had pushed the band to the breaking point. The "Burnout Hiatus" wasn't a choice; it was a survival mechanism. They needed to stop before they shattered.
            </p>
            <p>
                Instead of drifting apart during the hiatus, the tight-knit family group banded together. The O'Connell siblings (Ryan, Cassidy, and Holly) and their maternal cousins, identical twins Evan and Tyler Wright, completely locked themselves inside the recording studio. They stripped away the synthesizers, the massive drums, and the heavy electric guitars. They shut out the world and sat down as a family with just an acoustic guitar, a piano, and their voices.
            </p>

            <h2 class="h3 fw-bold mt-5 mb-3 font-heading text-primary">A Vulnerable Confession</h2>
            <p>
                <em>Our Own Frequency</em> is unlike anything the band had released before. It is an honest, acoustic exploration of the profound codependence that keeps them alive. Tracks like "Brother's Keeper" and "The Weight We Carry" openly discuss the physical realities of Ryan's paralysis and Cassidy's role as his protector and caregiver. 
            </p>
            <p>
                They didn't record this album to win awards or top the charts. They recorded it because they needed to say these things out loud. It is a sonic sanctuary—a place where they could tune out the overwhelming static of the industry and focus entirely on each other.
            </p>
            
            
            <h2 class="h3 fw-bold mt-5 mb-3 font-heading text-primary">Brother's Keeper</h2>
            <p>
                Perhaps the most intimate and eye-opening moment on the record is <em>"Brother's Keeper."</em> While their fans knew of Ryan's T-10 paralysis, few understood the daily realities of his condition or the immense physical and emotional labor involved in his care. Ryan literally cannot survive without assistance, and Cassidy fiercely guards her role as his primary caretaker.
            </p>
            <p>
                Cassidy performs Ryan's ADLs (Activities of Daily Living), ranging from doing stretches to keep his legs from atrophying, to assisting with his highly specific toileting requirements. At night, they share a bed pushed against a wall. Ryan sleeps on the wall side, and Cassidy sleeps on the outside to prevent him from accidentally rolling off the bed in his sleep. (When touring and staying in hotels, Ryan sleeps in the center of the bed between Cassidy and their younger sister Holly, who act as human bed rails). 
            </p>
            <p>
                The song brings these private acts of survival into the light, serving as both a confession of their extreme codependence and a fiercely protective anthem.
            </p>

            <wa-callout variant="brand" appearance="outlined" class="mt-5">
                <wa-icon name="compact-disc" slot="icon"></wa-icon>
                <strong>Explore the Album:</strong> Listen to the intimate, stripped-down tracks on the 
                <a href="/engine-room/artists/stardust-engine/discography/2008-our-own-frequency" class="fw-bold text-decoration-underline">Our Own Frequency (2008)</a> 
                discography page.
            </wa-callout>
            
            <?php
            $nav = [
                'prev' => ['url' => '/engine-room/artists/stardust-engine/story/cosmic-tidal-lock-sound', 'label' => 'Twin Moons (2003)'],
                'overview' => ['url' => '/engine-room/artists/stardust-engine/story', 'label' => 'Story']
            ];
            include ROOT_PATH . '/includes/components/navigation/narrative-stepper.php';
            ?>
            </div>
        </div>
    </div>
