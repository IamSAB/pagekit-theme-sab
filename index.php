<?php

return [

    'name' => 'sab-theme',

    'require' => 'theme-kit',

    'menus' => [
        'main' => 'Main'
    ],

    'positions' => [
        'top' => 'Top',
        'bottom' => 'Bottom'
    ],

    'node-theme' => [
        'nav' => [
            'label' => 'Nav',
            'categories' => ['Top'],
            'fieldsets' => ['nav']
        ],
        'top' => [
            'label' => 'Top',
            'categories' => ['Top', 'Position'],
            'fieldsets' => ['section', 'background', 'media', 'container', 'grid']
        ],
        'main' => [
            'label' => 'Main',
            'categories' => ['Content'],
            'fieldsets' => ['section', 'background', 'container']
        ],
        'bottom' => [
            'label' => 'Bottom',
            'categories' => ['Bottom', 'Position'],
            'fieldsets' => ['section', 'background', 'container', 'grid']
        ]
    ],

    'widget-theme' => [
        'grid' => [
            'label' => 'Grid',
            'fieldsets' => ['gridItem']
        ],
        'alignment' => [
            'label' => 'Alignment',
            'fieldsets' => ['text']
        ],
        'content' => [
            'label' => 'Content',
            'fieldsets' => ['card', 'heading']
        ]
    ]

];
