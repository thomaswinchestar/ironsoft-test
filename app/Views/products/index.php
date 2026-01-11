<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Early Access Products Section -->
<section class="early-access-products" aria-labelledby="early-access-products-title" style="padding-top: 120px;">
    <div class="container">
        <h2 id="early-access-products-title" class="section-title text-white">
            <?= htmlspecialchars($products['section_title'] ?? 'Early Access to') ?> <span class="text-pink"><?= htmlspecialchars($products['highlight'] ?? 'C++ PDF Library') ?></span>
        </h2>
        <p class="section-description"><?= htmlspecialchars($products['description'] ?? '') ?></p>
        
        <div class="row product-cards mt-5">
            <?php if (isset($products['product_list']) && is_array($products['product_list'])): ?>
                <?php foreach ($products['product_list'] as $product): ?>
                    <div class="col-md-4 product-col">
                        <a href="<?= base_url('products/' . $product['id']) ?>" style="text-decoration: none;">
                            <div class="product-card">
                                <span class="badge <?= $product['status'] === 'released' ? 'badge-released' : 'badge-coming-soon' ?>"><?= htmlspecialchars($product['badge_text']) ?></span>
                                <div class="product-logo">
                                    <img src="<?= base_url($product['logo']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" width="113" height="40" loading="lazy">
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
