<?php

return [

    'name' => 'sab-theme',

    'require' => 'theme-kit',

    'menus' => [
        'main' => 'Main',
        'offcanvas' => 'Offcanvas',
        'sidebar' => 'Sidebar',
        'footer' => 'Footer'
    ],

    'positions' => [
        'navbar' => 'Navbar',
        'offcanvas' => 'Offcanvas',
        'cover' => 'Cover',
        'top' => 'Top',
        'outerMainTop' => 'Outer Main Top',
        'innerMainTop' => 'Inner Main Top',
        'innerMainBottom' => 'Inner Main Bottom',
        'outerMainBottom' => 'Outer Main Bottom',
        'sidebar' => 'Sidebar',
        'bottom' => 'Bottom'
    ],

    'node-theme' => [
        'offcanvas' => [
            'label' => 'Offcanvas',
            'categories' => ['Site', 'Position', 'Menu'],
            'fieldsets' => ['offcanvas', 'nav']
        ],
        'navbar' => [
            'label' => 'Navbar',
            'categories' => ['Site', 'Menu'],
            'fieldsets' => ['navbar', 'sticky']
        ],
        'cover' => [
            'label' => 'Cover',
            'categories' => ['Position'],
            'fieldsets' => ['cover']
        ],
        'top' => [
            'label' => 'Top',
            'categories' => ['Position'],
            'fieldsets' => ['section', 'background', 'container', 'grid']
        ],
        'outerMainTop' => [
            'label' => 'Outer Main Top',
            'categories' => ['Position'],
            'fieldsets' => ['grid']
        ],
        'innerMainTop' => [
            'label' => 'Inner Main Top',
            'categories' => ['Position'],
            'fieldsets' => ['grid']
        ],
        'main' => [
            'label' => 'Main',
            'categories' => ['Site', 'Menu'],
            'fieldsets' => ['section', 'background', 'container', 'nav']
        ],
        'sidebar' => [
            'label' => 'Sidebar',
            'categories' => ['Site', 'Position', 'Menu'],
            'fieldsets' => ['nav', 'sidebar', 'sticky']
        ],
        'innerMainBottom' => [
            'label' => 'Inner Main Bottom',
            'categories' => ['Position'],
            'fieldsets' => ['grid']
        ],
        'outerMainBottom' => [
            'label' => 'Outer Main Bottom',
            'categories' => ['Position'],
            'fieldsets' => ['grid']
        ],
        'bottom' => [
            'label' => 'Bottom',
            'categories' => ['Position'],
            'fieldsets' => ['section', 'background', 'container', 'grid']
        ],
        'footer' => [
            'label' => 'Footer',
            'categories' => ['Site'],
            'fieldsets' => ['footer', 'subnav']
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
            'fieldsets' => ['container', 'grid', 'card', 'sidebar', 'background']
        ],
        'top' => [
            'label' => 'Defaults Top',
            'fieldsets' => ['section']
        ],
        'bottom' => [
            'label' => 'Defaults Bottom',
            'fieldsets' => ['section']
        ]
    ]

];
