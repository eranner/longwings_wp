<?php

function longwings_blog_post() {
    register_post_type('longwings_blog_post', [
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'public'=>true,
        'show_in_rest'=>true,
        'labels'=> [
            'name'=>'Longwings Blog Post',
            'add_new_item'=>'Add New Longwings Post',
            'add_new'=>'Add New Longwings Post',
            'edit'=>'Edit Longwings Post',
            'edit_item'=>'Edit Longwings Post',
            'all_items'=>'All Longwings Posts',
            'singular_name'=>'Longwings Post',
        ],
        'menu_icon'=> 'dashicons-welcome-write-blog'
    ]);
}

add_action('init', 'longwings_blog_post');