<?php

namespace App\Resources;

use App\Resources\Resource;

class MainMenuResource extends Resource
{
    static public function get_menu_structure()
    {
        $menu = [
            [
                'path'      => '/',
                'is_url'    => true,
                'name'      => 'home',
                'icon'      => 'ico-home2',
            ],
            [
                'path'      => '/layout',
                'is_url'    => false,
                'name'      => 'layouts',
                'icon'      => 'ico-grid',
                'children'  => [
                    [
                        'path'      => '/layout/default.html',
                        'is_url'    => true,
                        'name'      => 'default',
                    ],
                    [
                        'path'      => '/layout/with/footer.html',
                        'is_url'    => true,
                        'name'      => 'with_footer',
                    ],
                    [
                        'path'      => '/layout/reveal/header.html',
                        'is_url'    => false,
                        'name'      => 'reveal_header',
                    ],
                    [
                        'path'      => '/layout/fixed/header.html',
                        'is_url'    => true,
                        'name'      => 'fixed_header',
                    ],
                    [
                        'path'      => '/layout/fixed/sidebar.html',
                        'is_url'    => true,
                        'name'      => 'fixed_sidebar',
                    ],
                    [
                        'path'      => '/layout/navbar/collapse.html',
                        'is_url'    => true,
                        'name'      => 'navbar_collapse',
                    ]
                ],
            ],
            [
                'path'      => '/widget.html',
                'is_url'    => true,
                'name'      => 'widget',
                'icon'      => 'ico-tasks',
            ],
            [
                    'path'      => '/component',
                    'is_url'    => false,
                    'name'      => 'component',
                    'icon'      => 'ico-screen4',
                    'children'  => [
                            [
                                    'path'      => '/component/animation.html',
                                    'is_url'    => true,
                                    'name'      => 'animation',
                            ],
                            [
                                    'path'      => '/component/button.html',
                                    'is_url'    => true,
                                    'name'      => 'button',
                            ],
                            [
                                    'path'      => '/component/carousel.html',
                                    'is_url'    => false,
                                    'name'      => 'carousel',
                            ],
                            [
                                    'path'      => '/component/grid.html',
                                    'is_url'    => true,
                                    'name'      => 'grid',
                            ],
                            [
                                    'path'      => '/component/icon.html',
                                    'is_url'    => true,
                                    'name'      => 'icon',
                            ],
                            [
                                    'path'      => '/component/loading.html',
                                    'is_url'    => true,
                                    'name'      => 'loading',
                            ],
                            [
                                    'path'      => '/component/notification.html',
                                    'is_url'    => true,
                                    'name'      => 'notification',
                            ],
                            [
                                    'path'      => '/component/panel.html',
                                    'is_url'    => true,
                                    'name'      => 'panel',
                            ],
                            [
                                    'path'      => '/component/pricing.html',
                                    'is_url'    => false,
                                    'name'      => 'pricing',
                            ],
                            [
                                    'path'      => '/component/slider.html',
                                    'is_url'    => true,
                                    'name'      => 'slider',
                            ],
                            [
                                    'path'      => '/component/sortable.html',
                                    'is_url'    => true,
                                    'name'      => 'sortable',
                            ],
                            [
                                    'path'      => '/component/tabsaccordion.html',
                                    'is_url'    => true,
                                    'name'      => 'tabsaccordion',
                            ],
                            [
                                    'path'      => '/component/typography.html',
                                    'is_url'    => true,
                                    'name'      => 'typography',
                            ],
                            [
                                    'path'      => '/component/others.html',
                                    'is_url'    => true,
                                    'name'      => 'others',
                            ],
                    ],
            ],
        ];

        return $menu;
    }
}