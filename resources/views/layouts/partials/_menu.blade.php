{{-- resources/views/layouts/_kt_menu_aside.blade.php --}}
@php
    if (!isset($config) || !is_array($config)) {
        echo '<!-- menu-block: invalid or empty config -->';
        return;
    }

    $currentUrl = url()->current();
    $menuTranslations = trans('menus');

    if (!is_array($menuTranslations)) {
        $menuTranslations = [];
    }

    $translateTitle = static function (string $title) use ($menuTranslations): string {
        return $menuTranslations[$title] ?? $title;
    };

    $renderItems = function ($items, $depth = 0) use (&$renderItems, $currentUrl, $translateTitle) {
        foreach ($items as $item) {
            $hasSub = !empty($item['submenu']) && is_array($item['submenu']);
            $href = $item['route'] ?? 'javascript:;';
            $target = $item['target'] ?? null;

            // cek active berdasarkan route/url
            $isActive = isset($item['route']) && url($item['route']) === $currentUrl;

            // cek kalau ada child yang active
            $isChildActive = false;
            if ($hasSub) {
                foreach ($item['submenu'] as $child) {
                    if (isset($child['route']) && url($child['route']) === $currentUrl) {
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
                            foreach ($c['submenu'] as $cc) {
                                $stack[] = $cc;
                            }
                        }
                    }
                }
            }

            $liClasses = 'menu-item';
            if ($isActive) {
                $liClasses .= ' menu-item-active';
            }
            if ($isChildActive) {
                $liClasses .= ' menu-item-open menu-item-here';
            }
            if ($hasSub) {
                $liClasses .= ' menu-item-submenu';
            }

            $dataToggle = $hasSub ? ' data-menu-toggle="click"' : '';

            echo '<li class="' . $liClasses . '" aria-haspopup="true"' . $dataToggle . '>';

            $aClasses = 'menu-link' . ($hasSub ? ' menu-toggle' : '');
            $targetAttr = $target ? ' target="' . e($target) . '"' : '';

            echo '<a href="' . e($href) . '" class="' . $aClasses . '"' . $targetAttr . '>';

            // Icon khusus depth 0
            if ($depth === 0 && !empty($item['icon'])) {
                echo '<span class="svg-icon menu-icon">';
                echo svg_icon($item['icon'], 'svg-icon svg-icon-2x');
                echo '</span>';
            }

            // Bullet mulai depth >= 1
            if ($depth > 0) {
                $bulletType = $depth % 2 === 1 ? 'line' : 'dot';
                echo '<i class="menu-bullet menu-bullet-' . $bulletType . '"><span></span></i>';
            }

            echo '<span class="menu-text">' . e($translateTitle($item['title'])) . '</span>';

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
                    echo '<span class="menu-link"><span class="menu-text">' . e($translateTitle($item['title'])) . '</span></span>';
                    echo '</li>';
                }

                $renderItems($item['submenu'], $depth + 1);

                echo '</ul></div>';
            }

            echo '</li>';
        }
    };
@endphp

@if (!empty($sectionTitle))
    <li class="menu-section">
        <h4 class="menu-text">{{ $sectionTitle }}</h4>
        <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
    </li>
@endif

@php
    $renderItems($config, 0);
@endphp
