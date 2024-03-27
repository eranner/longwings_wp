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
      $output .= '<div class="card" style="width: 18rem;">
                 <img src="'.esc_url(get_field('card_image')).'" class="card-img-top" alt="..." style="max-height:180px;">
                    <div class="card-body">
                        <h5 class="card-title frontpage-card-title">'. get_the_title().'</h5>
                        <p class="card-text frontpage-card-content">'.get_the_content().'</p>
                        
                    </div>
                    <a href="#" class="btn frontpage-card-button">Read More</a>
                </div>';
    }
  
    wp_reset_postdata(); // Reset post data after custom query
  
    return $output;
  }
  
  add_shortcode('main_cards', 'show_main_cards');
