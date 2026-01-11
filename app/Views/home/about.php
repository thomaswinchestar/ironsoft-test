<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Why Section (About Page) -->
<section class="why-section" aria-labelledby="why-title" style="padding-top: 120px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="html-pdf-icon" aria-hidden="true">
                    <img src="<?= base_url(($why_section['icon'] ?? 'assets/HTML-PDF-Neon-BG.svg')) ?>" alt="Convert HTML to PDF" width="308" height="216" loading="lazy">
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

<!-- Footer CTA Section -->
<?= $this->include('partials/footer_cta') ?>

<?= $this->endSection() ?>
