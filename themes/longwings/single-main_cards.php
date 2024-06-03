<?php

get_header();
require('navbar.php');
require('small-hero.php');
?>

<?php
$output = '<div class="container">';
while(have_posts()){
    the_post();
    if(get_field('card_image')){
        $output.= '<div style="display:flex; justify-content:center; margin-top: 50px;"><img class="img-fluid" src="';
        $output.= esc_url(get_field('card_image'));
        $output.= '"></div>';
    }
    $output .= '<div class="single-content-container">';
    $output .= get_the_content(); // Changed from the_content() to get_the_content()
    $output .= '</div></div>';
}

echo $output;
?>
</div>
<?php
require('cta.php');
get_footer();