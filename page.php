<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>
<main id="main" class="pt-5 mt-5">
    <?php
    the_post();
    the_content();

    // $block_names = get_all_block_names_from_content(get_the_ID());
    // print_r($block_names);
    ?>
</main>
<?php
get_footer();
