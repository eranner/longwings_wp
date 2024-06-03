<?php

function tuition_records() {
    register_post_type('tuition_records', [
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'public'=>true,
        'show_in_rest'=>true,
        'labels'=> [
            'name'=>'Tuition Records',
            'add_new_item'=>'Add New Tuition Record',
            'add_new'=>'Add New Tuition Record',
            'edit'=>'Edit Tuition Record',
            'edit_item'=>'Edit Tuition Record',
            'all_items'=>'All Tuition Records',
            'singular_name'=>'Tuition Record',
        ],
        'menu_icon'=> 'dashicons-money-alt'
    ]);
}

add_action('init', 'tuition_records');