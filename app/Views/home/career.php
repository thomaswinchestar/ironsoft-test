<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Career Section - Matching Early Access Style -->
<section class="early-access-products" aria-labelledby="career-title">
    <div class="container">
        <h2 id="career-title" class="section-title text-white">
            Join Our <span class="text-pink">Team</span>
        </h2>
        <p class="section-description">We're a team of passionate developers building tools that help millions of developers worldwide. At Iron Software, you'll work on cutting-edge PDF and document processing technologies. We believe in flexibility, remote work, and continuous learning. Join us and make an impact.</p>
        
        <div class="row product-cards mt-5">
            <div class="col-md-4 product-col">
                <div class="product-card">
                    <span class="badge badge-released"># Open</span>
                    <div class="product-logo">
                        <span style="color: #fff; font-size: 14px; font-weight: 600;">Senior C++</span><br>
                        <span style="color: #c6aac6; font-size: 12px;">Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-col">
                <div class="product-card">
                    <span class="badge badge-released"># Open</span>
                    <div class="product-logo">
                        <span style="color: #fff; font-size: 14px; font-weight: 600;">Python SDK</span><br>
                        <span style="color: #c6aac6; font-size: 12px;">Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-col">
                <div class="product-card">
                    <span class="badge badge-coming-soon"># Coming Soon</span>
                    <div class="product-logo">
                        <span style="color: #fff; font-size: 14px; font-weight: 600;">Developer</span><br>
                        <span style="color: #c6aac6; font-size: 12px;">Advocate</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer CTA Section -->
<?= $this->include('partials/footer_cta') ?>

<?= $this->endSection() ?>
