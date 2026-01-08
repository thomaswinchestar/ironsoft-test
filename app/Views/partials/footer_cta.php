<!-- Footer CTA Section -->
<section class="footer-cta" aria-labelledby="footer-cta-title">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 id="footer-cta-title" class="footer-cta-title">
                    <?= htmlspecialchars($footer_cta['title'] ?? 'Sign up to our') ?> <span class="text-pink"><?= htmlspecialchars($footer_cta['highlight'] ?? 'Beta Program') ?></span>
                </h2>
                <form class="signup-form footer-form" aria-label="Beta program signup form">
                    <div class="input-group">
                        <label for="email-footer" class="visually-hidden">Email address</label>
                        <input type="email" class="form-control" id="email-footer" 
                               placeholder="Enter email adress" required>
                        <button type="submit" class="btn btn-primary btn-signup">
                            <?= htmlspecialchars($footer_cta['button_text'] ?? 'Sign up now') ?>
                            <svg width="8" height="12" viewBox="0 0 12 14" fill="currentColor" aria-hidden="true">
                                <path d="M0 0V14L12 7L0 0Z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
