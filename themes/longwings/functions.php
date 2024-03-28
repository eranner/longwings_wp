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
        <img src="'.$picture.'" alt="" class="img-fluid faculty-image">
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