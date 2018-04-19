<?php

return [
    'title'   => 'Posts',
    'single'  => 'post',
    'model'   => 'App\Post',
    'columns' => [
        'id',
        'title',
        'category' => array(
            'title' => "category",
            'relationship' => 'category',
            'select' => "title",
        ),
        'post_type',
        'thumbnail' =>[
            'output' => '<img src="/uploads/posts/small/(:value)">',
        ],
        'created_at',
    ],
    'edit_fields' => [
        'post_type' => [
            'type'    => 'enum',
            'options' => [
                'post',
                'page',
            ],
            'value' => 'post',
        ],
        'category' => [
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'title' => [
            'type' => 'text',
        ],
        'slug' => [
            'type' => 'text',
        ],
        'content' => [
            'type' => 'wysiwyg',
        ],
        'excerpt' => [
            'type' => 'textarea',
        ],
        'thumbnail' => [
            'type' => 'image',
            'location' => public_path().'/uploads/posts/original/',
            'sizes' => [
                [100, 100, 'auto', public_path().'/uploads/posts/small/',100],
                [300, 100, 'auto', public_path().'/uploads/posts/thumbnail/',100],
            ],
        ],
    ],
    'form_width' => 800,
];