## Hi there 👋

<div id="header" align="center">
  <img src="https://media.giphy.com/media/M9gbBd9nbDrOTu1Mqx/giphy.gif" width="100"/>
  <br>
  <img src="https://readme-typing-svg.herokuapp.com/?font=Righteous&size=35&center=true&vCenter=true&width=500&height=70&duration=4000&lines=Hi+There!+👋;+I'm+Abdoel+Madjid!;" />
</div>
<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

<div align="center">
  
[![GitHub WidgetBox](https://github-widgetbox.vercel.app/api/profile?username=abdoelmadjid&data=followers,repositories,stars,commits&theme=viridescent)](https://github.com/abdoelmadjid)
<!-- <h3 align ="center"> <strong> Let`s Code.Build & FUN </strong> </h3>  -->

![](https://komarev.com/ghpvc/?username=abdoelmadjid&color=brightgreen&style=for-the-badge)
[![LinkedIn](https://img.shields.io/badge/linkedin-%230077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/abdoelmadjid/)
[![Gmail](https://img.shields.io/badge/%20-Send%20Mail-black?color=14171A&labelColor=ef5350&logo=gmail&logoColor=ffffff&style=for-the-badge)](mailto:abdulmadjid.mpd@gmail.com)
[![Facebook](https://img.shields.io/badge/Facebook-%231877F2.svg?style=for-the-badge&logo=Facebook&logoColor=white)](https://facebook.com/abdulmadjid.mpd)
[![Twitter](https://img.shields.io/badge/Twitter-%231DA1F2.svg?style=for-the-badge&logo=Twitter&logoColor=white)](https://x.com/AbdoelMadjid)
[![Instagram](https://img.shields.io/badge/Instagram-%405DE6.svg?style=for-the-badge&logo=Instagram&logoColor=white)](https://www.instagram.com/abdoelmadjid)

</div>

<br/>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<br />
<br />
<div align="center">
<p align="center">
    <a href="https://preview.keenthemes.com/metronic/demo1/index.html" target="_blank"><img src="https://github.com/AbdoelMadjid/sakola-repalogic/blob/main/public/assets/media/logos/default.svg" width="400" alt="Metronic Logo">
    </a>
</p>
</div>

<a id="readme-top"></a>

## About The Project

Configure the Metronic 2020 ext .HTML admin template to Laravel 12. By carrying out menu management using config files. and routes using dynamic routes.

## Flat Form

- <a href="https://www.php.net/releases/8_2_3.php" target="_blank">PHP v8.2.3</a>
- <a href="https://laravel.com/docs/12.x" target="_blank">Laravel v12.0</a>
- <a href="https://preview.keenthemes.com/metronic/demo1/index.html" target="_blank">Metronic v 7.2.9</a>

## Installation

```console
git clone https://github.com/AbdoelMadjid/metronic-729-laravel-12.git
```

```console
cd metronic-729-laravel-12
```

```console
composer install
```

```console
composer dump-autoload
```

```console
cp .env.example .env
```

```console
php artisan key:generate
```

```html
DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=??
DB_USERNAME=root DB_PASSWORD=
```

```console
npm install
```

```console
npm run build
```

```console
php artisan migrate --seed
```

```
Username : test@example.com
Passowrd : password
```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Route with menu reference in config array

```
<?php
// routes/dynamic-menus

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


```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Example menu in config

```
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
        'route' => 'https://preview.keenthemes.com/metronic/demo1/builder',
        'target'=> '_blank', // biar open in new tab
    ],
];

