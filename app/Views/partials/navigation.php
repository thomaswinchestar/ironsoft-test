<!-- Navigation -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Main navigation">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="<?= base_url('/') ?>" aria-label="<?= htmlspecialchars($navigation['brand_name'] ?? 'Iron Software') ?> Home">
                <img src="<?= base_url($navigation['logo'] ?? 'assets/LOGO-Nav.svg') ?>" alt="<?= htmlspecialchars($navigation['brand_name'] ?? 'Iron Software') ?>" class="nav-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-3">
                    <?php if (isset($navigation['menu_items']) && is_array($navigation['menu_items'])): ?>
                        <?php foreach ($navigation['menu_items'] as $item): ?>
                            <?php if ($item['has_dropdown'] && isset($item['dropdown_items'])): ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?= htmlspecialchars($item['url']) ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= htmlspecialchars($item['title']) ?> <span class="dropdown-arrow">▾</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($item['dropdown_items'] as $dropdownItem): ?>
                                            <li><a class="dropdown-item" href="<?= base_url($dropdownItem['url']) ?>"><?= htmlspecialchars($dropdownItem['title']) ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url($item['url']) ?>"><?= htmlspecialchars($item['title']) ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
