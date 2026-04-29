<?php
/**
 * Component: Navbar (Layer 1)
 * Data source: $navData (passed from controller via JSON)
 * Font: Gotham (self-hosted) with Montserrat fallback
 */
?>

<nav class="navbar navbar-expand-lg iron-navbar">
    <div class="container-fluid" style="padding: 0 var(--nav-padding-x, 14px);">

        <!-- ── BRAND / LOGO ──────────────────────────────── -->
        <a class="navbar-brand" href="<?= esc($navData['brand']['url'] ?? '/') ?>">
            <img
                src="<?= base_url(esc($navData['brand']['logo'] ?? 'assets/images/NavLogo.png')) ?>"
                alt="<?= esc($navData['brand']['name'] ?? 'IronSoftware') ?>"
                width="115"
                height="14"
            >
        </a>

        <!-- ── MOBILE TOGGLE ─────────────────────────────── -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#ironNavMenu"
            aria-controls="ironNavMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- ── MENU BAR ───────────────────────────────────── -->
        <div class="collapse navbar-collapse" id="ironNavMenu">
            <ul class="navbar-nav ms-0" id="ironNavLinks">
                <?php foreach ($navData['links'] as $link): ?>

                    <?php if ($link['dropdown']): ?>
                        <!-- Products Dropdown -->
                        <li class="nav-item dropdown">
                            <button
                                class="nav-link dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                data-bs-offset="0,8"
                                aria-expanded="false"
                            >
                                <?= esc($link['label']) ?>
                            </button>

                            <ul class="dropdown-menu">
                                <?php foreach ($link['categories'] as $catIndex => $category): ?>

                                    <?php if ($catIndex > 0): ?>
                                        <li><hr class="dropdown-divider"></li>
                                    <?php endif; ?>

                                    <li>
                                        <span class="dropdown-category">
                                            <?= esc($category['name']) ?>
                                        </span>
                                    </li>

                                    <?php foreach ($category['items'] as $item): ?>
                                        <li>
                                            <a
                                                class="dropdown-item"
                                                href="<?= esc($item['url']) ?>"
                                            >
                                                <span><?= esc($item['label']) ?></span>
                                                <?php if (!empty($item['badge'])): ?>
                                                    <span class="nav-item-badge">
                                                        <?= esc($item['badge']) ?>
                                                    </span>
                                                <?php endif; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>

                                <?php endforeach; ?>
                            </ul>
                        </li>

                    <?php else: ?>
                        <!-- Regular link -->
                        <li class="nav-item">
                            <a
                                class="nav-link <?= !empty($link['bold']) ? 'nav-bold' : '' ?>"
                                href="<?= esc($link['url']) ?>"
                            >
                                <?= esc($link['label']) ?>
                            </a>
                        </li>
                    <?php endif; ?>

                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</nav>