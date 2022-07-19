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
                    <h2>Manager</h2>
                    <p>+33 1 53 31 25 23</p>
                    <p>info@esgi.com</p>
                </div>
                <div class="footer__contact">
                    <h2>CEO</h2>
                    <p>+33 1 53 31 25 25</p>
                    <p>ceo@company.com</p>
                </div>
            </div>
        </div>
        <div class="footer__footer">
                <small class="footer__creator">2022  Figma Template by ESGI</small>
                <div class="footer__socials">
                    <h1>LinkedIn</h1>
                    <h1>Facebook</h1>
                </div>
        </div>
    </div>
</footer>