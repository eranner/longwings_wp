<?php

function mission_cards() {
    register_post_type('mission_cards',
        [
            'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'public'=>true,
        'show_in_rest'=>true,
        'labels'=> [
            'name'=>'Mission Cards',
            'add_new_item'=>'Add New Mission Card',
            'add_new'=>'Add New Mission Card',
            'edit'=>'Edit Mission Card',
            'edit_item'=>'Edit Mission Card',
            'all_items'=>'All Mission Cards',
            'singular_name'=>'Mission Card',
        ],
        'menu_icon'=> 'dashicons-heart
        '
        ]
    );
    }

    add_action('init', 'mission_cards');
