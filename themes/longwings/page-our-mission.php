<?php
get_header();
require('navbar.php');
require('small-hero.php');
?>

<div>
    <?php
    if (have_posts()) {
        the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content-mission">
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
