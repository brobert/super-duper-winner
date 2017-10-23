<?php

namespace App\Http\Controllers\Landerv2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->_respond('landerv2.index');
    }

    public function widget()
    {
        return $this->_respond('landerv2.widget');
    }

}
