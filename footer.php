<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<footer class="footer pt-5 py-4">
    <div class="container-xl">
        <div class="row g-5 pb-5">
            <div class="col-md-4 text-center text-md-start">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/rcm-carpentry.jpeg" alt="RCM Carpentry" class="w-75">
            </div>
            <div class="col-md-4">
                <?= wp_nav_menu(array('theme_location' => 'footer_menu1', 'container_class' => 'footer__menu')) ?>
            </div>
            <div class="col-md-4">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa-solid fa-mobile text-white"></i></span> <?= do_shortcode('[contact_phone]') ?></li>
                    <li><span class="fa-li"><i class="fa-solid fa-envelope text-white"></i></span> <?= do_shortcode('[contact_email]') ?></li>
                </ul>
                <?= do_shortcode('[social_icons class="fa-2x d-flex gap-4"]') ?>
            </div>
        </div>

        <div class="colophon d-flex justify-content-between align-items-center flex-wrap">
            <div>
                &copy; <?= date('Y') ?> RCM Carpentry (Horsham) Limited. Registered in England and Wales, Company number 16072907.
            </div>
            <div>
                lc
            </div>
        </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>