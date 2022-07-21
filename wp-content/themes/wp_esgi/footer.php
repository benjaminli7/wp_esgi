<footer class="footer">
    <div class="container">
        <div class="footer__header">
            <div class="logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                ?>
            </div>
            <div class="footer__contacts">
                <div class="footer__contact">
                    <h2><?= get_theme_mod('footer-job-1') ?></h2>
                    <p><?= get_theme_mod('footer-phone-1') ?></p>
                    <p><?= get_theme_mod('footer-mail-1') ?></p>
                </div>
                <div class="footer__contact">
                    <h2><?= get_theme_mod('footer-job-2') ?></h2>
                    <p><?= get_theme_mod('footer-phone-2') ?></p>
                    <p><?= get_theme_mod('footer-mail-2') ?></p>
                </div>
            </div>
        </div>
        <div class="footer__footer">
            <small class="footer__creator">2022 Figma Template by ESGI</small>
            <div class="footer__socials">
                <a href="<?= get_theme_mod('social-url-1') ?>" class="footer__social">
                    <img src="<?= get_theme_mod('social-1') ?>" alt="" />
                </a>
                <a href="<?= get_theme_mod('social-url-2') ?>" class="footer__social">
                    <img src="<?= get_theme_mod('social-2') ?>" alt="" />
                </a>
            </div>
        </div>
    </div>
</footer>