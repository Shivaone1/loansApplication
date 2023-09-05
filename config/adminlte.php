<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Basant Finance',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Basant Finance ltd</b>',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Admin Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-pink elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'admin',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        // [
        //     'type'         => 'navbar-search',
        //     'text'         => 'search',
        //     'topnav_right' => true,
        // ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        // [
        //     'type' => 'sidebar-menu-search',
        //     'text' => 'search',
        // ],
       
        [
            'text'        => 'Dashboard',
            'url'         => 'admin',
            'icon'        => 'fas fa-tachometer-alt',
            
        ],
        // [
        //     'text'    => 'CRM',
        //     'icon'    => 'fas fa-fw fa-desktop',
        //     'submenu' => [
        //         [
        //             'text' => 'level_one',
        //             'url'  => '#',
        //         ],
        //         [
        //             'text' => 'level_one',
        //             'url'  => '#',
        //         ],
        //         [
        //             'text' => 'level_one',
        //             'url'  => '#',
        //         ],
        //     ],
        // ],
        [
            'text'        => 'Customer',
            'url'         => 'admin/customer',
            'icon'        => 'far fa-fw fa-user',
            
        ],
        [
            'text'      =>'Approval',
            'icon'      =>'fas fa-fw fa-share',
            'submenu'   =>[
                // [
                //     'text'        => 'Approval',
                //     'url'         => 'admin/approval',
                //     'icon'        => 'fas fa-fw fa-check',
                // ],
                
                [
                    'text'        => 'Customer Joining Approval',
                    'url'         => 'admin/customer-joining-approval',
                    'icon'        => 'fas fa-fw fa-check',
                ],
                [
                    'text'        => 'EMI Approval',
                    'url'         => 'admin/emi-approval',
                    'icon'        => 'fas fa-fw fa-credit-card',
                ],
                [
                    'text'        => 'Non Emi Approval',
                    'url'         => 'admin/non-emi-approval',
                    'icon'        => 'fas fa-fw fa-credit-card',
                ],
                [
                    'text'        => 'Payment Voucher Approval',
                    'url'         => 'admin/payment-voucher-approval',
                    'icon'        => 'fas fa-fw fa-check',
                ],
            ]
        ],
        [
            'text'    => 'Loan Section',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text'        => 'Loan Master',
                    'url'         => 'admin/loan-master',
                    'icon'        => 'fas fa-balance-scale',
                ],
                [
                    'text'        => 'Loan Interest Master',
                    'url'         => 'admin/loan-interest-master',
                    'icon'        => 'fas fa-hand-holding-usd',
                ],
                [
                    'text'        => 'Gold Loan Master',
                    'url'         => 'admin/gold-loan-master',
                    'icon'        => 'fas fa-balance-scale-right',
                ],
                [
                    'text'        => 'Loan Requisition',
                    'url'         => 'admin/loan-requisition',
                    'icon'        => 'fas fa-balance-scale-left',
                ],
                [
                    'text'        => 'Gold Loan Requisition',
                    'url'         => 'admin/gold-loan-requisition',
                    'icon'        => 'fas fa-coins',
                ],
                [
                    'text'        => 'Loan TopUp',
                    'url'         => 'admin/loan-topup',
                    'icon'        => 'fas fa-money-bill-alt',
                ],
                [
                    'text'        => 'Loan Approval',
                    'url'         => 'admin/loan-approval',
                    'icon'        => 'fas fa-check',
                ],
                [
                    'text'        => 'Loan Payment',
                    'url'         => 'admin/loan-payment',
                    'icon'        => 'fas fa-comments-dollar',
                ],
                [
                    'text'        => 'Loan Re-Payment(Advance)',
                    'url'         => 'admin/loan-re-payment-advance',
                    'icon'        => 'fas fa-comment-dollar',
                ],
                [
                    'text'        => 'Loan Re-Payment',
                    'url'         => 'admin/loan-re-payment',
                    'icon'        => 'fas fa-file-invoice-dollar',
                ],
                [
                    'text'        => 'Loan Report',
                    'url'         => 'admin/loan-report',
                    'icon'        => 'fas fa-money-bill',
                ],
                [
                    'text'        => 'Loan Search',
                    'url'         => 'admin/loan-search',
                    'icon'        => 'fas fa-search',
                ],
                [
                    'text'        => 'Loan Document Print',
                    'url'         => 'admin/loan-document-print',
                    'icon'        => 'fas fa-print',
                ],
                [
                    'text'        => 'Loan TopUp Approval',
                    'url'         => 'admin/loan-topup-approval',
                    'icon'        => 'fas fa-money-check-alt',
                ],
                [
                    'text'        => 'Loan Account Status',
                    'url'         => 'admin/loan-account-status',
                    'icon'        => 'fas fa-wallet',
                ],
                
               ]
            ],
       
        [
                'text'  => 'Accounts',
                'icon'  => 'fas fa-fw fa-share',
                'submenu' =>[
                       
                        [
                            'text'        => 'Financial Year Master',
                            'url'         => 'admin/financial-year-master',
                            'icon'        => 'fas fa-chart-line',
                        ],
                        [
                            'text'        => 'Account Group Master',
                            'url'         => 'admin/account-group-master',
                            'icon'        => 'fas fa-fw fa-users',
                        ],
                        [
                            'text'        => 'Account Ledger Master',
                            'url'         => 'admin/account-ledger-master',
                            'icon'        => 'fas fa-street-view',
                        ],
                        [
                            'text'        => 'Bank Account Master',
                            'url'         => 'admin/bank-account-master',
                            'icon'        => 'fas fa-cash-register',
                        ],
                        [
                            'text'        => 'Payment Voucher Entry',
                            'url'         => 'admin/payment-voucher-entry',
                            'icon'        => 'fas fa-file-invoice',
                        ],
                        [
                            'text'        => 'Receive Voucher Entry',
                            'url'         => 'admin/receive-voucher-entry',
                            'icon'        => 'fas fa-receipt',
                        ],
                        [
                            'text'        => 'Journal Voucher Entry',
                            'url'         => 'admin/journal-voucher-entry',
                            'icon'        => 'fas fa-file-invoice',
                        ],
                        [
                            'text'        => 'Contra Voucher Entry',
                            'url'         => 'admin/contra-voucher-entry',
                            'icon'        => 'fas fa-landmark',
                        ],
                        [
                            'text'        => 'Bank Deposit Entry',
                            'url'         => 'admin/bank-deposit-entry',
                            'icon'        => 'fas fa-file-invoice',
                        ],
                        [
                            'text'        => 'Bank Withdrawal Entry',
                            'url'         => 'admin/bank-withdrawal-entry',
                            'icon'        => 'fa-li fa fa-file-alt',
                        ],
                        [
                            'text'        => 'Fund Transfer',
                            'url'         => 'admin/fund-transfer',
                            'icon'        => 'fas fa-hand-holding-usd',
                        ],
                        [
                            'text'        => 'Fund Receive',
                            'url'         => 'admin/fund-receive',
                            'icon'        => 'fas fa-comment-dollar',
                        ],
                        [
                            'text'        => 'Cash Book(RP Statement)',
                            'url'         => 'admin/cash-book',
                            'icon'        => 'fas fa-file-invoice-dollar',
                        ],
                        [
                            'text'        => 'Day Book',
                            'url'         => 'admin/day-book',
                            'icon'        => 'fas fa-book',
                        ],
                        [
                            'text'        => 'Bank Book',
                            'url'         => 'admin/bank-book',
                            'icon'        => 'fas fa-book',
                        ],
                        [
                            'text'        => 'Journal Entry Report',
                            'url'         => 'admin/journal-entry-report',
                            'icon'        => 'fas fa-chart-pie',
                        ],
                        [
                            'text'        => 'Ledger Report',
                            'url'         => 'admin/ledger/report',
                            'icon'        => 'fas fa-receipt',
                        ],
                        [
                            'text'        => 'Profit And Loss',
                            'url'         => 'admin/profit-and-loss',
                            'icon'        => 'fas fa-file-invoice',
                        ],
                        [
                            'text'        => 'Balance Sheet(FYear)',
                            'url'         => 'admin/balance-sheet-fyear',
                            'icon'        => 'fas fa-money-bill-wave',
                        ],
                        [
                            'text'        => 'User Activity Report',
                            'url'         => 'admin/user-activity-report',
                            'icon'        => 'fas fa-stamp',
                        ],
                        [
                            'text'        => 'Trial Balance(FYear)',
                            'url'         => 'admin/trial-balance-fyear',
                            'icon'        => 'fas fa-wallet',
                        ],
                        [
                            'text'        => 'Accounts',
                            'url'         => 'admin/account',
                            'icon'        => 'fas fa-fw fa-user-alt',
                        ],
                ]
        ],
        [
            'text'        => 'Modification',
            'icon'      =>'fas fa-fw fa-share',
            'submenu'   =>[
                [
                    'text'        => 'Member Modification',
                    'url'         => 'admin/member-modification',
                    'icon'        => 'fas fa-fw fa-user-alt',
                ],
                [
                    'text'        => 'Loan Entry Modification',
                    'url'         => 'admin/loan-entry-modification',
                    'icon'        => 'fa fa-pencil-alt',
                ],
                [
                    'text'        => 'Gold Loan Modification',
                    'url'         => 'admin/gold-loan-modification',
                    'icon'        => 'fas fa-hand-holding-usd',
                ],
                [
                    'text'        => 'Cheque Clear Section',
                    'url'         => 'admin/cheque-clear-section',
                    'icon'        => 'fa fa-paper-plane',
                ],
            ]
        ],
        [
            'text'        => 'Master',
            'url'         => 'admin/master',
            'icon'        => 'fas fa-fw fa-coins',
            
        ],
        // [
        //     'text'        => 'Services',
        //     'url'         => 'admin/services',
        //     'icon'        => 'fas fa-fw fa-coins',
            
        // ],
        // [
        //     'text'        => 'page 2',
        //     'url'         => 'admin/page2',
        //     'icon'        => 'far fa-fw fa-star',
            
        // ],
                
        // ['header' => 'account_settings'],
        // [
        //     'text' => 'profile',
        //     'url'  => 'admin/profile',
        //     'icon' => 'fas fa-fw fa-user',
        // ],
        // [
        //     'text' => 'change_password',
        //     'url'  => 'admin/settings',
        //     'icon' => 'fas fa-fw fa-lock',
        // ],
        // [
        //     'text'    => 'multilevel',
        //     'icon'    => 'fas fa-fw fa-share',
        //     'submenu' => [
        //         [
        //             'text' => 'level_one',
        //             'url'  => '#',
        //         ],
        //         [
        //             'text'    => 'level_one',
        //             'url'     => '#',
        //             'submenu' => [
        //                 [
        //                     'text' => 'level_two',
        //                     'url'  => '#',
        //                 ],
        //                 [
        //                     'text'    => 'level_two',
        //                     'url'     => '#',
        //                     'submenu' => [
        //                         [
        //                             'text' => 'level_three',
        //                             'url'  => '#',
        //                         ],
        //                         [
        //                             'text' => 'level_three',
        //                             'url'  => '#',
        //                         ],
        //                     ],
        //                 ],
        //             ],
        //         ],
        //         [
        //             'text' => 'level_one',
        //             'url'  => '#',
        //         ],
        //     ],
        // ],
        // ['header' => 'labels'],
        // [
        //     'text'       => 'important',
        //     'icon_color' => 'red',
        //     'url'        => '#',
        // ],
        // [
        //     'text'       => 'warning',
        //     'icon_color' => 'yellow',
        //     'url'        => '#',
        // ],
        // [
        //     'text'       => 'information',
        //     'icon_color' => 'cyan',
        //     'url'        => '#',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
