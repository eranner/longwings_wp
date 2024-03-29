<section class="footer-background">

<div class="container" style="padding-top: 10px!important;">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" >
    <p class="col-md-4 mb-0 text-body-secondary" style="color:white!important;">&copy; <?php echo Date('Y');?> Longwings Academy</p>

    <a href="<?php echo site_url('/');?>" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <img class="bi me-2" width="100" height="100" src="<?php echo get_theme_file_uri().'/photos/longwings-academy-logo-white.png';?>">
    </a>

    <ul class="nav col-md-4" style="justify-content: space-evenly;">
      <li class="nav-item" ><a href="<?php echo site_url('/our-mission');?>" class="nav-link px-2 text-body-secondary" style="color:white!important;">Our Mission</a></li>
      <li class="nav-item"><a href="" class="nav-link px-2 text-body-secondary" style="color:white!important;">Donate</a></li>
      <li class="nav-item"><a href="<?php echo site_url('/faculty');?>" class="nav-link px-2 text-body-secondary" style="color:white!important;">Faculty</a></li>
      <li class="nav-item"><a href="<?php echo site_url('/curriculum');?>" class="nav-link px-2 text-body-secondary" style="color:white!important;">Curriculum</a></li>
      <li class="nav-item"><a href="<?php echo site_url('/#contact-us');?>" class="nav-link px-2 text-body-secondary" style="color:white!important;">Contact Us</a></li>
      <li class="nav-item"><a href="<?php echo site_url('/calendar');?>" class="nav-link px-2 text-body-secondary" style="color:white!important;">Calendar</a></li>
      <li class="nav-item"><a href="<?php echo site_url('/announcements');?>" class="nav-link px-2 text-body-secondary" style="color:white!important;">Announcements</a></li>
    </ul>
  </footer>
</div>
</section>
<?php wp_footer(); ?>
</body>
</html>