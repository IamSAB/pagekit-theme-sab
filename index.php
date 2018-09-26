<?php

use Pagekit\Application as App;

return [

    'name' => 'theme-sab',

    'require' => 'theme-core',

    'main' => 'SAB\\Extension\\Theme\\ThemeModule',

    'theme' => [
        'menus' => [
            'navbarnav' => [
                'main' => [
                    'title' => 'Main menu',
                    'path' => 'top',
                ],
            ],
            'subnav' => [
                'foot' => [
                    'title' => 'Footer menu',
                    'path' => 'foot',
                ]
            ]
        ],
        'positions' => [
            'grid' => [
                'top' => [
                    'title' => 'Top',
                    'path' => 'top'
                ],
                'mainTop' => [
                    'title' => 'Main Top',
                    'path' => 'main/top',
                ],
                'mainBottom' => [
                    'title' => 'Main Bottom',
                    'path' => 'main/bottom',
                ],
                'bottom' => [
                    'title' => 'Bottom',
                    'path' => 'bottom',
                ],
                'footer' => [
                    'title' => 'Footer',
                    'path' => 'foot',
                ],
            ],
            'sidebar' => [
                'sidebar' => [
                    'title' => 'Sidebar',
                    'path' => 'main/sidebar',
                ],
            ]
        ],
        'node' => [
            'segment' => [
                'top' => [
                    'title' => 'Top',
                    'path' => 'top',
                ],
                'main' => [
                    'title' => 'Main',
                    'path' => 'main',
                ],
                'bottom' => [
                    'title' => 'Bottom',
                    'path' => 'bottom',
                ],
                'foot' => [
                    'title' => 'Footer',
                    'path' => 'foot',
                ],
            ]
        ],
    ]

];
