<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero-wrapper">

    <!-- ══════════════════════════════════════
         Layer 1- Hero Layer
    ═══════════════════════════════════════ -->
    <div class="hero-dark">

        <!--  Graphic Image (right side, Figma X=849 Y=-52 W=804.87 H=710) -->
        <div class="hero-graphic-wrap">
            <img
                src="<?= base_url('assets/images/HeroGraphic.png') ?>"
                alt="C++ graphic"
                loading="eager"
            >
        </div>

        <!-- Text Block (Figma X=214 Y=118) -->
        <div class="hero-dark-content">

            <!--  Hero Logo Image (Figma W=232.29 H=40) -->
            <img
                src="<?= base_url('assets/images/IronpdfLogo.png') ?>"
                alt="IronPDF for C++"
                class="hero-logo"
            >

            <!-- Content Texts (gap=30 between each) -->

            <!-- Figma Gotham 18 Bold -->
            <p class="hero-tagline">
                Building on the success of IronPDF for .NET
            </p>

            <!-- Figma Gotham 50 Black -->
            <h1 class="hero-h1">
                Beta Software Program
                <span class="line-purple">IronPDF for C++</span>
                <!-- Figma Gotham 14 Light -->
                <p class="hero-coming">Coming soon</p>
            </h1>

            

        </div><!-- /.hero-dark-content -->

    </div><!-- /.hero-dark -->


    <!-- ══════════════════════════════════════
         Layer2 - Sign Up
    ═══════════════════════════════════════ -->
    <div class="hero-signup">

        <div class="hero-signup-content">

            <!-- Title texts -->

            <!-- "Be one of the first" — Figma H1 Black 40 white -->
            <h2 class="signup-title">Be one of the first</h2>

            <!-- "Sign up NOW to get early access!" — Figma Gotham 18 Bold -->
            <p class="signup-subtitle">Sign up NOW to get early access!</p>

            <!-- Email Textbox Field -->
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

            <!-- Coming Soon row -->
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

<!-- ══════════════════════════════════════
         Layer3 - Text
    ═══════════════════════════════════════ -->

