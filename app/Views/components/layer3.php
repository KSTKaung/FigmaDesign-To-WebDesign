<?php
/**
 * Component: Layer 3 — Features / Text Section
 *
 * Sub-layers (Figma):
 *  Rect1:  X=0,   Y=264,   W=1600, H=274  fill=#170617 opacity=30%
 *  Rect2:  X=137, Y=235.5, W=1184, H=343  fill=linear(#E01A59→#460A48) opacity=30%
 *  Title:  X=215, Y=94,    W=1170, H=44   Gotham 40
 *  Badge:  X=937, Y=48,    W=81.47,H=81.47
 *  Features row: Gotham 16, three items + two "|" dividers
 *  Para1:  X=215, Y=319,   W=1170, H=84   Gotham 16
 *  Para2:  X=215, Y=~420,  W=1170, H=56   Gotham 16
 */
?>

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
