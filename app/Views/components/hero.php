<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="hero-wrapper">

    <!-- ══════════════════════════════════════
         BAND 1 — DARK / BLACK
         Background: #0d0d0d
    ═══════════════════════════════════════ -->
    <div class="hero-dark">

        <!-- Portion 1: Graphic Image (right side, Figma X=849 Y=-52 W=804.87 H=710) -->
        <div class="hero-graphic-wrap">
            <img
                src="<?= base_url('assets/images/HeroGraphic.png') ?>"
                alt="C++ graphic"
                loading="eager"
            >
        </div>

        <!-- Portion 2: Text Block (Figma X=214 Y=118) -->
        <div class="hero-dark-content">

            <!-- 2a: Hero Logo Image (Figma W=232.29 H=40) -->
            <img
                src="<?= base_url('assets/images/IronpdfLogo.png') ?>"
                alt="IronPDF for C++"
                class="hero-logo"
            >

            <!-- 2b: Content Texts (gap=30 between each) -->

            <!-- Text 1: Figma Gotham 18 Bold -->
            <p class="hero-tagline">
                Building on the success of IronPDF for .NET
            </p>

            <!-- Text 2: Figma Gotham 50 Black -->
            <h1 class="hero-h1">
                Beta Software Program
                <span class="line-purple">IronPDF for C++</span>
                <!-- Text 3: Figma Gotham 14 Light -->
                <p class="hero-coming">Coming soon</p>
            </h1>

            

        </div><!-- /.hero-dark-content -->

    </div><!-- /.hero-dark -->


    <!-- ══════════════════════════════════════
         BAND 2 — SIGNUP / PURPLE
         Figma X=214 Y=464
    ═══════════════════════════════════════ -->
    <div class="hero-signup">

        <div class="hero-signup-content">

            <!-- Portion 3a: Title texts -->

            <!-- "Be one of the first" — Figma H1 Black 40 white -->
            <h2 class="signup-title">Be one of the first</h2>

            <!-- "Sign up NOW to get early access!" — Figma Gotham 18 Bold -->
            <p class="signup-subtitle">Sign up NOW to get early access!</p>

            <!-- Portion 3b: Email Textbox Field -->
            <!-- Figma: pill wrapper, input X=26 Y=23.5, btn X=350 Y=0 -->
            <form
                class="signup-form"
                action="<?= base_url('signup') ?>"
                method="post"
                novalidate
            >
                <?= csrf_field() ?>

                <!-- Input: Figma X=26 Y=23.5, Gotham 14 Medium -->
                <input
                    type="email"
                    name="email"
                    class="signup-input"
                    placeholder="Enter email address"
                    required
                    autocomplete="email"
                >

                <!-- Button: Figma X=350 Y=0, fill=#E01A59, text white -->
                <button type="submit" class="signup-btn">
                    Sign up now
                    <span class="signup-btn-arrow">&#9658;</span>
                </button>

            </form><!-- /.signup-form -->

            <!-- Portion 4: Coming Soon row -->
            <div class="signup-coming-row">
                <span class="coming-pill"># Coming Soon</span>
                <span class="coming-text">
                    IronPDF Beta Program also coming soon for
                    <strong>Python</strong> | <strong>Node.JS</strong> | <strong>Java</strong>
                </span>
            </div>

        </div><!-- /.hero-signup-content -->

    </div><!-- /.hero-signup -->

</section><!-- /.hero-wrapper -->

<section class="l3-section">

    <!-- ══ Background Rectangle 1 ══
         Figma: X=0 Y=264 W=1600 H=274
         fill=#170617 opacity=30% -->
    <div class="l3-rect1" aria-hidden="true"></div>

    <!-- ══ Background Rectangle 2 ══
         Figma: X=137 Y=235.5 W=1184 H=343
         fill=linear(#E01A59 0% → #460A48 100%) opacity=30% -->
    <div class="l3-rect2" aria-hidden="true"></div>

    <!-- ══ Content Container ══
         Figma: X=215 → centered max-width=1170 -->
    <div class="l3-container">

        <!-- ────────────────────────────────────
             PORTION 1a — Title + Badge
             Figma: X=215 Y=94 font-size=40
        ─────────────────────────────────────── -->
        <div class="l3-title-row">
            <h2 class="l3-title">IronPDF for C++</h2>

            <!-- Badge: W=81.47 H=81.47
                 text=#FFFFFF, subtract=#258B74, intersect=#63C1A0 -->
            <div class="l3-badge-wrap">
                <img
                    src="<?= base_url('assets/images/badge.png') ?>"
                    alt="Coming Soon"
                    class="l3-badge-img"
                >
            </div>
        </div>

        <!-- ────────────────────────────────────
             PORTION 1b — Feature items row
             Three texts + two "|" dividers
             Figma: Gotham 16
        ─────────────────────────────────────── -->
        <div class="l3-features-row">

            <!-- Feature 1 -->
            <div class="l3-feature-item">
                <span class="l3-feature-hash">#</span>
                <span>Generate PDFs from HTML in C++</span>
            </div>

            <!-- Divider 1 -->
            <span class="l3-feature-divider" aria-hidden="true">|</span>

            <!-- Feature 2 -->
            <div class="l3-feature-item">
                <span class="l3-feature-hash">#</span>
                <span>Combine, split, and modify PDFs quickly in C++</span>
            </div>

            <!-- Divider 2 -->
            <span class="l3-feature-divider" aria-hidden="true">|</span>

            <!-- Feature 3 -->
            <div class="l3-feature-item">
                <span class="l3-feature-hash">#</span>
                <span>Extract text and images from PDFs using C++</span>
            </div>

        </div><!-- /.l3-features-row -->

        <!-- ────────────────────────────────────
             PORTION 2 — Text Paragraphs
             Figma: X=215 Y=319 W=1170 H=162
             Gotham 16
        ─────────────────────────────────────── -->
        <div class="l3-body-wrap">

            <!-- Paragraph 1: Figma H=84 -->
            <p class="l3-para">
                The new <strong>IronPDF library for C++</strong> will enhance the C++ developer's
                tool set with robust PDF generation and conversion capabilities. Developers will
                be able to generate new PDFs from HTML content (from text or from URL), as well
                as to combine, split, extract, and modify content from existing PDFs.
            </p>

            <!-- Paragraph 2: Figma H=56 -->
            <p class="l3-para">
                <strong>IronPDF for C++</strong> will help developers create C++ applications
                that can do all of these PDF processing tasks and more, with speed, precision,
                control, and excellence.
            </p>

        </div><!-- /.l3-body-wrap -->

    </div><!-- /.l3-container -->

</section><!-- /.l3-section -->

<?= $this->endSection() ?>