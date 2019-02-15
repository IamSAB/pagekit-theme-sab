<?php

return [

    'name' => 'sab-theme',

    'require' => 'theme-kit',

    'menus' => [
        'main' => 'Main',
        'offcanvas' => 'Offcanvas'
    ],

    'positions' => [
        'navbar' => 'Navbar',
        'offcanvas' => 'Offcanvas',
        'cover' => 'Cover',
        'top' => 'Top',
        'sidebar' => 'Sidebar',
        'bottom' => 'Bottom'
    ],

    'node-theme' => [
        'node' => [
            'label' => 'Node',
            'categories' => ['Navigation'],
            'fieldsets' => ['node']
        ],
        'offcanvas' => [
            'label' => 'Offcanvas',
            'categories' => ['Navigation', 'Position'],
            'fieldsets' => ['ukOffcanvas', 'menu']
        ],
        'navbar' => [
            'label' => 'Navbar',
            'categories' => ['Navigation'],
            'fieldsets' => ['ukNavbar', 'container']
        ],
        'cover' => [
            'label' => 'Cover',
            'categories' => ['Position'],
            'fieldsets' => ['cover', 'ukHeightViewport']
        ],
        'top' => [
            'label' => 'Top',
            'categories' => ['Position'],
            'fieldsets' => ['section', 'background', 'ukHeightViewport', 'container', 'grid']
        ],
        'main' => [
            'label' => 'Main',
            'categories' => ['Position', 'Content'],
            'fieldsets' => ['section', 'background', 'container', 'sidebar']
        ],
        'bottom' => [
            'label' => 'Bottom',
            'categories' => ['Position'],
            'fieldsets' => ['section', 'background', 'ukHeightViewport', 'container', 'grid']
        ]
    ],

    'widget-theme' => [
        'grid' => [
            'label' => 'Grid',
            'positions' => ['top', 'bottom'],
            'fieldsets' => ['gridItem']
        ],
        'cover' => [
            'label' => 'Position',
            'positions' => ['cover'],
            'fieldsets' => ['position']
        ],
        'alignment' => [
            'label' => 'Alignment',
            'fieldsets' => ['text']
        ],
        'visibility' => [
            'label' => 'Visibility',
            'fieldsets' => ['visibility']
        ],
        'menu' => [
            'label' => 'Menu',
            'types' => ['system/menu'],
            'fieldsets' => ['menu']
        ],
        'content' => [
            'label' => 'Content',
            'fieldsets' => ['card', 'heading']
        ]
    ],

    'settings-theme' => [
        'defaults' => [
            'label' => 'Defaults',
            'fieldsets' => [
                'container', 'background', 'section', 'card'
            ]
        ]
    ]

];
