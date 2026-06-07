<?php
// pages/engine-room/artists/stardust-engine/story/friction/the-lost-title-track.php
// The Redacted File
// Context: The depraved lyrics sheet produced by Julian Vance.
// Note: Contains content warning for mature themes.

$pageTitle = "The Lost Title Track: Friction - Engine Room History";

$articleSchema = [
    "@context" => "https://schema.org",
    "@type" => "Article",
    "headline" => "The Lost Title Track: Friction - Engine Room History",
    "about" => [
        "@type" => "MusicGroup",
        "name" => "The Stardust Engine"
    ],
    "datePublished" => "1992-09-01",
    "publisher" => [
        "@type" => "Organization",
        "name" => "Engine Room Records"
    ]
];
?>

<script type="application/ld+json">
<?php echo json_encode($articleSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<style>
    .narrative-card {
        background-color: var(--bs-body-tertiary);
        border: 1px solid var(--bs-border-color);
        box-shadow: 0 1rem 3rem rgba(0,0,0,0.1);
        font-size: 1.1rem;
        line-height: 1.7;
    }
    [data-bs-theme="dark"] .narrative-card {
        background-color: #15171e;
        border-color: #333;
    }
    .clipboard-box {
        background-color: #f8f9fa;
        border-top: 15px solid #dc3545;
        border-radius: 5px;
        padding: 20px;
        font-family: 'Courier New', monospace;
        color: #000;
        box-shadow: inset 0 0 10px rgba(0,0,0,0.05);
        transform: rotate(-1deg);
    }
    [data-bs-theme="dark"] .clipboard-box {
        background-color: #e9ecef;
        color: #000;
    }
    .redaction-bar {
        background-color: #000;
        color: #000;
        display: inline-block;
        user-select: none;
    }
</style>

<div class="container py-5">

    <div id="content-gate" class="row justify-content-center min-vh-50 align-items-center">
        <div class="col-lg-8">
            <div class="card border-danger shadow-lg">
                <div class="card-header bg-danger text-white fw-bold text-uppercase">
                    <i class="fa-duotone fa-triangle-exclamation me-2"></i>Content Warning
                </div>
                <div class="card-body p-5 text-center">
                    <h2 class="h3 fw-bold text-danger mb-4">Restricted Archival File</h2>
                    <p class="lead mb-4 text-body-secondary">
                        This historical archive discusses the conceptual origins of the song "Friction," including 
                        <strong>deliberate corporate exploitation and severe psychological distress</strong>.
                    </p>
                    <div class="d-grid gap-3 d-md-flex justify-content-center">
                        <a href="/engine-room/artists/stardust-engine/story/friction/overview" class="btn btn-outline-secondary btn-lg">
                            <i class="fa-duotone fa-arrow-left me-2"></i>Return to Overview
                        </a>
                        <button onclick="unlockContent()" class="btn btn-danger btn-lg">
                            <i class="fa-duotone fa-eye me-2"></i>I Understand & Wish to Proceed
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="restricted-content" class="d-none fade-in">
        
        <div class="text-center mb-5">
            <span class="badge bg-danger-subtle text-danger-emphasis rounded-pill px-3 py-2 shadow-sm mb-3 border border-danger-subtle text-uppercase letter-spacing-1">
                <i class="fa-solid fa-file-circle-xmark me-2"></i>Evidence Item #94-B
            </span>
            <h1 class="display-3 fw-bold text-uppercase text-danger" style="font-family: 'Impact', sans-serif;">
                The Lost Title Track
            </h1>
            <p class="lead text-body-secondary mx-auto" style="max-width: 800px;">
                The lyrics sheet that crossed the point of no return.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <div class="card border-0 narrative-card mb-5">
                    <div class="card-body p-4 p-md-5 text-body-secondary">
                        <h3 class="text-danger fw-bold text-uppercase mb-4 border-bottom border-danger-subtle pb-2">The Shock Value Mandate</h3>
                        <p>
                            In 1992, Cydele's multimedia controversies were rewriting the rules of the music industry. "Shock value" was the ultimate currency, and Apex Records demanded a piece of the market share. 
                        </p>
                        <p>
                            When executive Julian Vance took over The Stardust Engine's sophomore project, he didn't care about their science-fiction concepts or the thermal dynamics of atmospheric re-entry. Vance saw a young, attractive male and female lead. He looked at their 1989 promotional photos—taken long before Ryan’s paralysis—and made a series of depraved calculations.
                        </p>
                        <p>
                            Vance and his ghostwriters completely hijacked the title track. They stripped out the band's intended sci-fi themes and produced a finalized lyrics sheet for <em>"Friction"</em> that was engineered for maximum, horrifying controversy.
                        </p>

                        <div class="clipboard-box mx-auto my-5 w-100" style="max-width: 700px;">
                            <strong class="text-uppercase d-block mb-3 border-bottom border-danger pb-2 text-danger">Apex Records - Confiscated Material</strong>
                            <p class="mb-3 fw-bold">TRACK 01: "FRICTION"</p>
                            <p class="mb-0 font-monospace">
                                [VERSE 1 - RYAN]<br>
                                <span class="redaction-bar">██████████████████████████████████</span><br>
                                <span class="redaction-bar">██████████████████████████</span><br><br>
                                [CHORUS - CASSIDY / RYAN HARMONY]<br>
                                <span class="redaction-bar">██████████████████████████████</span><br>
                                <span class="redaction-bar">████████████████████████████████████</span><br>
                                <span class="redaction-bar">████████████████████████</span>
                            </p>
                        </div>

                        <p>
                            The band <em>did</em> see this lyrics sheet. Julian Vance handed it directly to them.
                        </p>
                        <p>
                            The lyrics were not subtle. They were explicitly, deliberately written in a way that would make the listener believe Ryan and Cassidy were engaged in a sexual relationship. When Vance drafted this campaign, he operated under the ignorant, fatal assumption that the two attractive leads were a married couple. He had no idea they were biological siblings. 
                        </p>
                        <p>
                            However, the sheer depravity of handing this explicitly romantic and sexualized lyrics sheet to a brother and sister—and subsequently trying to force them to execute his vision on camera during "Shot 12" even after the truth was laid bare—crossed a line from which there was no return.
                        </p>

                        <h3 class="text-danger fw-bold text-uppercase mt-5 mb-4 border-bottom border-danger-subtle pb-2">The Permanent Redaction</h3>
                        <p>
                            The realization of what Vance was demanding culminated in the catastrophic warehouse photo shoot, ending with Ryan's roaring defense of his sister and Holly O'Connell severing the contract entirely.
                        </p>
                        <p>
                            Because the lyrics to "Friction" were engineered as an act of profound psychological violence and exploitation against the siblings, Engine Room Records established an absolute, zero-tolerance protocol regarding the track.
                        </p>

                        <div class="alert bg-danger bg-opacity-10 border-start border-4 border-danger p-4 mt-4">
                            <h4 class="text-danger fw-bold text-uppercase mb-2"><i class="fa-solid fa-lock me-2"></i>The Vault Directive</h4>
                            <p class="text-danger-emphasis mb-0">
                                The lyrics, sheet music, and any associated audio for the song <em>"Friction"</em> will <strong>never be rendered, published, or performed</strong> in any capacity. The song died the day the band walked out of that warehouse, ensuring Vance's depravity would never define their legacy.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="/engine-room/artists/stardust-engine/story/friction/overview" class="btn btn-outline-secondary rounded-pill px-4">
                        <i class="fa-duotone fa-arrow-left me-2"></i>Back to The Catastrophe
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
function unlockContent() {
    document.getElementById('content-gate').classList.add('d-none');
    const content = document.getElementById('restricted-content');
    content.classList.remove('d-none');
    content.classList.add('animate-fade-in'); 
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>