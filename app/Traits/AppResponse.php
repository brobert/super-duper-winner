<?php

namespace App\Traits;

use Faker;
use Log;

trait AppResponse {

    protected $stash = [
        'user_name' => 'Jan Nowak'
    ];

    protected function _respond($view)
    {
        $this->stash['view'] = $view;
        $this->stash['request'] = $this->request;
        $this->stash['faker'] = Faker\Factory::create();

        return view($view, $this->stash);
    }
}