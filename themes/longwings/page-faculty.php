<?php
get_header();
require('navbar.php');
require('small-hero.php');
?>
<div class="cardholders-main" >
        <div class="main-card-cover" style="display: flex; flex-direction: column; align-items:center; padding-top: 40px;padding-bottom:40px;">
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
    </div>
    </div>
<hr>
<?php
require('cta.php');
get_footer();
?>