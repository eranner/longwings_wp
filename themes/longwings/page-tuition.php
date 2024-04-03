<?php
/*
Template Name : Tuition
*/

get_header();
require('navbar.php');
require('small-hero.php');

while(have_posts()){
  the_post();
  the_content();
}
require('cta.php');
get_footer();
?>