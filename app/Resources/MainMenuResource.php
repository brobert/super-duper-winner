<?php

namespace App\Resources;

use App\Resources\Resource;

class MainMenuResource extends Resource
{
    static public function get_menu_structure()
    {
        $n_menu = [
//             [
//                 'name' => 'home',
//                 'icon' => 'ico-home2',
//             ],
            [
                'name' => 'layout',
                'icon' => 'ico-grid',
                'children' => [
                    [
                        'name' => 'layout.default',
                        'icon' => '',
                    ],
                    [
                        'name' => 'layout.navbar_collapse',
                        'icon' => '',
                    ],
                    [
                        'name' => 'layout.fixed_sidebar',
                        'icon' => '',
                    ],
                    [
                        'name' => 'layout.reveal_header',
                        'icon' => '',
                    ],
                    [
                        'name' => 'layout.with_footer',
                        'icon' => '',
                    ],
                    [
                        'name' => 'layout.fixed_header',
                        'icon' => '',
                    ],
                ],
            ],
            [
                'name' => 'widget',
                'icon' => 'ico-tasks',
            ],
            [
                'name' => 'component',
                'icon' => 'ico-screen4',
                'children' => [
                    [
                        'name' => 'component.loading',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.sortable',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.notification',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.button',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.typography',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.tabsaccordion',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.slider',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.animation',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.grid',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.pricing',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.carousel',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.others',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.panel',
                        'icon' => '',
                    ],
                    [
                        'name' => 'component.icon',
                        'icon' => '',
                    ],
                ],
            ],
            [
                'name' => 'form',
                'icon' => 'ico-file',
                'children' => [
                    [
                        'name' => 'form.fileupload',
                        'icon' => '',
                    ],
                    [
                        'name' => 'form.layout',
                        'icon' => '',
                    ],
                    [
                        'name' => 'form.wizard',
                        'icon' => '',
                    ],
                    [
                        'name' => 'form.imagecrop',
                        'icon' => '',
                    ],
                    [
                        'name' => 'form.element',
                        'icon' => '',
                    ],
                    [
                        'name' => 'form.wysiwyg',
                        'icon' => '',
                    ],
                    [
                        'name' => 'form.xeditable',
                        'icon' => '',
                    ],
                    [
                        'name' => 'form.validation',
                        'icon' => '',
                    ],
                ],
            ],
            [
                'name' => 'table',
                'icon' => 'ico-table22',
                'children' => [
                    [
                        'name' => 'table.default',
                        'icon' => '',
                    ],
                    [
                        'name' => 'table.datatable',
                        'icon' => '',
                    ],
                ],
            ],

            [
                'name' => 'page',
                'icon' => 'ico-copy4',
                'children' => [
                    [
                        'name' => 'page.profile',
                        'icon' => '',
                    ],
                    [
                        'name' => 'page.register',
                        'icon' => '',
                    ],
                    [
                        'name' => 'page.media',
                        'icon' => '',
                        'children' => [
                            [
                                'name' => 'page.media.album',
                                'icon' => '',
                            ],
                            [
                                'name' => 'page.media.gallery',
                                'icon' => '',
                            ],
                        ],
                    ],
                    [
                        'name' => 'page.faq',
                        'icon' => '',
                    ],
                    [
                        'name' => 'page.blog',
                        'icon' => '',
                        'children' => [
                            [
                                'name' => 'page.blog.default',
                                'icon' => '',
                            ],
                            [
                                'name' => 'page.blog.single',
                                'icon' => '',
                            ],
                            [
                                'name' => 'page.blog.grid',
                                'icon' => '',
                            ],
                        ],
                    ],
                    [
                        'name' => 'page.invoice_printable',
                        'icon' => '',
                    ],
                    [
                        'name' => 'page.login_returned',
                        'icon' => '',
                    ],
                    [
                        'name' => 'page.invoice',
                        'icon' => '',
                    ],
                    [
                        'name' => 'page.error',
                        'icon' => '',
                        'children' => [
                            [
                                'name' => 'page.error.404',
                                'icon' => '',
                            ],
                            [
                                'name' => 'page.error.403',
                                'icon' => '',
                            ],
                            [
                                'name' => 'page.error.500',
                                'icon' => '',
                            ],
                        ],
                    ],
                    [
                        'name' => 'page.login',
                        'icon' => '',
                    ],
                    [
                        'name' => 'page.calendar',
                        'icon' => '',
                    ],
                    [
                        'name' => 'page.email',
                        'icon' => '',
                        'children' => [
                            [
                                'name' => 'page.email.inbox',
                                'icon' => '',
                            ],
                            [
                                'name' => 'page.email.view',
                                'icon' => '',
                            ],
                        ],
                    ],
                    [
                        'name' => 'page.starter',
                        'icon' => '',
                    ],
                    [
                        'name' => 'page.timeline_v2',
                        'icon' => '',
                    ],
                ],
            ],
            [
                'name' => 'chart',
                'icon' => 'ico-stats-up',
                'children' => [
                    [
                        'name' => 'chart.flot',
                        'icon' => '',
                    ],
                ],
            ],
            [
                'name' => 'maps',
                'icon' => 'ico-map3',
                'children' => [
                    [
                        'name' => 'maps.vector',
                        'icon' => '',
                    ],
                    [
                        'name' => 'maps.google',
                        'icon' => '',
                    ],
                ],
            ],

        ];
        return $n_menu;
    }
}