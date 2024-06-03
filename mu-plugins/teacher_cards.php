<?php

function teacher_cards() {
    register_post_type('teacher_cards', [
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'public'=>true,
        'show_in_rest'=>true,
        'labels'=> [
            'name'=>'Teachers',
            'add_new_item'=>'Add New Teacher',
            'add_new'=>'Add New Teacher',
            'edit'=>'Edit Teacher',
            'edit_item'=>'Edit Teacher',
            'all_items'=>'All Teacher',
            'singular_name'=>'Teacher',
        ],
        'menu_icon'=> 'dashicons-welcome-learn-more'
    ]);
}

add_action('init', 'teacher_cards');