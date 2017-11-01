<?php

namespace App\Http\Traits;

use App\Resources\MainMenuResource;
use Auth;
use Faker;


trait AppResponse {

    protected $stash = [
        'user_name' => 'Jan Nowak'
    ];

    private $bread_crumbs = [
        ['name' => 'home']
    ];

    protected function _respond($view = false)
    {
        if ( $this->request->format() === 'html')
        {
            $this->stash['view'] = $view;
            $this->stash['main_menu'] = MainMenuResource::get_menu_structure();
            if ( Auth::check() ) {
                $this->stash['user'] = Auth::user();
            }

            $this->stash['faker'] = Faker\Factory::create();

            $this->stash['request'] = $this->request;

            $this->stash['bread_crumbs'] = $this->bread_crumbs;

            return view($view, $this->stash);
        }

        return [];

    }

    protected function add_crumb( $crumb )
    {
        $this->bread_crumbs[] = $crumb;
    }
}