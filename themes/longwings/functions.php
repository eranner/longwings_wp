<?php

function set_up_longwings_theme_files() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('longwings_main_js', get_theme_file_uri('/main.js'), array('jquery'), '1.0', true);
}

add_action('init', 'set_up_longwings_theme_files');

function show_main_cards() {
    $main_cards = new WP_Query([
      'posts_per_page' => -1,
      'post_type' => 'main_cards',
      'order' => 'ASC'
    ]);

    $output = '';
  
    while ($main_cards->have_posts()) {
      $main_cards->the_post();
      $content = get_the_content();
      $trimmed = wp_trim_words($content, 20);
      $output .= '<div class="card frontpage-card">
                 <img src="'.esc_url(get_field('card_image')).'" class="card-img-top card-image-holder" alt="...">
                    <div class="card-body">
                        <h5 class="card-title frontpage-card-title">'. get_the_title().'</h5>
                        <p class="card-text frontpage-card-content">'.$trimmed.'</p>
                        
                    </div>
                    <a href="'.get_the_permalink().'" class="btn frontpage-card-button">Read More</a>
                </div>';
    }
  
    wp_reset_postdata(); // Reset post data after custom query
  
    return $output;
  }
  
  add_shortcode('main_cards', 'show_main_cards');

  function show_teachers() {
    $teacher_cards = new WP_Query([
        'posts_per_page' => -1,
        'post_type' => 'teacher_cards',
        'order' => 'ASC'
      ]);

      $output = '<div class="container" id="all-teachers-holder">';
  
      while ($teacher_cards->have_posts()) {
        $teacher_cards->the_post();
        $name = get_the_title();
        $bio = get_field('bio');
        $fact1 = get_field('first_fact');
        $fact2 = get_field('second_fact');
        $fact3 = get_field('third_fact');
        $picture = esc_url(get_field('teacher_photo'));
        $output .= '
<div class="faculty-card">
    <div class="faculty-image-holder">
        <img src="'.$picture.'" alt="" class=" faculty-image">
    </div>
    <div class="faculty-bio">
        <h3 class="facultyname">'.$name.'</h3>
        <p class="bio-snippet">'.$bio.'</p>
        <h5>Fun Facts</h5>
        <ul class="faculty-accomplishments">
            ';
            if($fact1){$output.= "<li>$fact1</li>";}
            if($fact2){$output.= "<li>$fact2</li>";}
            if($fact3){$output.= "<li>$fact3</li>";}

           $output.= '
        </ul>
    </div>
</div>
       </div> ';
      }
    
      wp_reset_postdata(); // Reset post data after custom query
    
      return $output;
  }
  add_shortcode('teacher_cards', 'show_teachers');

  function show_calendars() {
    $calendars = new WP_Query([
        'posts_per_page' => -1,
        'post_type' => 'calendars',
    ]);

    $output = '
    <h3 class="section-header">Longwings Calendar of Events​</h3>
    <p class="section-tagline" style="margin-bottom: 50px;">**All scheduled events are subject to change. Be sure to check our <a style="color:gold; text-shadow: 1px 1px 3px #333;" href="'. site_url().'/announcements">announcements</a> page for updates**</p>
    <div id="calendar-pdf-holder">
    ';

    while($calendars->have_posts()){
        $calendars->the_post();
        $current_month = date('F, Y');
        $current_year = date('Y');
        $pdf_month = get_field('pdf_monthly_calendar');
        $pdf_year = get_field('pdf_yearly_calendar');

        $output .= '
        <div style="display:flex; flex-direction:column;">
            <p class="section-tagline" style="font-family:BioRhyme;">'.$current_month.' Calendar</p>
            <iframe src="'.$pdf_month.'" width="400" height="600"></iframe>
        </div>
        <div style="display:flex; flex-direction:column;">
            <p class="section-tagline" style="font-family:BioRhyme;">'.$current_year.' Academic Calendar</p>
            <embed src="'.$pdf_year.'" width="400" height="600"></embed>
        </div>
        ';
    }
    
    wp_reset_postdata();
    $output .= '</div>';
    return $output;
}

add_shortcode('pdf_calendars', 'show_calendars');



function show_mission_cards() {
    $missions = new WP_Query([
        'posts_per_page' => -1,
        'post_type' => 'mission_cards',
        'order' => 'ASC'
    ]);
    $counter = 0;
    $output = '<div class="mission-card-container">';
    while($missions->have_posts()){

        

        if($counter % 2 == 0){
            $class = "mission-left";
            $h2 = "left-mission-header";
            $p = "left-mission-paragraph";
            $img = "mission-image-left";
            $mission_flex = 'mission-flex-left';
        } else {
            $class = "mission-right";
            $h2 = "right-mission-header";
            $p = "right-mission-paragraph";
            $img = "mission-image-right";
            $mission_flex = 'mission-flex-right';
        }

        $missions->the_post();
        $output .= '<div class="'.$mission_flex.'"><div class=" '.$class.'">
            <h2 class="'.$h2.'">'.get_the_title().'</h2>
            <img src="'.get_field('mission_card_image').'" class="img-fluid '.$img.'">
            <div class="'.$p.'">'.get_the_content().'</div>
            </div></div>
        ';

        $counter ++;

    }
    wp_reset_postdata();

    $output .= '</div>';


    return $output;
}

add_shortcode('our_mission', 'show_mission_cards');

function show_tuition_table() {
    $records = new WP_Query([
        'posts_per_page' => -1,
        'post_type' => 'tuition_records',
        'order' => 'ASC'
    ]);


    $output = '
    <h3 class="section-header">Longwings '. date('Y').'Tuition</h3>
    <p class="section-tagline" style="margin-bottom: 50px;">**All tuition is subject to change. Be sure to check our <a style="color:gold; text-shadow: 1px 1px 3px #333;" href="'.site_url()."/announcements".'">announcements</a> page for updates**</p>
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
    ';

    while($records->have_posts()){
    $records->the_post();

        $output .= '
        <tr>
            <th scope="row">'.get_the_title().'</th>
            <td>'. get_field('schedule').'</td>
            <td>'.get_field('times').'</td>
            <td>'.get_field('cost').'</td>
        </tr>
        ';
    }

    // wp_reset_post_data();

    $output .= '
        </tbody>
        </table>
        </div>
    ';

    return $output;
}

add_shortcode('tuition_table', 'show_tuition_table');

