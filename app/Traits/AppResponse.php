<?php

namespace App\Traits;

use Faker;
use Log;

trait AppResponse {

    private $stash = [
        'user_name' => 'Jan Nowak'
    ];

    protected function _respond($view)
    {
        $this->stash['view'] = $view;
        $this->stash['request'] = $this->request;
        $this->stash['faker'] = Faker\Factory::create();

        Log::debug("RENDER::VIEW: $view");

        return view($view, $this->stash);
    }
}