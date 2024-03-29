<?php
/*
Template Name : Tuition
*/

get_header();
require('navbar.php');
require('small-hero.php');
?>
    <h3 class="section-header">Longwings <?php echo date('Y');?> Tuition</h3>
    <p class="section-tagline" style="margin-bottom: 50px;">**All tuition is subject to change. Be sure to check our <a style="color:gold; text-shadow: 1px 1px 3px #333;" href="<?php site_url().'/announcements';?>">announcements</a> page for updates**</p>
    <div class="table-responsive">
    <table class="table table-striped table-hover" style="margin:auto; max-width: 1000px; font-family:Alike;">
  <thead>
    <tr >
      <th scope="col" >Program</th>
      <th scope="col">Schedule</th>
      <th scope="col">Times</th>
      <th scope="col">Cost</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Traditional</th>
      <td><?php echo the_field('traditional_schedule');?></td>
      <td><?php echo the_field('traditional_times');?></td>
      <td><?php echo the_field('traditional_cost');?></td>
    </tr>
    <tr>
      <th scope="row">Academic Hybrid</th>
      <td><?php echo the_field('hybrid_schedule');?></td>
      <td><?php echo the_field('hybrid_times');?></td>
      <td><?php echo the_field('hybrid_cost');?></td>
    </tr>
    <tr>
      <th scope="row">Extracurriculars</th>
        <td><?php echo the_field('extracurriculars_schedule');?></td>
        <td><?php echo the_field('extracurriculars_times');?></td>
        <td><?php echo the_field('extracurriculars_cost');?></td>
    </tr>
  </tbody>
</table>
</div>
    
<?php
require('cta.php');
get_footer();
?>