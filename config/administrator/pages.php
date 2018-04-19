<?php

return [
    'title'   => 'Pages',
    'single'  => 'page',
    'model'   => 'App\Post',
    'columns' => [
        'id',
        'title',
        'created_at',
    ],
    'edit_fields' => [
        'post_type' => [
            'type'    => 'enum',
            'options' => [
                'post',
                'page',
            ],
            'value' => 'page',
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
    ],
    'form_width' => 800,
];