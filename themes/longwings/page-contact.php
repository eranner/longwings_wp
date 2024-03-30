<?php
/* Template Name: Contact Us */
get_header();
require('navbar.php');
require('small-hero.php');
?>
<div class="cardholders-main" >
    <div class="main-card-cover" style="display: flex; flex-direction: column; align-items:center; padding-top: 40px;padding-bottom:40px;">
        <div class="container" id="gutenberg-delivery-container">
            <div class="grid-contact-card-container">
                <div class="grid-contact-card">
                    <img class="contact-grid-image" src="<?php echo get_theme_file_uri().'/photos/phone-call.svg';?>" alt="" class="img-fluid">
                    <h3 class="grid-contact-header">Phone</h3>
                    <h4 class="grid-contact-tagline">(386) 243-5020</h4>
                    <a href="tel:+13862435020"><button class="btn btn-warning">Call</button></a>
                </div>
                <div class="grid-contact-card">
                <img class="contact-grid-image" src="<?php echo get_theme_file_uri().'/photos/email.svg';?>" alt="" class="img-fluid">
                    <h3 class="grid-contact-header">Email</h3>
                    <h4 class="grid-contact-tagline" style="font-size:1.2rem;">info@longwingsacademy.org</h4>
                    <a href="mailto:info@longwingsacademy.org"><button class="btn btn-warning">Email</button></a>
                </div>
                <div class="grid-contact-card">
                <img class="contact-grid-image" src="<?php echo get_theme_file_uri().'/photos/placeholder.svg';?>" alt="" class="img-fluid">
                <h3 class="grid-contact-header">Visit</h3>
                    <h4 class="grid-contact-tagline">McAlpin, FL</h4>
                    <a href="https://maps.app.goo.gl/RXZ7LgAEoZG5GYGV9"><button class="btn btn-warning">Map</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('cta.php');
get_footer();
?>