```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Menu implementation in config to blade

```
{{-- resources/views/layouts/partials/_menu.php --}}
@php
    if (! isset($config) || ! is_array($config)) {
        echo '<!-- menu-block: invalid or empty config -->';
        return;
    }

    $currentUrl = url()->current();

    $renderItems = function ($items, $depth = 0) use (&$renderItems, $currentUrl) {
        foreach ($items as $item) {
            $hasSub = ! empty($item['submenu']) && is_array($item['submenu']);
            $href   = $item['route'] ?? 'javascript:;';
            $target = $item['target'] ?? null;

            // cek active berdasarkan route/url
            $isActive = isset($item['route']) && url($item['route']) === $currentUrl;

            // cek kalau ada child yang active
            $isChildActive = false;
            if ($hasSub) {
                foreach ($item['submenu'] as $child) {
                    if ((isset($child['route']) && url($child['route']) === $currentUrl)) {
                        $isChildActive = true;
                        break;
                    }
                    // recursive scan untuk cucu
                    $stack = [$child];
                    while ($stack) {
                        $c = array_pop($stack);
                        if (isset($c['route']) && url($c['route']) === $currentUrl) {
                            $isChildActive = true;
                            break 2;
                        }
                        if (!empty($c['submenu'])) {
                            foreach ($c['submenu'] as $cc) $stack[] = $cc;
                        }
                    }
                }
            }

            $liClasses = 'menu-item';
            if ($isActive) $liClasses .= ' menu-item-active';
            if ($isChildActive) $liClasses .= ' menu-item-open menu-item-here';
            if ($hasSub) $liClasses .= ' menu-item-submenu';

            $dataToggle = $hasSub ? ' data-menu-toggle="hover"' : '';

            echo '<li class="' . $liClasses . '" aria-haspopup="true"' . $dataToggle . '>';

            $aClasses = 'menu-link' . ($hasSub ? ' menu-toggle' : '');
            $targetAttr = $target ? ' target="' . e($target) . '"' : '';

            echo '<a href="' . e($href) . '" class="' . $aClasses . '"' . $targetAttr . '>';

            // Icon khusus depth 0
            if ($depth === 0 && ! empty($item['icon'])) {
                echo '<span class="svg-icon menu-icon">';
                echo svg_icon($item['icon'], 'svg-icon svg-icon-2x');
                echo '</span>';
            }

            // Bullet mulai depth >= 1
            if ($depth > 0) {
                $bulletType = $depth % 2 === 1 ? 'line' : 'dot';
                echo '<i class="menu-bullet menu-bullet-' . $bulletType . '"><span></span></i>';
            }

            echo '<span class="menu-text">' . e($item['title']) . '</span>';

            if (isset($item['label'])) {
                if (is_array($item['label'])) {
                    $labText = $item['label']['text'] ?? '';
                    $labClass = $item['label']['class'] ?? 'label label-rounded label-primary';
                } else {
                    $labText = (string) $item['label'];
                    $labClass = 'label label-rounded label-primary';
                }
                echo '<span class="menu-label"><span class="' . e($labClass) . '">' . e($labText) . '</span></span>';
            }

            if ($hasSub) {
                echo '<i class="menu-arrow"></i>';
            }

            echo '</a>';

            if ($hasSub) {
                echo '<div class="menu-submenu"><i class="menu-arrow"></i><ul class="menu-subnav">';

                if ($depth === 0) {
                    echo '<li class="menu-item menu-item-parent" aria-haspopup="true">';
                    echo '<span class="menu-link"><span class="menu-text">' . e($item['title']) . '</span></span>';
                    echo '</li>';
                }

                $renderItems($item['submenu'], $depth + 1);

                echo '</ul></div>';
            }

            echo '</li>';
        }
    };
@endphp

@if (! empty($sectionTitle))
    <li class="menu-section">
        <h4 class="menu-text">{{ $sectionTitle }}</h4>
        <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
    </li>
@endif

@php
    $renderItems($config, 0);
@endphp


```

```
    @include('layouts._menu', [
        'config' => config('menus.custom'),
        'sectionTitle' => 'Custom',
    ])

    @include('layouts._menu', [
        'config' => config('menus.layouts'),
        'sectionTitle' => 'Layouts',
    ])

    @include('layouts._menu', [
        'config' => config('menus.crud'),
        'sectionTitle' => 'Crud',
    ])

    @include('layouts._menu', [
        'config' => config('menus.features'),
        'sectionTitle' => 'Features',
    ])
```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Extends

```
// resources/views/layouts/_index.blade.php

