<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php
// Product-specific descriptions
$productDescriptions = [
    'java' => [
        'title_prefix' => 'Early Access to',
        'title_highlight' => 'Java PDF Library',
        'description' => 'Joining the early access program will allow you to collaborate closely with our engineering team. You will be playing a key role in the development process as you share your early experiences using the Java PDF library before its official launch. Your continued feedback after we release the library will be immensely helpful as we release new features and improve on existing features.',
    ],
    'python' => [
        'title_prefix' => 'Early Access to',
        'title_highlight' => 'Python PDF Library',
        'description' => 'Joining the early access program will allow you to collaborate closely with our engineering team. You will be playing a key role in the development process as you share your early experiences using the Python PDF library before its official launch. Your continued feedback after we release the library will be immensely helpful as we release new features and improve on existing features.',
    ],
    'nodejs' => [
        'title_prefix' => 'Early Access to',
        'title_highlight' => 'Node.js PDF Library',
        'description' => 'Joining the early access program will allow you to collaborate closely with our engineering team. You will be playing a key role in the development process as you share your early experiences using the Node.js PDF library before its official launch. Your continued feedback after we release the library will be immensely helpful as we release new features and improve on existing features.',
    ]
];

$productId = $product['id'] ?? 'java';
$productInfo = $productDescriptions[$productId] ?? $productDescriptions['java'];
?>

<!-- Early Access Products Section -->
<section class="early-access-products" aria-labelledby="early-access-products-title">
    <div class="container">
        <h2 id="early-access-products-title" class="section-title text-white">
            <?= htmlspecialchars($productInfo['title_prefix']) ?> <span class="text-pink"><?= htmlspecialchars($productInfo['title_highlight']) ?></span>
        </h2>
        <p class="section-description"><?= htmlspecialchars($productInfo['description']) ?></p>
        
        <div class="row product-cards mt-5">
            <?php if (isset($all_products) && is_array($all_products)): ?>
                <?php foreach ($all_products as $prod): ?>
                    <div class="col-md-4 product-col">
                        <a href="<?= base_url('products/' . $prod['id']) ?>" class="product-card-link">
                            <div class="product-card">
                                <span class="badge <?= $prod['status'] === 'released' ? 'badge-released' : 'badge-coming-soon' ?>"><?= htmlspecialchars($prod['badge_text']) ?></span>
                                <div class="product-logo">
                                    <img src="<?= base_url($prod['logo']) ?>" alt="<?= htmlspecialchars($prod['name']) ?>" width="113" height="40" loading="lazy">
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
