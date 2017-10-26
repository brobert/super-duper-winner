<?php

namespace App\Traits;

use App\Resources\MainMenuResource;
use Faker;
use Log;

trait AppResponse {

    protected $stash = [
        'user_name' => 'Jan Nowak'
    ];

    protected function _respond($view = false)
    {
        if ( $this->request->format() === 'html')
        {
            $this->stash['view'] = $view;
            $this->stash['main_menu'] = MainMenuResource::get_menu_structure();

            $this->stash['faker'] = Faker\Factory::create();

//             $this->stash['request'] = $this->request;

            return view($view, $this->stash);
        }

        return [];

    }
}