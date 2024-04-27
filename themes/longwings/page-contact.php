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
                    <h4 class="grid-contact-tagline">Longwings Academy
</h4>
                    <h4 class="grid-contact-tagline">8165 168th St</h4>
                    <h4 class="grid-contact-tagline">McAlpin, FL 32962</h4>
                    <a href="https://www.google.com/maps/place/8165+168th+St,+McAlpin,+FL+32062/@30.1459717,-82.9183422,17z/data=!3m1!4b1!4m6!3m5!1s0x88eed7373a8a04a3:0xd3e69fdeb5a9dfcb!8m2!3d30.1459717!4d-82.9157673!16s%2Fg%2F11vm13xfd2?entry=ttu"><button class="btn btn-warning">Map</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('cta.php');
get_footer();
?>