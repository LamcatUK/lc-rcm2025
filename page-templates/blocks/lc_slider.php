<?php
$l = get_field('cta');
?>
<section class="slider">
    <div class="container-xl py-5">
        <h2><?= get_field('title') ?></h2>
        <a href="<?= $l['url'] ?>" class="swiper slider__swiper mb-5">
            <div class="swiper-wrapper">
                <?php
                foreach (get_field('gallery') as $img) {
                ?>
                    <div class="swiper-slide">
                        <?= wp_get_attachment_image($img, 'large', false, ['class' => 'img-fluid']) ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </a>
        <div class="text-center"><a href="<?= $l['url'] ?>" class="button"><?= $l['title'] ?></a></div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Swiper(".slider__swiper", {
                slidesPerView: 1,
                spaceBetween: 10,
                autoplay: true,
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    }, // Tablets
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    } // Desktops
                },
                loop: true
            });
        });
    </script>
<?php
}, 9999);
