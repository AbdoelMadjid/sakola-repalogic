<?php
// config/menus/layouts.php

return [
    [
        'title' => 'Themes',
        'icon'  => 'Design/Bucket',
        'submenu' => [
            [
                'title' => 'Light Aside',
                'route' => '/layout/themes/aside-light',
            ],
            [
                'title' => 'Dark Header',
                'route' => '/layout/themes/header-dark',
            ],
        ],
    ],
    [
        'title' => 'Subheaders',
        'icon'  => 'Code/Compiling',
        'submenu' => [
            ['title' => 'Toolbar Nav',    'route' => '/layout/subheader/toolbar'],
            ['title' => 'Actions Buttons','route' => '/layout/subheader/actions'],
            ['title' => 'Tabbed Nav',     'route' => '/layout/subheader/tabbed'],
            ['title' => 'Classic',        'route' => '/layout/subheader/classic'],
            ['title' => 'None',           'route' => '/layout/subheader/none'],
        ],
    ],
    [
        'title' => 'General',
        'icon'  => 'General/Settings-1',
        'submenu' => [
            ['title' => 'Fluid Content',   'route' => '/layout/general/fluid-content'],
            ['title' => 'Minimized Aside', 'route' => '/layout/general/minimized-aside'],
            ['title' => 'No Aside',        'route' => '/layout/general/no-aside'],
            ['title' => 'Empty Page',      'route' => '/layout/general/empty-page'],
            ['title' => 'Fixed Footer',    'route' => '/layout/general/fixed-footer'],
            ['title' => 'No Header Menu',  'route' => '/layout/general/no-header-menu'],
        ],
    ],
    [
        'title' => 'Builder',
        'icon'  => 'Home/Library',
        'route' => 'https://preview.keenthemes.com/metronic/demo1/builder.html',
        'target'=> '_blank', // biar open in new tab
    ],
];
