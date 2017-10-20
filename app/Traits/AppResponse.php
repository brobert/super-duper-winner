<?php

namespace App\Traits;

use Log;

trait AppResponse {

    private $stash = [
        'user_name' => 'Jan Nowak'
    ];

    protected function _respond($view)
    {
        $this->stash['view'] = $view;
        $this->stash['request'] = $this->request;

        Log::debug("RENDER::VIEW: $view");

        return view($view, $this->stash);
    }
}