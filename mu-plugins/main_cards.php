<?php

function main_cards() {
    register_post_type('main_cards', [
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'public'=>true,
        'show_in_rest'=>true,
        'labels'=> [
            'name'=>'Main Page Cards',
            'add_new_item'=>'Add New Card',
            'add_new'=>'Add New Card',
            'edit'=>'Edit Card',
            'edit_item'=>'Edit Card',
            'all_items'=>'All Cards',
            'singular_name'=>'Card',
        ],
        'menu_icon'=> 'dashicons-index-card'
    ]);
}

add_action('init', 'main_cards');