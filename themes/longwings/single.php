<?php

get_header();
require('navbar.php');
require('small-hero.php');
?>

<?php
$output = '<div class="container">';
while(have_posts()){
    the_post();
    $output .= '<div class="single-content-container">';
    if(!str_contains($_SERVER['REQUEST_URI'], 'longwings_blog_post')){
        $output .= '<h3 style="font-family: BioRhyme; margin-bottom: 30px; text-decoration: underline;">Posted On: '.get_the_date().'</h3>';
    }
    $output .= get_the_content(); // Changed from the_content() to get_the_content()
    $output .= '</div></div>';
}

echo $output;
?>
<div style="display: flex; justify-content: center; width: 100%;">
<?php if(str_contains($_SERVER['REQUEST_URI'], 'longwings_blog_post')){
    ?>
<a href="<?php echo site_url().'/longwings-blog';?>" style = "color:#333; text-align:center; width: 100%; font-family: BioRhyme;">All Blog Posts</a>
<?php
} else {?>
<a href="<?php echo site_url().'/announcements';?>" style = "color:#333; text-align:center; width: 100%; font-family: BioRhyme;">Back To Announcements</a>
<?php
}
?>
</div>
</div>
<?php
require('cta.php');
get_footer();