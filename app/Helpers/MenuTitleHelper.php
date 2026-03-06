<?php

use Illuminate\Support\Facades\Request;

if (! function_exists('getMenuConfigs')) {
    function getMenuConfigs(): array
    {
        return [
            'menus.custom' => 'Custom',
            'menus.layouts' => 'Layouts',
            'menus.crud' => 'Crud',
            'menus.features' => 'Features',
        ];
    }
}

if (! function_exists('getPageTitle')) {
    function getPageTitle(): string
    {
        $configs = array_keys(getMenuConfigs());

        // dapatkan current path (tanpa query string)
        $currentPath = '/' . ltrim(Request::path(), '/');

        foreach ($configs as $config) {
            $menus = config($config);
            if (is_array($menus)) {
                foreach ($menus as $items) {
                    $title = searchMenuTitle($items['submenu'] ?? [], $currentPath);
                    if ($title) {
                        return translateMenuTitle($title);
                    }
                }
            }
        }

        // fallback
        return config('app.name', 'Metronic 2020');
    }
}

if (! function_exists('getPageBreadcrumbs')) {
    function getPageBreadcrumbs(): array
    {
        $currentPath = '/' . ltrim(Request::path(), '/');

        foreach (getMenuConfigs() as $config => $sectionTitle) {
            $menus = config($config);

            if (! is_array($menus)) {
                continue;
            }

            foreach ($menus as $items) {
                $initialAncestors = [];
                if (isset($items['title']) && is_string($items['title'])) {
                    $initialAncestors[] = $items['title'];
                }

                $ancestors = searchMenuBreadcrumbAncestors($items['submenu'] ?? [], $currentPath, $initialAncestors);

                if ($ancestors !== null) {
                    $breadcrumbs = array_merge([$sectionTitle], $ancestors);

                    // Hapus duplikat berurutan agar breadcrumb tetap bersih.
                    $normalized = [];
                    foreach ($breadcrumbs as $crumb) {
                        if ($crumb === null || $crumb === '') {
                            continue;
                        }

                        if (empty($normalized) || end($normalized) !== $crumb) {
                            $normalized[] = $crumb;
                        }
                    }

                    return $normalized;
                }
            }
        }

        return [];
    }
}

if (! function_exists('searchMenuBreadcrumbAncestors')) {
    function searchMenuBreadcrumbAncestors(array $items, string $currentPath, array $ancestors = []): ?array
    {
        foreach ($items as $item) {
            $newAncestors = $ancestors;

            if (isset($item['title']) && is_string($item['title'])) {
                $newAncestors[] = $item['title'];
            }

            // Untuk breadcrumb, judul halaman aktif (leaf) tidak dimasukkan.
            if (isset($item['route']) && $item['route'] === $currentPath) {
                return $ancestors;
            }

            if (! empty($item['submenu']) && is_array($item['submenu'])) {
                $found = searchMenuBreadcrumbAncestors($item['submenu'], $currentPath, $newAncestors);

                if ($found !== null) {
                    return $found;
                }
            }
        }

        return null;
    }
}

if (! function_exists('translateMenuTitle')) {
    function translateMenuTitle(string $title): string
    {
        $menuTranslations = trans('menus');

        if (is_array($menuTranslations) && isset($menuTranslations[$title])) {
            return $menuTranslations[$title];
        }

        return $title;
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
