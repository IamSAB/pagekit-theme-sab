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
        'slideshow' => 'Slideshow',
        'top' => 'Top',
        'masonry' => 'Masonry',
        'tiles' => 'Tiles',
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
        'slideshow' => [
            'label' => 'Slideshow',
            'categories' => ['Position'],
            'fieldsets' => ['slideshow']
        ],
        'masonry' => [
            'label' => 'Masonry',
            'categories' => ['Position'],
            'fieldsets' => ['section', 'background', 'container', 'masonry']
        ],
        'top' => [
            'label' => 'Top',
            'categories' => ['Position'],
            'fieldsets' => ['section', 'background', 'container', 'grid']
        ],
        'tiles' => [
            'label' => 'Tiles',
            'categories' => ['Position'],
            'fieldsets' => ['tiles']
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
            'categories' => ['Site'],
            'fieldsets' => ['section', 'background', 'container']
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
            'positions' => ['top', 'bottom', 'outerTop', 'innerTop', 'innerBottom', 'outerBottom'],
            'fieldsets' => ['gridItem', 'card']
        ],
        'tiles' => [
            'label' => 'Tile',
            'positions' => ['tiles'],
            'fieldsets' => ['tile', 'background']
        ],
        'slideshow' => [
            'label' => 'Slideshow',
            'positions' => ['slideshow'],
            'fieldsets' => ['slideshowItem', 'overlay', 'position']
        ],
        'masonry' => [
            'label' => 'Masonry',
            'positions' => ['masonry'],
            'fieldsets' => ['masonryItem', 'card']
        ],
        'cover' => [
            'label' => 'Cover',
            'positions' => ['cover'],
            'fieldsets' => ['overlay', 'position']
        ],
        'system' => [
            'label' => 'Menu',
            'types' => ['system/menu'],
            'fieldsets' => ['menu']
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
