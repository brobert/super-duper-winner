<?php

namespace App\Http\Controllers\Landerv2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapsController extends Controller
{
    public function vector()
    {
        return $this->_respond('landerv2.maps.vector');
    }

    public function google()
    {
        return $this->_respond('landerv2.maps.google');
    }

}
