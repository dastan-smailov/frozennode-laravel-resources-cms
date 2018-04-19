<?php

return [
    'title'   => 'Categories',
    'single'  => 'category',
    'model'   => 'App\Category',
    'columns' => [
        'id',
        'title',
        'slug',
        'description',
    ],
    'edit_fields' => [
        'title' => [
            'type' => 'text',
        ],
        'slug' => [
            'type' => 'text',
        ],
        'description' => [
            'type' => 'textarea',
        ],
    ],
];