<section class="l3-section">

    <!-- ══ Background Rectangle 1 ══
         Figma: X=0 Y=264 W=1600 H=274
         fill=#170617 opacity=30% -->
    <div class="l3-rect1" aria-hidden="true"></div>

    <!-- ══ Background Rectangle 2 ══
         Figma: X=137 Y=235.5 W=1184 H=343
         fill=linear(#E01A59 0% → #460A48 100%) opacity=30% -->
    <div class="l3-polygon" aria-hidden="true">
        <img
            src="<?= base_url('assets/images/polygon.png') ?>"
            alt=""
            loading="lazy"
        >
    </div>

    <!-- ══ Content Container ══
         Figma: X=215 → centered max-width=1170 -->
    <div class="l3-container">

        <!-- ────────────────────────────────────
             Title + Badge
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
             Feature items row
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
             Text Paragraphs
             Figma: X=215 Y=319 W=1170 H=162
             Gotham 16
        ─────────────────────────────────────── -->
        <div class="l3-body-wrap">

            <!-- Paragraph 1: Figma H=84 -->
            <p class="l3-para1">
                The new <strong>IronPDF library for C++</strong> will enhance the C++ developer's
                tool set with robust PDF generation and conversion capabilities. Developers will
                be able to generate new PDFs from HTML content (from text or from URL), as well
                as to combine, split, extract, and modify content from existing PDFs.
            </p>

            <!-- Paragraph 2: Figma H=56 -->
            <p class="l3-para2">
                <strong>IronPDF for C++</strong> will help developers create C++ applications
                that can do all of these PDF processing tasks and more, with speed, precision,
                control, and excellence.
            </p>

        </div><!-- /.l3-body-wrap -->

    </div><!-- /.l3-container -->

</section><!-- /.l3-section -->

<!-- ══════════════════════════════════════
         Layer4 - Icon & Text
    ═══════════════════════════════════════ -->

<section class="l4-section">
    <div class="l4-inner">

        <!-- ══════════════════════════════════
             ICON COLUMN
             Figma: X=215, Y=1391
             W=270.17, H=179.51
        ═══════════════════════════════════ -->
        <div class="l4-icon-col">
            <img
                src="<?= base_url('assets/images/HTMLPDFIcon.png') ?>"
                alt="HTML to PDF conversion"
                class="l4-icon-img"
                loading="lazy"
            >
        </div>

        <!-- ══════════════════════════════════
             TEXT COLUMN
             Figma: X=538, Y=1379, W=847, H=204
        ═══════════════════════════════════ -->
        <div class="l4-text-col">

            <!-- Title
                 Figma: W=733, H=48, Gotham Black 40, lh=48
                 "Why make a" = white
                 "C++ PDF Library" = #C6AAC6 (accent) -->
            <h2 class="l4-title">
                Why make a <span class="l4-title-accent">C++ PDF Library</span>
            </h2>

            <!-- Paragraph 1
                 Figma: X=0, Y=70, W=847, H=56
                 Gotham Light 16, lh=28
                 Y=70 → margin-top from title: 70-48=22px -->
            <p class="l4-para">
                C++ is one of the most popular, oldest, and important programming languages
                in use, being the language of choice in low-level systems and network
                programming and other domains where performance is critical.
            </p>

            <!-- Paragraph 2
                 Figma: X=0, Y=148, W=847, H=56
                 Gotham Light 16, lh=28
                 Y=148 → margin-top from para1 bottom: 148-(70+56)=22px -->
            <p class="l4-para">
                The release of IronPDF for C++ will aid developers in building performant
                applications that can carry out PDF-related processing tasks
            </p>

        </div><!-- /.l4-text-col -->

    </div><!-- /.l4-inner -->
</section><!-- /.l4-section -->

<!-- ═══════════════════════════════════════════
     LAYER5 - WRAPPER 
════════════════════════════════════════════ -->
<div class="l5-section">

    <!-- ── Polygon background ──
         Figma: X=137 Y=1751 W=1184 H=343
         opacity=30%, fill=linear(#E01A59→#460A48)
         layer blur → filter:blur(8px) -->
    <div class="l5-polygon" aria-hidden="true">
        <img
            src="<?= base_url('assets/images/polygon.png') ?>"
            alt=""
            loading="lazy"
        >
    </div>

    <!-- ════════════════════════════════
         EARLY ACCESS SECTION
         Figma: X=215, Y=1764, W=1170, H=296
    ═════════════════════════════════ -->
    <section class="l5-access">
        <div class="l5-container">

            <!-- Title: Gotham Black 40, lh=44
                 "Early Access to" = white
                 "C++ PDF Library" = #C6AAC6 accent -->
            <h2 class="l5-title">
                Early Access to <span class="l5-title-accent">C++ PDF Library</span>
            </h2>

            <!-- Paragraph: Figma X=0 Y=84 W=1170 H=84
                 Gotham Light 14, lh=28
                 margin-top = Y(84) - H(title=44) = 40px ✓ -->
            <p class="l5-para">
                Joining the early access program will allow you to collaborate closely
                with our engineering team. You will be playing a key role in the development
                process as you share your early experiences using the C++ PDF library before
                its official launch. Your continual feedback after we release the library
                will be immensely helpful as we release new features and improve on existing features.
            </p>

            <!-- Cards Row: Figma X=0 Y=208 W=1170 H=88
                 margin-top = Y(208) - (Y(84)+H(84)) = 40px ✓ -->
            <div class="l5-cards">

                <!-- Card 1: Java (Released)
                     fill=#170617, radius=122, padding x=30 y=23, gap=30
                     Badge: W=127 H=36, fill=#C6AAC6, text=#331433 -->
                <div class="l5-card">
                    <span class="l5-badge l5-badge-released"># Released</span>
                    <img
                        src="<?= base_url('assets/images/logo-java.png') ?>"
                        alt="IronPDF for Java"
                        class="l5-card-logo"
                    >
                </div>

                <!-- Card 2: Python (Coming Soon)
                     fill=#170617, radius=122, padding x=30 y=23, gap=30
                     Badge: W=158 H=36, fill=#331433, text=#C6AAC6 -->
                <div class="l5-card">
                    <span class="l5-badge l5-badge-coming"># Coming Soon</span>
                    <img
                        src="<?= base_url('assets/images/logo-python.png') ?>"
                        alt="IronPDF for Python"
                        class="l5-card-logo"
                    >
                </div>

                <!-- Card 3: NodeJS (Coming Soon)
                     fill=#170617, radius=122, padding x=30 y=23, gap=30
                     Badge: W=158 H=36, fill=#331433, text=#C6AAC6 -->
                <div class="l5-card">
                    <span class="l5-badge l5-badge-coming"># Coming Soon</span>
                    <img
                        src="<?= base_url('assets/images/logo-nodejs.png') ?>"
                        alt="IronPDF for NodeJS"
                        class="l5-card-logo"
                    >
                </div>

            </div><!-- /.l5-cards -->

        </div><!-- /.l5-container -->
    </section><!-- /.l5-access -->

    <!-- ════════════════════════════════
         SIGN-UP BAR
         Figma: X=0 Y=2140 W=1600 H=230
         fill=#170617, padding x=23 y=40, gap=30
    ═════════════════════════════════ -->
    <div class="l5-signup-bar">

        <!-- Title: X=23 Y=55 W=1554 H=34, H2 Black 30
             "Sign up to our" = white | "Beta Program" = #C6AAC6 -->
        <h2 class="l5-signup-title">
            Sign up to our <span class="l5-signup-accent">Beta Program</span>
        </h2>

        <!-- Email form: X=500 Y=119 W=600 H=56 radius=81
             padding: 3 3 3 26
             Input: Gotham Medium 14
             Button: X=417 Y=3 W=180 H=50 fill=#E01A59 -->
        <form
            class="l5-signup-form"
            action="<?= base_url('signup') ?>"
            method="post"
            novalidate
        >
            <?= csrf_field() ?>

            <input
                type="email"
                name="email"
                class="l5-email-input"
                placeholder="Enter email address"
                required
                autocomplete="email"
            >

            <button type="submit" class="l5-signup-btn">
                Sign up now &#9658;
            </button>

        </form>

    </div><!-- /.l5-signup-bar -->

</div><!-- /.l5-section -->
<?= $this->endSection() ?>