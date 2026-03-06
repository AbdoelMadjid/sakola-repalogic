<?php
// config/menus/applications.php

return [
    [
        'title'   => 'Applications',
        'icon'    => 'Layout/Layout-4-blocks', // path relatif di assets/media/svg/icons/<this>.svg
        'submenu' => [
            [
                'title'   => 'Users',
                'label'   => 6,
                'submenu' => [
                    ['title' => 'List - Default',   'route' => '/custom/apps/user/list-default'],
                    ['title' => 'List - Datatable', 'route' => '/custom/apps/user/list-datatable'],
                    ['title' => 'List - Columns 1', 'route' => '/custom/apps/user/list-columns-1'],
                    ['title' => 'List - Columns 2', 'route' => '/custom/apps/user/list-columns-2'],
                    ['title' => 'Add User',         'route' => '/custom/apps/user/add-user'],
                    ['title' => 'Edit User',        'route' => '/custom/apps/user/edit-user'],
                ],
            ],
            [
                'title'   => 'Profile',
                'submenu' => [
                    [
                        'title'   => 'Profile 1',
                        'submenu' => [
                            ['title' => 'Overview',             'route' => '/custom/apps/profile/profile-1/overview'],
                            ['title' => 'Personal Information', 'route' => '/custom/apps/profile/profile-1/personal-information'],
                            ['title' => 'Account Information',  'route' => '/custom/apps/profile/profile-1/account-information'],
                            ['title' => 'Change Password',      'route' => '/custom/apps/profile/profile-1/change-password'],
                            ['title' => 'Email Settings',       'route' => '/custom/apps/profile/profile-1/email-settings'],
                        ],
                    ],
                    ['title' => 'Profile 2', 'route' => '/custom/apps/profile/profile-2'],
                    ['title' => 'Profile 3', 'route' => '/custom/apps/profile/profile-3'],
                    ['title' => 'Profile 4', 'route' => '/custom/apps/profile/profile-4'],
                ],
            ],
            [
                'title'   => 'Contacts',
                'submenu' => [
                    ['title' => 'List - Columns',   'route' => '/custom/apps/contacts/list-columns'],
                    ['title' => 'List - Datatable', 'route' => '/custom/apps/contacts/list-datatable'],
                    ['title' => 'View Contact',     'route' => '/custom/apps/contacts/view-contact'],
                    ['title' => 'Add Contact',      'route' => '/custom/apps/contacts/add-contact'],
                    ['title' => 'Edit Contact',     'route' => '/custom/apps/contacts/edit-contact'],
                ],
            ],
            [
                'title'   => 'Projects',
                'submenu' => [
                    ['title' => 'List - Columns 1', 'route' => '/custom/apps/projects/list-columns-1'],
                    ['title' => 'List - Columns 2', 'route' => '/custom/apps/projects/list-columns-2'],
                    ['title' => 'List - Columns 3', 'route' => '/custom/apps/projects/list-columns-3'],
                    ['title' => 'List - Columns 4', 'route' => '/custom/apps/projects/list-columns-4'],
                    ['title' => 'List - Datatable', 'route' => '/custom/apps/projects/list-datatable'],
                    ['title' => 'View Project',     'route' => '/custom/apps/projects/view-project'],
                    ['title' => 'Add Project',      'route' => '/custom/apps/projects/add-project'],
                    ['title' => 'Edit Project',     'route' => '/custom/apps/projects/edit-project'],
                ],
            ],
            [
                'title'   => 'Support Center',
                'submenu' => [
                    ['title' => 'Home 1',     'route' => '/custom/apps/support-center/home-1'],
                    ['title' => 'Home 2',     'route' => '/custom/apps/support-center/home-2'],
                    ['title' => 'FAQ 1',      'route' => '/custom/apps/support-center/faq-1'],
                    ['title' => 'FAQ 2',      'route' => '/custom/apps/support-center/faq-2'],
                    ['title' => 'FAQ 3',      'route' => '/custom/apps/support-center/faq-3'],
                    ['title' => 'Feedback',   'route' => '/custom/apps/support-center/feedback'],
                    ['title' => 'License',    'route' => '/custom/apps/support-center/license'],
                ],
            ],
            [
                'title'   => 'Chat',
                'submenu' => [
                    ['title' => 'Private', 'route' => '/custom/apps/chat/private'],
                    ['title' => 'Group',   'route' => '/custom/apps/chat/group'],
                    ['title' => 'Popup',   'route' => '/custom/apps/chat/popup'],
                ],
            ],
            [
                'title'   => 'Todo',
                'submenu' => [
                    ['title' => 'Tasks', 'route' => '/custom/apps/todo/tasks'],
                    ['title' => 'Docs',  'route' => '/custom/apps/todo/docs'],
                    ['title' => 'Files', 'route' => '/custom/apps/todo/files'],
                ],
            ],
            [
                'title'   => 'Education',
                'submenu' => [
                    [
                        'title'   => 'School',
                        'submenu' => [
                            ['title' => 'Dashboard',  'route' => '/custom/apps/education/school/dashboard'],
                            ['title' => 'Statistics', 'route' => '/custom/apps/education/school/statistics'],
                            ['title' => 'Calendar',   'route' => '/custom/apps/education/school/calendar'],
                            ['title' => 'Library',    'route' => '/custom/apps/education/school/library'],
                            ['title' => 'Teachers',   'route' => '/custom/apps/education/school/teachers'],
                            ['title' => 'Students',   'route' => '/custom/apps/education/school/students'],
                        ],
                    ],
                    [
                        'title'   => 'Student',
                        'submenu' => [
                            ['title' => 'Dashboard',  'route' => '/custom/apps/education/student/dashboard'],
                            ['title' => 'Profile',    'route' => '/custom/apps/education/student/profile'],
                            ['title' => 'Calendar',   'route' => '/custom/apps/education/student/calendar'],
                            ['title' => 'Classmates', 'route' => '/custom/apps/education/student/classmates'],
                        ],
                    ],
                    ['title' => 'Class', 'route' => '/custom/apps/education/class/dashboard'],
                ],
            ],
            [
                'title'   => 'eCommerce',
                'submenu' => [
                    ['title' => 'Dashboard 1',   'route' => '/custom/apps/ecommerce/dashboard'],
                    ['title' => 'Dashboard 2',   'route' => '/custom/apps/ecommerce/dashboard-2'],
                    ['title' => 'Dashboard 3',   'route' => '/custom/apps/ecommerce/dashboard-3'],
                    ['title' => 'Dashboard 4',   'route' => '/custom/apps/ecommerce/dashboard-4'],
                    ['title' => 'Dashboard 5',   'route' => '/custom/apps/ecommerce/dashboard-5'],
                    ['title' => 'My Orders',     'route' => '/custom/apps/ecommerce/my-orders'],
                    ['title' => 'Order Details', 'route' => '/custom/apps/ecommerce/order-details'],
                    ['title' => 'Shopping Cart', 'route' => '/custom/apps/ecommerce/shopping-cart'],
                    ['title' => 'Checkout',      'route' => '/custom/apps/ecommerce/checkout'],
                ],
            ],
            [
                'title' => 'Inbox',
                'route' => '/custom/apps/inbox',
                'label' => ['text' => 'new', 'class' => 'label label-danger label-inline'],
            ],
        ],
    ],
    [
        'title' => 'Pages',
        'icon'  => 'Shopping/Barcode-read', // path relatif: assets/media/svg/icons/Shopping/Barcode-read.svg
        'submenu' => [
            [
                'title' => 'Login',
                'submenu' => [
                    ['title' => 'Login 1', 'route' => '/custom/pages/login/login-1', 'target'=> '_blank'],
                    ['title' => 'Login 2', 'route' => '/custom/pages/login/login-2', 'target'=> '_blank'],
                    [
                        'title' => 'Login 3',
                        'label' => ['text' => 'Wizard', 'class' => 'label label-inline label-info'],
                        'submenu' => [
                            ['title' => 'Sign Up',          'route' => '/custom/pages/login/login-3/signup', 'target'=> '_blank'],
                            ['title' => 'Sign In',          'route' => '/custom/pages/login/login-3/signin', 'target'=> '_blank'],
                            ['title' => 'Forgot Password',  'route' => '/custom/pages/login/login-3/forgot', 'target'=> '_blank'],
                        ],
                    ],
                    [
                        'title' => 'Login 4',
                        'label' => ['text' => 'Wizard', 'class' => 'label label-inline label-info'],
                        'submenu' => [
                            ['title' => 'Sign Up',          'route' => '/custom/pages/login/login-4/signup', 'target'=> '_blank'],
                            ['title' => 'Sign In',          'route' => '/custom/pages/login/login-4/signin', 'target'=> '_blank'],
                            ['title' => 'Forgot Password',  'route' => '/custom/pages/login/login-4/forgot', 'target'=> '_blank'],
                        ],
                    ],
                    [
                        'title' => 'Classic',
                        'submenu' => [
                            ['title' => 'Login 1', 'route' => '/custom/pages/login/classic/login-1', 'target'=> '_blank'],
                            ['title' => 'Login 2', 'route' => '/custom/pages/login/classic/login-2', 'target'=> '_blank'],
                            ['title' => 'Login 3', 'route' => '/custom/pages/login/classic/login-3', 'target'=> '_blank'],
                            ['title' => 'Login 4', 'route' => '/custom/pages/login/classic/login-4', 'target'=> '_blank'],
                            ['title' => 'Login 5', 'route' => '/custom/pages/login/classic/login-5', 'target'=> '_blank'],
                            ['title' => 'Login 6', 'route' => '/custom/pages/login/classic/login-6', 'target'=> '_blank'],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Wizard',
                'submenu' => [
                    ['title' => 'Wizard 1', 'route' => '/custom/pages/wizard/wizard-1'],
                    ['title' => 'Wizard 2', 'route' => '/custom/pages/wizard/wizard-2'],
                    ['title' => 'Wizard 3', 'route' => '/custom/pages/wizard/wizard-3'],
                    ['title' => 'Wizard 4', 'route' => '/custom/pages/wizard/wizard-4'],
                    ['title' => 'Wizard 5', 'route' => '/custom/pages/wizard/wizard-5'],
                    ['title' => 'Wizard 6', 'route' => '/custom/pages/wizard/wizard-6'],
                ],
            ],
            [
                'title' => 'Pricing Tables',
                'submenu' => [
                    ['title' => 'Pricing Tables 1', 'route' => '/custom/pages/pricing/pricing-1'],
                    ['title' => 'Pricing Tables 2', 'route' => '/custom/pages/pricing/pricing-2'],
                    ['title' => 'Pricing Tables 3', 'route' => '/custom/pages/pricing/pricing-3'],
                    ['title' => 'Pricing Tables 4', 'route' => '/custom/pages/pricing/pricing-4'],
                ],
            ],
            [
                'title' => 'Invoices',
                'submenu' => [
                    ['title' => 'Invoice 1', 'route' => '/custom/pages/invoices/invoice-1'],
                    ['title' => 'Invoice 2', 'route' => '/custom/pages/invoices/invoice-2'],
                    ['title' => 'Invoice 3', 'route' => '/custom/pages/invoices/invoice-3'],
                    ['title' => 'Invoice 4', 'route' => '/custom/pages/invoices/invoice-4'],
                    ['title' => 'Invoice 5', 'route' => '/custom/pages/invoices/invoice-5'],
                    ['title' => 'Invoice 6', 'route' => '/custom/pages/invoices/invoice-6'],
                ],
            ],
            [
                'title' => 'Error',
                'submenu' => [
                    ['title' => 'Error 1', 'route' => '/custom/pages/error/error-1', 'target'=> '_blank'],
                    ['title' => 'Error 2', 'route' => '/custom/pages/error/error-2', 'target'=> '_blank'],
                    ['title' => 'Error 3', 'route' => '/custom/pages/error/error-3', 'target'=> '_blank'],
                    ['title' => 'Error 4', 'route' => '/custom/pages/error/error-4', 'target'=> '_blank'],
                    ['title' => 'Error 5', 'route' => '/custom/pages/error/error-5', 'target'=> '_blank'],
                    ['title' => 'Error 6', 'route' => '/custom/pages/error/error-6', 'target'=> '_blank'],
                ],
            ],
        ],
    ],
    [
        'title' => 'Help',
        'icon'  => 'Code/Compiling',
        'submenu' => [
            [
                'title' => 'Logika Route',
                'route' => '/help/logika-route',
            ],
            [
                'title' => 'Logika Bilingual',
                'route' => '/help/logika-bilingual',
            ],
        ],
    ],
];
