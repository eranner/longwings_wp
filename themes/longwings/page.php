<?php
get_header();
require('navbar.php');
require('small-hero.php');
?>

<div class="container" id="gutenberg-delivery-container" style="overflow:hidden;">
    <?php
    if (have_posts()) {
        the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php } ?>
</div>
<hr>
<?php
require('cta.php');
get_footer();
?>
