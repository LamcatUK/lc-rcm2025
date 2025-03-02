<section class="hero">
    <?= wp_get_attachment_image(get_field('background'), 'full', false, ['class' => 'hero__bg']) ?>
    <div class="container-xl">
        <div class="hero__inner">
            <h1 class="has-blue-400-color mb-0"><?= get_field('title') ?></h1>
            <div class="text-white fs-500 fw-600"><?= get_field('intro') ?></div>
            <div class="hero__cta">
                <?php
                if (get_field('cta') ?? null) {
                    $l = get_field('cta');
                ?>
                    <a href="<?= $l['url'] ?>" target="<?= $l['target'] ?>" class="button"><i class="fa-solid fa-paper-plane"></i> <?= $l['title'] ?></a>
                <?php
                }
                if (!empty(get_field('call_button'))) {
                ?>
                    <a href="tel:<?= parse_phone(get_field('contact_phone', 'option')) ?>" class="button"><i class="fa-solid fa-mobile"></i> <?= get_field('contact_phone', 'option') ?></a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>