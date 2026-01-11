<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Features Section -->
<section class="features-section" aria-labelledby="features-title" style="padding-top: 100px;">
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

<!-- Footer CTA Section -->
<?= $this->include('partials/footer_cta') ?>

<?= $this->endSection() ?>
