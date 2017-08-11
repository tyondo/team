<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Musoni Website Views
     |--------------------------------------------------------------------------
     | The website has pre-defined view, their customization can be handled here
     |
     |
     */
    'namespace'=>'\\Tyondo\\Team\\Models\\',
    'views' => [
        'layouts' => [
            'master'        => 'tyondoTeam::layouts.admin',
        ],
        'partials' => [
            'menu' => 'tyondoTeam::partials.front-end.main-menu',
            'footer' => 'tyondoTeam::partials.front-end.main-footer',
            'top' => 'tyondoTeam::partials.front-end.top-bar',
            '2action' => 'tyondoTeam::partials.front-end.call-out',
            'news' => [
                'index' => 'tyondoTeam::partials.front-end.news.index',
                'loop' => 'tyondoTeam::partials.front-end.news.news-loop',
            ],
            'products' => [
                'sidebar' => 'tyondoTeam::partials.front-end.products.sidebar',
            ]
        ],
        'back-end' => [
            'team' => [
                'index'     => 'tyondoTeam::back-end.team.index',
                'create'    => 'tyondoTeam::back-end.team.create',
                'show'      => 'tyondoTeam::back-end.team.show',
                'edit'      => 'tyondoTeam::back-end.team.edit',
                'role'      => 'tyondoTeam::back-end.team.role',
            ],
            'faq' => [
                'index'     => 'tyondoTeam::back-end.faq.index',
                'create'    => 'tyondoTeam::back-end.faq.create',
                'show'      => 'tyondoTeam::back-end.faq.show',
                'edit'      => 'tyondoTeam::back-end.faq.edit',
                'role'      => 'tyondoTeam::back-end.faq.role',
            ],
            'products' => [
                'index'     => 'tyondoTeam::back-end.products.index',
                'create'    => 'tyondoTeam::back-end.products.create',
                'show'      => 'tyondoTeam::back-end.products.show',
                'edit'      => 'tyondoTeam::back-end.products.edit',
                'role'      => 'tyondoTeam::back-end.products.role',
            ],
            'testimonials' => [
                'index'     => 'tyondoTeam::back-end.testimonials.index',
                'create'    => 'tyondoTeam::back-end.testimonials.create',
                'show'      => 'tyondoTeam::back-end.testimonials.show',
                'edit'      => 'tyondoTeam::back-end.testimonials.edit',
                'role'      => 'tyondoTeam::back-end.testimonials.role',
            ],
        ],
        'front-end' => [
            'about' =>  [
                'faq' => 'tyondoTeam::front-end.about.about-faq',
                'team' => 'tyondoTeam::front-end.about.about-team',
                'testimonials' => 'tyondoTeam::front-end.about.about-testimonials',
                'about' => 'tyondoTeam::front-end.about.about-us',
                'index' => 'tyondoTeam::front-end.about.index'
            ],
            'contact'   =>  [
                'contact' => 'tyondoTeam::front-end.contact.contact-us',
                'account' => 'tyondoTeam::front-end.contact.',
            ],
            'home'  =>  [
                'index' =>  'tyondoTeam::front-end.home.index'
            ],
            'loan'  =>  [
                'form'   =>  'tyondoTeam::front-end.loan.form'
            ],
            'news'  =>  [
                'list' =>  'tyondoTeam::front-end.news.news-grid'
            ],
            'products'  =>  [
                'products' => 'tyondoTeam::front-end.products.products',
                'agriBusiness' => 'tyondoTeam::front-end.products.agri-business-loans',
                'assetFinance' => 'tyondoTeam::front-end.products.asset-finance-loans',
                'education' => 'tyondoTeam::front-end.products.education-loans',
                'emergency' => 'tyondoTeam::front-end.products.emergency-loans',
                'groupBusiness' => 'tyondoTeam::front-end.products.group-business-loans',
                'individualBusiness' => 'tyondoTeam::front-end.products.individual-business-loans',
            ],
            'projects'
        ],


        'shared'=>[
            'google-analytics' => 'mnara::admin.shared.GoogleAnalytics'
        ]
    ],
    /*
    |--------------------------------------------------------------------------
    | Musoni Package Navigation Menu
    |--------------------------------------------------------------------------
    |
    |
    */
    'navigation' => [

        [
            'group' => 'Team',
            'class' => 'fa fa-book fa-lg',
            'links' => [
                [
                    'title' => 'Add Team',
                    'class' => 'fa fa-fw fa-plus',
                    'route' => 'musoni.team.create'
                ],
                [
                    'title' => 'Manage Team',
                    'class' => 'fa fa-newspaper-o',
                    'route' => 'musoni.team.index'
                ],
                [
                    'title' => 'List Team',
                    'class' => 'fa fa-fw fa-th-list',
                    'route' => 'musoni.team.index'
                ],
            ]
        ],

        [
            'group' => 'FAQ',
            'class' => 'fa fa-cubes fa-lg',
            'links' => [
                [
                    'title' => 'Add Faq',
                    'class' => 'fa fa-fw fa-plus',
                    'route' => 'musoni.faq.create'
                ],
                [
                    'title' => 'List Faq',
                    'class' => 'fa fa-fw fa-th-list',
                    'route' => 'musoni.faq.index'
                ],

            ]
        ],

        [
            'group' => 'Testimonials',
            'class' => 'fa fa-cubes fa-lg',
            'links' => [
                [
                    'title' => 'Add Category',
                    'class' => 'fa fa-fw fa-plus',
                    'route' => 'musoni.testimonial.create'
                ],
                [
                    'title' => 'List Category',
                    'class' => 'fa fa-fw fa-th-list',
                    'route' => 'musoni.testimonial.index'
                ],

            ]
        ],
        [
            'group' => 'Products',
            'class' => 'fa fa-cubes fa-lg',
            'links' => [
                [
                    'title' => 'Add Product',
                    'class' => 'fa fa-fw fa-plus',
                    'route' => 'musoni.product.create'
                ],
                [
                    'title' => 'List Products',
                    'class' => 'fa fa-fw fa-th-list',
                    'route' => 'musoni.product.index.list'
                ],

            ]

        ],
    ],
];