<?php

get_header();
require('navbar.php');
require('hero.php');
?>


<section class="cardholders-main">
    <div class="background-image">
        <img src="<?php echo get_theme_file_uri().'/photos/blue-butterfly.png';?>" alt="">
    </div>
    <div class="container" id="container-special-one">
        <h3 class="section-header">A Refreshing Way To Educate</h3>
        <p class="section-tagline">Flexible options that fit your lifestyle</p>
        <div class="main-card-container">
        <?php 
            echo show_main_cards();
        ?>

        </div>

    </div>
</section>

<?php

get_footer();