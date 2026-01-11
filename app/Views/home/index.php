<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero & Banner Section -->
<section class="hero-banner-section" aria-labelledby="hero-title">
    <!-- Banner Image positioned absolutely on the right -->
    <div class="banner-image-wrapper" aria-hidden="true">
        <img src="<?= base_url('/' . ($hero['banner_image'] ?? 'assets/Banner-IMAGE-right.svg')) ?>" alt="" class="banner-image">
    </div>
    
    <!-- Hero Content -->
    <div class="hero-content-wrapper">
        <div class="container">
            <div class="hero-content">
                <div class="brand-logo mb-3">
                    <img src="<?= base_url('/' . ($hero['logo'] ?? 'assets/LOGO-IronPDFforC++-Banner.svg')) ?>" alt="IronPDF for C++" class="hero-logo">
                </div>
                <p class="hero-subtitle"><?= htmlspecialchars($hero['subtitle'] ?? 'Building on the success of IronPDF for .NET') ?></p>
                <h1 id="hero-title" class="hero-title">
                    <?= htmlspecialchars($hero['title'] ?? 'Beta Software Program') ?><br>
                    <span class="text-pink"><?= htmlspecialchars($hero['highlight'] ?? 'IronPDF for C++') ?></span>
                </h1>
                <p class="hero-coming-soon"><?= htmlspecialchars($hero['coming_soon_text'] ?? 'Coming soon') ?></p>
            </div>
        </div>
    </div>
    
    <!-- Early Access CTA -->
    <div class="early-access-cta">
        <div class="container">
            <div class="cta-content">
                <h2 id="early-access-title" class="cta-title"><?= htmlspecialchars($early_access['title'] ?? 'Be one of the first') ?></h2>
                <p class="cta-subtitle"><?= htmlspecialchars($early_access['subtitle'] ?? 'Sign up NOW to get early access!') ?></p>
                <form class="signup-form" aria-label="Early access signup form">
                    <div class="input-group">
                        <label for="email-hero" class="visually-hidden">Email address</label>
                        <input type="email" class="form-control" id="email-hero" 
                               placeholder="Enter email adress" required>
                        <button type="submit" class="btn btn-signup">
                            <?= htmlspecialchars($early_access['button_text'] ?? 'Sign up now') ?> <svg width="8" height="12" viewBox="0 0 12 14" fill="currentColor" aria-hidden="true">
                                <path d="M0 0V14L12 7L0 0Z"/>
                            </svg>
                        </button>
                    </div>
                </form>
                <div class="coming-soon-badges">
                    <span class="badge badge-coming-soon"><?= htmlspecialchars($early_access['coming_soon_badge'] ?? '# Coming Soon') ?></span>
                    <span class="badge-text"><?= htmlspecialchars($early_access['other_platforms_text'] ?? 'IronPDF Beta Program also coming soon for') ?> 
                        <?php if (isset($early_access['other_platforms']) && is_array($early_access['other_platforms'])): ?>
                            <?php $platformCount = count($early_access['other_platforms']); ?>
                            <?php foreach ($early_access['other_platforms'] as $index => $platform): ?>
                                <a href="<?= htmlspecialchars($platform['url']) ?>"><?= htmlspecialchars($platform['name']) ?></a><?php if ($index < $platformCount - 1): ?> | <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section" aria-labelledby="features-title">
    <!-- Part 1: Title and Features -->
    <div class="features-top">
        <div class="container">
            <div class="text-center">
                <h2 id="features-title" class="section-title">
                    <span><?= htmlspecialchars($features['section_title'] ?? 'IronPDF for C++') ?></span><img src="<?= base_url('/' . ($features['badge_image'] ?? 'assets/badge.svg')) ?>" alt="Coming Soon" class="coming-soon-badge">
                </h2>
            </div>
            
            <div class="features-grid">
                <?php if (isset($features['feature_list']) && is_array($features['feature_list'])): ?>
                    <?php $featureCount = count($features['feature_list']); ?>
                    <?php foreach ($features['feature_list'] as $index => $feature): ?>
                        <div class="feature-card">
                            <span class="feature-hash" aria-hidden="true"><?= htmlspecialchars($feature['hash']) ?></span>
                            <p class="feature-text"><?= htmlspecialchars($feature['text']) ?></p>
                        </div>
                        <?php if ($index < $featureCount - 1): ?>
                            <img src="<?= base_url('/' . ($features['divider_image'] ?? 'assets/divider.svg')) ?>" alt="" class="feature-divider" aria-hidden="true">
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <!-- Part 2: Description -->
    <div class="features-bottom">
        <div class="container">
            <div class="feature-description">
                <?php if (isset($features['description']) && is_array($features['description'])): ?>
                    <?php foreach ($features['description'] as $paragraph): ?>
                        <p><?= $paragraph ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Why Section -->
<section class="why-section" aria-labelledby="why-title">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="html-pdf-icon" aria-hidden="true">
                    <img src="<?= base_url('/' . ($why_section['icon'] ?? 'assets/HTML-PDF-Neon-BG.svg')) ?>" alt="Convert HTML to PDF" width="308" height="216" loading="lazy">
                </div>
            </div>
            <div class="col-lg-8">
                <h2 id="why-title" class="why-title"><?= htmlspecialchars($why_section['title'] ?? 'Why make a') ?> <span class="text-purple"><?= htmlspecialchars($why_section['highlight'] ?? 'C++ PDF Library') ?></span></h2>
                <?php if (isset($why_section['paragraphs']) && is_array($why_section['paragraphs'])): ?>
                    <?php foreach ($why_section['paragraphs'] as $paragraph): ?>
                        <p class="why-text"><?= htmlspecialchars($paragraph) ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Early Access Products Section -->
<section class="early-access-products" aria-labelledby="early-access-products-title">
    <div class="container">
        <h2 id="early-access-products-title" class="section-title text-white">
            <?= htmlspecialchars($products['section_title'] ?? 'Early Access to') ?> <span class="text-pink"><?= htmlspecialchars($products['highlight'] ?? 'C++ PDF Library') ?></span>
        </h2>
        <p class="section-description"><?= htmlspecialchars($products['description'] ?? '') ?></p>
        
        <div class="row product-cards mt-5">
            <?php if (isset($products['product_list']) && is_array($products['product_list'])): ?>
                <?php foreach ($products['product_list'] as $product): ?>
                    <div class="col-md-4 product-col">
                        <a href="<?= base_url('products/' . $product['id']) ?>" class="product-card-link">
                            <div class="product-card">
                                <span class="badge <?= $product['status'] === 'released' ? 'badge-released' : 'badge-coming-soon' ?>"><?= htmlspecialchars($product['badge_text']) ?></span>
                                <div class="product-logo">
                                    <img src="<?= base_url('/' . $product['logo']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" width="113" height="40" loading="lazy">
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Footer CTA Section -->
<?= $this->include('partials/footer_cta') ?>

<?= $this->endSection() ?>
