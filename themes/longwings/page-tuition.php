<?php
/*
Template Name : Tuition
*/

get_header();
require('navbar.php');
require('small-hero.php');
?>




           <?php
while(have_posts()){
  the_post();
  the_content();
}

?>

<div class="container" style="background-color: rgba(255, 255, 255, 0.493);font-family:Alike; margin-top:50px;">
                        <h4 style="font-weight: bold; text-align: center; font-family:BioRhyme; margin-bottom: 30px;">Statement of Tuition Charges & Payment Policy</h4>
                        <h5 style="font-weight: bold;font-family:BioRhyme;">Financial Arrangements</h5>
                        <p>All tuition payments are due in full on a monthly basis, on your child’s first scheduled session of each month. Payment is collected by a tuition collection website FACTS. After enrollment, you will be given information on enrolling in that service. (Please remember that your child’s tuition secures your child’s seat in the class for the school year, and all tuition payments must be received even when your child is absent from school).</p>
                        <p>If you need to make special arrangements for your tuition payments, please call Saint Dominic’s Academy with any questions at <span onclick="window.open('tel:3862435020')" style="font-weight: bold; color: blue; text-decoration: underline; cursor: pointer;">383-246-5020 </span> or email us at <span onclick="window.location.href = 'mailto:info@longwingsacademy.org?subject=Tuition&body=';" style="font-weight: bold; color: blue; text-decoration: underline; cursor: pointer;">info@longwingsacademy.org</span>.</p>
                        <h5 style="font-weight: bold;font-family:BioRhyme;">Tution Assistance</h5>
                        <p>Saint Dominic’s Academy currently offers tuition assistance in the form of scholarships to all enrolled and newly enrolling families. Please follow the prompts on the FACTS website to apply for assistance.</p>
                        <h5 style="font-weight: bold;font-family:BioRhyme;">Registration Fee</h5>
                        <p>A non-refundable fee of $25.00 is due at the time of enrollment to hold your child’s seat in the classroom for the school year.</p>

                      </div>

<?php
require('cta.php');
get_footer();
?>