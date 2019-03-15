<?php

namespace App\Resources;

use App\Resources\Resource;


class MainMenuResource extends Resource
{

    static public function get_menu_structure($scope = 'landerv2')
    {

        $n_menu = [
            'landerv2' => [
                'name' => 'landerv2',
                'icon' => 'ico-sitemap',
                'children' => [

                    [
                        'name' => 'layout',
                        'icon' => 'ico-grid',
                        'children' => [
                            [
                                'name' => 'layout.default'
                            ],
                            [
                                'name' => 'layout.navbar_collapse'
                            ],
                            [
                                'name' => 'layout.fixed_sidebar'
                            ],
                            [
                                'name' => 'layout.reveal_header'
                            ],
                            [
                                'name' => 'layout.with_footer'
                            ],
                            [
                                'name' => 'layout.fixed_header'
                            ]
                        ]
                    ],
                    [
                        'name' => 'widget',
                        'icon' => 'ico-tasks'
                    ],
                    [
                        'name' => 'component',
                        'icon' => 'ico-screen4',
                        'children' => [
                            [
                                'name' => 'component.loading'
                            ],
                            [
                                'name' => 'component.sortable'
                            ],
                            [
                                'name' => 'component.notification'
                            ],
                            [
                                'name' => 'component.button'
                            ],
                            [
                                'name' => 'component.typography'
                            ],
                            [
                                'name' => 'component.tabsaccordion'
                            ],
                            [
                                'name' => 'component.slider'
                            ],
                            [
                                'name' => 'component.animation'
                            ],
                            [
                                'name' => 'component.grid'
                            ],
                            [
                                'name' => 'component.pricing'
                            ],
                            [
                                'name' => 'component.carousel'
                            ],
                            [
                                'name' => 'component.others'
                            ],
                            [
                                'name' => 'component.panel'
                            ],
                            [
                                'name' => 'component.icon'
                            ]
                        ]
                    ],
                    [
                        'name' => 'form',
                        'icon' => 'ico-file',
                        'children' => [
                            [
                                'name' => 'form.fileupload'
                            ],
                            [
                                'name' => 'form.layout'
                            ],
                            [
                                'name' => 'form.wizard'
                            ],
                            [
                                'name' => 'form.imagecrop'
                            ],
                            [
                                'name' => 'form.element'
                            ],
                            [
                                'name' => 'form.wysiwyg'
                            ],
                            [
                                'name' => 'form.xeditable'
                            ],
                            [
                                'name' => 'form.validation'
                            ]
                        ]
                    ],
                    [
                        'name' => 'table',
                        'icon' => 'ico-table22',
                        'children' => [
                            [
                                'name' => 'table.default'
                            ],
                            [
                                'name' => 'table.datatable'
                            ]
                        ]
                    ],

                    [
                        'name' => 'page',
                        'icon' => 'ico-copy4',
                        'children' => [
                            [
                                'name' => 'page.profile'
                            ],
                            [
                                'name' => 'page.register'
                            ],
                            [
                                'name' => 'page.media',
                                'children' => [
                                    [
                                        'name' => 'page.media.album'
                                    ],
                                    [
                                        'name' => 'page.media.gallery'
                                    ]
                                ]
                            ],
                            [
                                'name' => 'page.faq'
                            ],
                            [
                                'name' => 'page.blog',
                                'children' => [
                                    [
                                        'name' => 'page.blog.default'
                                    ],
                                    [
                                        'name' => 'page.blog.single'
                                    ],
                                    [
                                        'name' => 'page.blog.grid'
                                    ]
                                ]
                            ],
                            [
                                'name' => 'page.invoice_printable'
                            ],
                            [
                                'name' => 'page.login_returned'
                            ],
                            [
                                'name' => 'page.invoice'
                            ],
                            [
                                'name' => 'page.error',
                                'children' => [
                                    [
                                        'name' => 'page.error.404'
                                    ],
                                    [
                                        'name' => 'page.error.403'
                                    ],
                                    [
                                        'name' => 'page.error.500'
                                    ]
                                ]
                            ],
                            [
                                'name' => 'page.login'
                            ],
                            [
                                'name' => 'page.calendar'
                            ],
                            [
                                'name' => 'page.email',
                                'children' => [
                                    [
                                        'name' => 'page.email.inbox'
                                    ],
                                    [
                                        'name' => 'page.email.view'
                                    ]
                                ]
                            ],
                            [
                                'name' => 'page.starter'
                            ],
                            [
                                'name' => 'page.timeline_v2'
                            ]
                        ]
                    ],
                    [
                        'name' => 'chart',
                        'icon' => 'ico-stats-up',
                        'children' => [
                            [
                                'name' => 'chart.flot'
                            ]
                        ]
                    ],
                    [
                        'name' => 'maps',
                        'icon' => 'ico-map3',
                        'children' => [
                            [
                                'name' => 'maps.vector'
                            ],
                            [
                                'name' => 'maps.google'
                            ]
                        ]
                    ]
                ]
            ],
            'npk' => [
                'name' => 'npk',
                'icon' => 'ico-home',
                'children' => [
                    [
                        'name' => 'npk.admin',
                        'roles' => 'owner'
                    ],
                    [
                        'name' => 'npk.payments'
                    ]
                ]
            ],
            'hrm' => [
                'name' => 'hrm',
                'icon' => 'ico-home',
                'children' => [
                    [
                        'name' => 'hrm.worklog',
                        'icon' => 'ico-calendar'
                    ],
                    [
                        'name' => 'hrm.settings',
                        'icon' => 'ico-cog'
                    ]
                ]
            ]
        ];
        return [
            $n_menu [$scope]
        ];
    }
}