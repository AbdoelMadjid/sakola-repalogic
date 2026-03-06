<?php
// config/menus/forms.php

return [
    [
        'title' => 'Forms',
        'icon'  => 'Design/PenAndRuller',
        'submenu' => [
            [
                'title' => 'Form Controls',
                'submenu' => [
                    ['title' => 'Base Inputs',     'route' => '/crud/forms/controls/base'],
                    ['title' => 'Input Groups',    'route' => '/crud/forms/controls/input-group'],
                    ['title' => 'Checkbox',        'route' => '/crud/forms/controls/checkbox'],
                    ['title' => 'Radio',           'route' => '/crud/forms/controls/radio'],
                    ['title' => 'Switch',          'route' => '/crud/forms/controls/switch'],
                    ['title' => 'Mega Options',    'route' => '/crud/forms/controls/option'],
                ],
            ],
            [
                'title' => 'Form Widgets',
                'submenu' => [
                    ['title' => 'Datetimepicker',          'route' => '/crud/forms/widgets/bootstrap-datetimepicker'],
                    ['title' => 'Datepicker',              'route' => '/crud/forms/widgets/bootstrap-datepicker'],
                    ['title' => 'Timepicker',              'route' => '/crud/forms/widgets/bootstrap-timepicker'],
                    ['title' => 'Daterangepicker',         'route' => '/crud/forms/widgets/bootstrap-daterangepicker'],
                    ['title' => 'Tagify',                  'route' => '/crud/forms/widgets/tagify'],
                    ['title' => 'Touchspin',               'route' => '/crud/forms/widgets/bootstrap-touchspin'],
                    ['title' => 'Maxlength',               'route' => '/crud/forms/widgets/bootstrap-maxlength'],
                    ['title' => 'Switch',                  'route' => '/crud/forms/widgets/bootstrap-switch'],
                    ['title' => 'Multiple Select Splitter','route' => '/crud/forms/widgets/bootstrap-multipleselectsplitter'],
                    ['title' => 'Bootstrap Select',        'route' => '/crud/forms/widgets/bootstrap-select'],
                    ['title' => 'Select2',                 'route' => '/crud/forms/widgets/select2'],
                    ['title' => 'Typeahead',               'route' => '/crud/forms/widgets/typeahead'],
                    ['title' => 'noUiSlider',              'route' => '/crud/forms/widgets/nouislider'],
                    ['title' => 'Form Repeater',           'route' => '/crud/forms/widgets/form-repeater'],
                    ['title' => 'Ion Range Slider',        'route' => '/crud/forms/widgets/ion-range-slider'],
                    ['title' => 'Input Masks',             'route' => '/crud/forms/widgets/input-mask'],
                    ['title' => 'jQuery Mask',             'route' => '/crud/forms/widgets/jquery-mask'],
                    ['title' => 'Autosize',                'route' => '/crud/forms/widgets/autosize'],
                    ['title' => 'Clipboard',               'route' => '/crud/forms/widgets/clipboard'],
                    ['title' => 'Google reCaptcha',        'route' => '/crud/forms/widgets/recaptcha'],
                ],
            ],
            [
                'title' => 'Form Text Editors',
                'submenu' => [
                    ['title' => 'TinyMCE',                'route' => '/crud/forms/editors/tinymce'],
                    [
                        'title' => 'CKEditor',
                        'submenu' => [
                            ['title' => 'CKEditor Classic',       'route' => '/crud/forms/editors/ckeditor-classic'],
                            ['title' => 'CKEditor Inline',        'route' => '/crud/forms/editors/ckeditor-inline'],
                            ['title' => 'CKEditor Balloon',       'route' => '/crud/forms/editors/ckeditor-balloon'],
                            ['title' => 'CKEditor Balloon Block', 'route' => '/crud/forms/editors/ckeditor-balloon-block'],
                            ['title' => 'CKEditor Document',      'route' => '/crud/forms/editors/ckeditor-document'],
                        ],
                    ],
                    ['title' => 'Quill Text Editor',      'route' => '/crud/forms/editors/quill'],
                    ['title' => 'Summernote WYSIWYG',    'route' => '/crud/forms/editors/summernote'],
                    ['title' => 'Markdown Editor',       'route' => '/crud/forms/editors/bootstrap-markdown'],
                ],
            ],
            [
                'title' => 'Form Layouts',
                'submenu' => [
                    ['title' => 'Default Forms',      'route' => '/crud/forms/layouts/default-forms'],
                    ['title' => 'Multi Column Forms', 'route' => '/crud/forms/layouts/multi-column-forms'],
                    ['title' => 'Basic Action Bars',  'route' => '/crud/forms/layouts/action-bars'],
                    ['title' => 'Sticky Action Bar',  'route' => '/crud/forms/layouts/sticky-action-bar'],
                ],
            ],
            [
                'title' => 'Form Validation',
                'submenu' => [
                    ['title' => 'Validation States', 'route' => '/crud/forms/validation/states'],
                    ['title' => 'Form Controls',     'route' => '/crud/forms/validation/form-controls'],
                    ['title' => 'Form Widgets',      'route' => '/crud/forms/validation/form-widgets'],
                ],
            ],
        ],
    ],
    [
        'title' => 'KTDatatable',
        'icon'  => 'Layout/Layout-left-panel-2',
        'submenu' => [
            [
                'title' => 'Base',
                'submenu' => [
                    ['title' => 'Local Data',   'route' => '/crud/ktdatatable/base/data-local'],
                    ['title' => 'JSON Data',    'route' => '/crud/ktdatatable/base/data-json'],
                    ['title' => 'Ajax Data',    'route' => '/crud/ktdatatable/base/data-ajax'],
                    ['title' => 'HTML Table',   'route' => '/crud/ktdatatable/base/html-table'],
                    ['title' => 'Local Sort',   'route' => '/crud/ktdatatable/base/local-sort'],
                    ['title' => 'Translation',  'route' => '/crud/ktdatatable/base/translation'],
                ],
            ],
            [
                'title' => 'Advanced',
                'submenu' => [
                    ['title' => 'Record Selection',  'route' => '/crud/ktdatatable/advanced/record-selection'],
                    ['title' => 'Row Details',       'route' => '/crud/ktdatatable/advanced/row-details'],
                    ['title' => 'Modal Examples',    'route' => '/crud/ktdatatable/advanced/modal'],
                    ['title' => 'Column Rendering',  'route' => '/crud/ktdatatable/advanced/column-rendering'],
                    ['title' => 'Column Width',      'route' => '/crud/ktdatatable/advanced/column-width'],
                    ['title' => 'Vertical Scrolling','route' => '/crud/ktdatatable/advanced/vertical'],
                ],
            ],
            [
                'title' => 'Child Datatables',
                'submenu' => [
                    ['title' => 'Local Data',   'route' => '/crud/ktdatatable/child/data-local'],
                    ['title' => 'Remote Data',  'route' => '/crud/ktdatatable/child/data-ajax'],
                ],
            ],
            [
                'title' => 'API',
                'submenu' => [
                    ['title' => 'API Methods',  'route' => '/crud/ktdatatable/api/methods'],
                    ['title' => 'Events',       'route' => '/crud/ktdatatable/api/events'],
                ],
            ],
        ],
    ],
    [
        'title' => 'Datatables.net',
        'icon'  => 'Layout/Layout-horizontal',
        'submenu' => [
            [
                'title' => 'Basic',
                'submenu' => [
                    ['title' => 'Basic Tables',       'route' => '/crud/datatables/basic/basic'],
                    ['title' => 'Scrollable Tables',  'route' => '/crud/datatables/basic/scrollable'],
                    ['title' => 'Complex Headers',    'route' => '/crud/datatables/basic/headers'],
                    ['title' => 'Pagination Options', 'route' => '/crud/datatables/basic/paginations'],
                ],
            ],
            [
                'title' => 'Advanced',
                'submenu' => [
                    ['title' => 'Column Rendering',   'route' => '/crud/datatables/advanced/column-rendering'],
                    ['title' => 'Multiple Controls',  'route' => '/crud/datatables/advanced/multiple-controls'],
                    ['title' => 'Column Visibility',  'route' => '/crud/datatables/advanced/column-visibility'],
                    ['title' => 'Row Callback',       'route' => '/crud/datatables/advanced/row-callback'],
                    ['title' => 'Row Grouping',       'route' => '/crud/datatables/advanced/row-grouping'],
                    ['title' => 'Footer Callback',    'route' => '/crud/datatables/advanced/footer-callback'],
                ],
            ],
            [
                'title' => 'Data Sources',
                'submenu' => [
                    ['title' => 'HTML',              'route' => '/crud/datatables/data-sources/html'],
                    ['title' => 'Javascript',        'route' => '/crud/datatables/data-sources/javascript'],
                    ['title' => 'Ajax Client-side',  'route' => '/crud/datatables/data-sources/ajax-client-side'],
                    ['title' => 'Ajax Server-side',  'route' => '/crud/datatables/data-sources/ajax-server-side'],
                ],
            ],
            [
                'title' => 'Search Options',
                'submenu' => [
                    ['title' => 'Column Search',    'route' => '/crud/datatables/search-options/column-search'],
                    ['title' => 'Advanced Search',  'route' => '/crud/datatables/search-options/advanced-search'],
                ],
            ],
            [
                'title' => 'Extensions',
                'submenu' => [
                    ['title' => 'Buttons',     'route' => '/crud/datatables/extensions/buttons'],
                    ['title' => 'ColReorder',  'route' => '/crud/datatables/extensions/colreorder'],
                    ['title' => 'KeyTable',    'route' => '/crud/datatables/extensions/keytable'],
                    ['title' => 'Responsive',  'route' => '/crud/datatables/extensions/responsive'],
                    ['title' => 'RowGroup',    'route' => '/crud/datatables/extensions/rowgroup'],
                    ['title' => 'RowReorder',  'route' => '/crud/datatables/extensions/rowreorder'],
                    ['title' => 'Scroller',    'route' => '/crud/datatables/extensions/scroller'],
                    ['title' => 'Select',      'route' => '/crud/datatables/extensions/select'],
                ],
            ],
        ],
    ],
    [
        'title' => 'File Upload',
        'icon'  => 'Files/Upload',
        'submenu' => [
            [
                'title' => 'Image Input',
                'route' => '/crud/file-upload/image-input',
            ],
            [
                'title' => 'DropzoneJS',
                'route' => '/crud/file-upload/dropzonejs',
                'label' => [
                    'text'  => 'new',
                    'class' => 'label label-danger label-inline',
                ],
            ],
            [
                'title' => 'Uppy',
                'route' => '/crud/file-upload/uppy',
            ],
        ],
    ],
];
