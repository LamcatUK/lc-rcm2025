<?php
if (!is_block_region_applicable()) {
    return;
}
?>
<section class="title_text py-5">
    <div class="container-xl">
        <h2><?= get_field('title') ?></h2>
        <?= get_field('content') ?>
    </div>
</section>