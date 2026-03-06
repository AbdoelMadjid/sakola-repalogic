<?php

if (function_exists('svg_icon') === false) {
    function svg_icon($path, $class = 'svg-icon menu-icon')
    {
        $file = public_path('assets/media/svg/icons/' . $path . '.svg');

        if (file_exists($file)) {
            $svg = file_get_contents($file);

            // tambahkan class kalau belum ada
            if (strpos($svg, 'class=') === false) {
                $svg = str_replace('<svg', '<svg class="' . $class . '"', $svg);
            }

            return $svg;
        }

        return '<!-- missing: ' . $path . ' -->';
    }
}
