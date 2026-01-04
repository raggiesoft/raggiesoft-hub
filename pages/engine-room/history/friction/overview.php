<?php
// pages/engine-room/history/friction/overview.php
// The Friction Catastrophe Archive
// UPDATED: WCAG Color Compliance (Fixed Low Contrast on Dark Backgrounds)

$pageTitle = "The Friction Catastrophe - Engine Room History";
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
                             alt="The Stardust Engine waiting in a cold warehouse. Ryan is in his wheelchair looking annoyed. Cassidy is shivering in a black dress. A TV cart plays cartoons in the background.">
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
                                <strong>09:30 AM:</strong> The band arrived to a freezing warehouse. To pass the time, they watched a <em>Toon Brigade</em> promo tape on a rolling TV cart.
                            </p>
                            <p class="text-white-50 small mb-0">
                                When executive <strong>Julian Vance</strong> walked in, this is what he saw: a "childish" band distracted by cartoons. He sneered, assuming they would be easy to manipulate. He failed to notice the tension, the cold, or the wheelchair.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-5 align-items-center">
                <div class="col-md-5">
                    <div class="card bg-white p-2 shadow transform-rotate-minus-2">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/ryan-cassidy-1989.jpg" 
                             class="img-fluid" 
                             alt="Ryan and Cassidy O'Connell, 1989 Promo Shot. They are wearing matching glasses and sweaters, looking happy and clearly related."
                             style="filter: contrast(1.1) sepia(10%);">
                        <div class="text-center pt-2 pb-1">
                            <p class="font-handwriting text-body-secondary mb-0 small">Neon Hearts Tour Promo '89</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 d-flex flex-column justify-content-center">
                     <h2 class="h3 fw-bold border-bottom border-secondary pb-2 mb-3">
                        1. The "Fatal Assumption"
                    </h2>
                    <p class="fs-5 text-body-secondary mb-4">
                        In 1991, The Stardust Engine was in a stalemate with their label, Apex Records. 
                        For their third album, a new, "rogue agent" executive, Julian Vance, was assigned to the project.
                    </p>
                    <p class="text-body-secondary">
                        Julian wanted to create a "sex-sells" competitor to <strong>Cydele's</strong> <em>Sanctuary</em>. He formulated his entire plan looking at this specific <strong>1989 publicity photo</strong>.
                    </p>
                    <p class="text-body-secondary">
                        He saw the physical affection—Ryan's arm around her, Cassidy leaning in—and made a lazy, catastrophic assumption: <strong>"They're a couple."</strong>
                    </p>
                    
                    <div class="alert alert-dark border-danger bg-body-tertiary mb-0">
                        <div class="d-flex">
                            <i class="fa-duotone fa-triangle-exclamation text-danger fs-4 me-3 mt-1"></i>
                            <div>
                                <strong class="text-danger-emphasis d-block mb-1">The Error:</strong> 
                                <span class="small text-body-secondary">Julian ignored the shared facial features, the sibling energy, and the fact that <strong>Ryan is standing</strong>. He didn't know Ryan was paralyzed in 1990 because he never bothered to check the date on the photo.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="h3 fw-bold border-bottom border-secondary pb-2 mb-3 mt-5">
                2. The "Friction" Misunderstanding
            </h2>
            <p class="fs-5 text-body-secondary mb-4">
                Julian pitched the title <strong>"Friction."</strong> The band, obsessed with their astronomy theme, was ecstatic. They believed the label was finally embracing their identity and planned an album about the literal, scientific <strong>friction of a space shuttle re-entering the atmosphere.</strong>
            </p>

            <div class="card border-danger mb-5 shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="h5 fw-bold text-danger mb-2">
                                <i class="fa-duotone fa-file-circle-xmark me-2"></i>The Title Track That Killed The Deal
                            </h4>
                            <p class="card-text text-body-secondary small mb-0">
                                While "Atmosphere" was a misunderstanding, the title track "Friction" was a demand. 
                                Read the disturbing history of the song the band refused to record.
                            </p>
                        </div>
                        <div class="col-md-4 text-end">
                            <?php $props = [
                                'text' => 'Read The Deep Dive', 
                                'href' => '/engine-room/history/friction/the-lost-title-track',
                                'variant' => 'neutral', 
                                'size' => 'small',
                                'icon' => 'fa-duotone fa-arrow-right',
                                'iconPosition' => 'after'
                            ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="h3 fw-bold border-bottom border-secondary pb-2 mb-3 mt-5">
                3. The Photo Shoot (September 1992)
            </h2>
            <p class="fs-5 text-body-secondary mb-4">
                Ryan arrived in his wheelchair — the permanent result of the 1990 crash. Julian, confused but arrogant, waved it off and insisted they could "shoot around it," failing to see that several of his explicit shot‑list items were now physically impossible.
            </p>
            <ul class="list-group list-group-flush bg-transparent fs-5 mb-5">
                <li class="list-group-item bg-transparent text-body-secondary border-secondary px-0">
                    <strong>The "Dirty Mirror" Incident:</strong> Julian offered Ryan a mirror covered in cocaine to "loosen up." Ryan, a straight-edge "Ironhead" whose only reference for drugs was the animated smoke in <em>Toon Brigade</em>, genuinely thought it was drywall dust. He <strong>wiped the mirror clean</strong> with a napkin, humiliating Julian and destroying $500 worth of product.
                </li>
                <li class="list-group-item bg-transparent text-body-secondary border-secondary px-0">
                    <strong>The Clipboard Attack:</strong> Furious, Julian snatched the photographer's clipboard. He found his concept shot: <strong>SHOT 12: CASSIDY/RYAN. THE LOVERS. FULL SIMULATED INTERCOURSE (RYAN ON TOP).</strong>
                </li>
            </ul>

            <div class="card bg-black border-secondary mb-5 shadow-lg">
                <div class="card-header bg-secondary bg-opacity-25 text-white font-monospace small py-2 border-bottom border-secondary">
                    <div class="row">
                        <div class="col-6">EVIDENCE ITEM #94-A</div>
                        <div class="col-6 text-end">DEPOSITION: K. MITCHELL (PHOTOGRAPHER)</div>
                    </div>
                </div>
                <div class="card-body p-4 font-monospace" style="background-color: #000000; color: #00ff41;">
                    <p class="mb-3 opacity-100">
                        <strong>ATTORNEY:</strong> Let's go back to the start. Did you speak with Mr. O'Connell before Mr. Vance arrived on set?
                    </p>
                    <p class="mb-3">
                        <strong>MITCHELL:</strong> Yes. Ryan rolled in early. We actually had a gentle conversation about lighting the wheelchair. He was very specific—he didn't want us to hide it. He told me, "I want the kids to see it. I want them to know you can be paralyzed and still be a rock star."
                    </p>
                    <p class="mb-0">
                        <strong>MITCHELL:</strong> Then Julian arrived. He grabbed my shot list, crossed out the word "SIMULATED" with a thick marker, and shoved it at Ryan. The note wasn't artistic direction. It was a demand for the siblings to <span class="bg-secondary text-black px-1">[REDACTED]</span> on camera.
                    </p>
                </div>
            </div>

            <h2 class="h3 fw-bold border-bottom border-secondary pb-2 mb-3 mt-5">
                4. The Aftermath
            </h2>
            <div class="alert alert-dark border-primary mt-5 text-body-emphasis" role="alert">
                <h4 class="alert-heading text-primary"><i class="fa-duotone fa-flag me-2"></i>The Rebirth</h4>
                <p>
                    <strong>Friction</strong> was permanently canceled. The band was free. Holly O'Connell founded <strong>Engine Room Records, LLC</strong>, and the band, fueled by the trauma, retreated to their Blacksburg warehouse to record their true debut: 1995's <strong>The Warehouse Tapes.</strong>
                </p>
            </div>

        </div>
    </div>
</div>