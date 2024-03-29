<?php

function calendars() {
    register_post_type('calendars', [
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'public'=>true,
        'show_in_rest'=>true,
        'labels'=> [
            'name'=>'Calendars',
            'add_new_item'=>'Add New Calendar',
            'add_new'=>'Add New Calendar',
            'edit'=>'Edit Calendar',
            'edit_item'=>'Edit Calendar',
            'all_items'=>'All Calendars',
            'singular_name'=>'Calendar',
        ],
        'menu_icon'=> 'dashicons-calendar-alt'
    ]);
}

add_action('init', 'calendars');