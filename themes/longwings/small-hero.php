<section style="background-color: white; margin-bottom:0; padding-bottom:0!important;">


<div class="px-4 py-5 my-5 text-center" id='mainHero' style="background-image: url(<?php echo get_template_directory_uri().'/photos/banner-butterflies.jpg'; ?>); background-size:contain; color: white; text-shadow: 1px 1px black; height: 30vh;display:flex; flex-direction:column; align-items: center; justify-content: center; padding: 0 0 0 0!important; margin-top:0!important; margin-bottom:0!important; filter:grayscale(100%);">
<div style="width: 100%; height: 100%; background-color: #3333336a;  padding-top: 30px; display: flex; flex-direction: column; align-items:center; justify-content: center; " >
    
    <h1 class="display-5 fw-bold" style='width: 65%;' id="colony">
   <?php 
   while(have_posts()){
    the_post();
    the_title();
   };
   ?>
    </h1>
    <!-- <div class="col-lg-6 mx-auto">
      <p class="lead mb-4" id="colonyDesc">Brush up on the most recent news from BeesNest and the hospitality industry</p>
    </div> -->
  </div>
  </div>
  </div>
</section>