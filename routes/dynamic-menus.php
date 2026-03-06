<?php

use Illuminate\Support\Facades\Route;

$configs = [
    'menus.custom',
    'menus.layouts',
    'menus.crud',
    'menus.features',
];

Route::middleware(['auth'])->group(function () use ($configs) {
    foreach ($configs as $config) {
        $menus = config($config);

        if (is_array($menus)) {
            foreach ($menus as $items) {
                $register = function ($items) use (&$register) {
                    foreach ($items as $item) {
                        if (!empty($item['submenu'])) {
                            $register($item['submenu']);
                        }

                        if (isset($item['route'])) {
                            $uri  = ltrim($item['route'], '/');
                            $name = str_replace('/', '.', $uri);
                            $view = 'pages.' . str_replace('/', '.', $uri);

                            if (view()->exists($view)) {
                                Route::view($uri, $view)->name($name);
                            } else {
                                Route::view($uri, 'coming-soon')->name($name);
                            }
                        }
                    }
                };
                $register($items['submenu'] ?? []);
            }
        }
    }
});
