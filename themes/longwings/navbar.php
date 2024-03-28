<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url('/');?>"><img class="img-fluid" src="<?php echo get_theme_file_uri().'/photos/longwings-side.png';?>" style="height: 100px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: space-between;" style="width:100%;">
      <ul class="navbar-nav" style="width:100%; justify-content: center; font-family: Alike;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo site_url('/our-mission');?>" style="<?php if($_SERVER['REQUEST_URI'] == '/our-mission/'){echo 'text-decoration: underline;';} ?>">Our Mission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/faculty');?>" <?php 
          if($_SERVER['REQUEST_URI'] == '/faculty'){
            echo 'style="font-weight: bold;"';
          };?>>Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/curriculum');?>" style="<?php if($_SERVER['REQUEST_URI'] == '/curriculum/'){echo 'text-decoration: underline;';} ?>">Curriculum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/tuition');?>" style="<?php if($_SERVER['REQUEST_URI'] == '/tuition/'){echo 'text-decoration: underline;';} ?>">Tuition</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/contact');?> " style="<?php if($_SERVER['REQUEST_URI'] == '/contact/'){echo 'text-decoration: underline;';} ?>">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="<?php if($_SERVER['REQUEST_URI'] == '/calendar/' || $_SERVER['REQUEST_URI'] == '/announcements/'){echo 'text-decoration: underline;';} ?>">
            Notifications
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo site_url('/calendar');?>">Calendar</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('/announcements');?>">Announcements</a></li>
          </ul>
        </li>
      </ul>
    <a href="#"><button class="main-enroll-button">Enroll Today!</button></a>

    </div>

  </div>
</nav>