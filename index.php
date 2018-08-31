<?php

use Pagekit\Application;
use SAB\Extension\Theme\Helper\ThemeHelper;
use SAB\Extension\Theme\Helper\ThemeConfigurator;

return [

    'name' => 'theme-sab',

    'require' => 'theme-core',

    'menus' => [
        'main' => 'Main',
        'footer' => 'Footer'
    ],

    'main' => function (Application $app) {
        $c = new ThemeConfigurator($this);
        $c->addPositions([
            'TopA' => 'Top A',
            'TopB' => 'Top B',
            'Sidebar' => ['Sidebar', false],
            'MainTop' => 'Main Top',
            'MainBottom' => 'Main Bottom',
            'BottomA' => 'Bottom A',
            'BottomB' => 'Bottom B',
            'Foot' => 'Footer'
        ]);
        $c->addSectionOptions(['TopA','TopB','Main','BottomA','BottomB','Foot']);
        $c->addWidgetOption();
    },

    'events' => [

        'view.init' => function ($event, $view) use ($app) {
            $view->addHelper(new ThemeHelper());
        },

        // 'view.system/site/admin/settings' => function ($event, $view) use ($app) {
        //     $view->script('site-setting-theme', 'theme:app/bundle/SiteSettingTheme.js', 'site-settings');
        //     $view->data('$theme', $this);
        // },

        'view.system/site/admin/edit' => function ($event, $view) {
            $view->script('site-node-theme', 'theme:app/bundle/node-theme.js', 'site-edit');
        },

        'view.system/widget/edit' => function ($event, $view) {
            $view->script('site-widget-theme', 'theme:app/bundle/widget-theme.js', 'widget-edit');
        }

    ],

];
