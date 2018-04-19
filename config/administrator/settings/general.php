<?php

return [
    'title'   => 'General Settings',
    'edit_fields' => [
        'site_name' => [
            'type' => 'text',
            'title' => 'Site Name',
        ],
        'site_description' => [
            'type' => 'textarea',
            'title' => 'Site Description',
        ],
        'site_copyright' => [
            'type' => 'text',
            'title' => 'Site Copyright',
        ],
        'site_logo' => [
            'type' => 'image',
            'title' => 'Logo Image',
            'location' => public_path().'/uploads/',
            'sizes' => [
                [1170, 100, 'auto', public_path().'/uploads/',100],
            ],
        ],
    ],
];