<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title>{{ trim($__env->yieldContent('title')) ?: getPageTitle() }} | Metronic2022-Larvel12</title>
    <meta name="description"
        content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    @yield('styles')
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

    <base href="{{ url('/') }}/">
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    @include('layouts._kt_header_mobile')
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                @include('layouts._kt_brand')
                <!--end::Brand-->
                <!--begin::Aside Menu-->
                <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                    <!--begin::Menu Container-->
                    @include('layouts._kt_aside_menu')
                    <!--end::Menu Container-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                @include('layouts._kt_header')
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    @yield('kt_subheader')
                    <!--end::Subheader-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        @yield('content')
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                @include('layouts._kt_footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    @include('layouts._kt_panel')

    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>

    @include('layouts._kt_global_script')

    @yield('scripts')

    <script>
        // Mencegah semua href="#" reload page karena <base>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a[href="#"]').forEach(function(el) {
                el.addEventListener('click', function(e) {
                    e.preventDefault();
                });
            });
        });
    </script>
</body>
<!--end::Body-->

</html>


```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Dynamic title

with helpers

```
<?php
// apps/Helpers/MenuTitleHepler.php

use Illuminate\Support\Facades\Request;

if (! function_exists('getPageTitle')) {
    function getPageTitle(): string
    {
        $configs = [
            'menus.custom',
            'menus.layouts',
            'menus.crud',
            'menus.features',
        ];

        // dapatkan current path (tanpa query string)
        $currentPath = '/' . ltrim(Request::path(), '/');

        foreach ($configs as $config) {
            $menus = config($config);
            if (is_array($menus)) {
                foreach ($menus as $items) {
                    $title = searchMenuTitle($items['submenu'] ?? [], $currentPath);
                    if ($title) {
                        return $title;
                    }
                }
            }
        }

        // fallback
        return config('app.name', 'Metronic 2020');
    }
}

if (! function_exists('searchMenuTitle')) {
    function searchMenuTitle(array $items, string $currentPath): ?string
    {
        foreach ($items as $item) {
            if (isset($item['route']) && $item['route'] === $currentPath) {
                return $item['title'] ?? null;
            }

            if (!empty($item['submenu'])) {
                $found = searchMenuTitle($item['submenu'], $currentPath);
                if ($found) {
                    return $found;
                }
            }
        }
        return null;
    }
}

```

implementasion

```
<title>{{ trim($__env->yieldContent('title')) ?: getPageTitle() }} | Metronic2022-Larvel12</title>
```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Example Page

```
@extends('layouts.index')
@section('styles')
    <link href="{{ asset('assets/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('kt_subheader')
    @component('layouts._kt_subheader')
        @slot('title')
            New User
        @endslot
        @slot('other')
            <div class="d-flex align-items-center" id="kt_subheader_search">
                <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Enter user details and submit</span>
            </div>
        @endslot
        @slot('action')
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="#" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">Back</a>
                <!--end::Button-->
                <!--begin::Dropdown-->
                <div class="btn-group ml-2">
                    <button type="button" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base">Submit</button>
                    <button type="button"
                        class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu dropdown-menu-sm p-0 m-0 dropdown-menu-right">
                        <ul class="navi py-5">
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-writing"></i>
                                    </span>
                                    <span class="navi-text">Save &amp; continue</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-medical-records"></i>
                                    </span>
                                    <span class="navi-text">Save &amp; add new</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-hourglass-1"></i>
                                    </span>
                                    <span class="navi-text">Save &amp; exit</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
        @endslot
    @endcomponent
@endsection
@section('content')
    this is content
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/custom/user/add-user.js') }}"></script>
@endsection

```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Example Page Standar

```
@extends('layouts.index')
@section('kt_subheader')
    @component('layouts._kt_subheader')
        @slot('title')
            {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
        @endslot
        @slot('breadcrumb')
            @slot('li_1')
                Apps
            @endslot
            @slot('li_2')
                Profile
            @endslot
            @slot('li_3')
                Profile 1
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <div class="container">
        THIS IS CONTENT
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/pages/custom/profile/profile.js') }}"></script>
@endsection
```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
