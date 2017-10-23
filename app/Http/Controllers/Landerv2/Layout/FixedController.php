<?php

namespace App\Http\Controllers\Landerv2\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FixedController extends Controller
{
    public function sidebar()
    {
        return $this->_respond('landerv2.layout.fixed.sidebar');
    }

    public function header()
    {
        return $this->_respond('landerv2.layout.fixed.header');
    }

}
