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
                        'path'      => '/layout/basic.html',
                        'is_url'    => true,
                        'name'      => 'basic',
                    ],
                    [
                        'path'      => '/layout/sticky.html',
                        'is_url'    => true,
                        'name'      => 'sticky',
                    ],
                    [
                        'path'      => '/layout/footer.html',
                        'is_url'    => false,
                        'name'      => 'footer',
                        'children'  => [
                            [
                                'path'      => '/layout/footer/base.html',
                                'is_url'    => true,
                                'name'      => 'base',
                            ],
                            [
                                'path'      => '/layout/footer/simple.html',
                                'is_url'    => true,
                                'name'      => 'simple',
                            ],
                            [
                                'path'      => '/layout/footer/extend.html',
                                'is_url'    => true,
                                'name'      => 'extend',
                            ]
                        ]
                    ]
                ],
            ],
            [
                'path'      => '/widget.html',
                'is_url'    => true,
                'name'      => 'widget',
                'icon'      => 'ico-tasks',
            ]
        ];

        return $menu;
    }
}