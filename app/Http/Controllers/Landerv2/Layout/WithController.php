<?php

namespace App\Http\Controllers\Landerv2\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WithController extends Controller
{
    public function footer()
    {
        return $this->_respond('landerv2.layout.with.footer');
    }

}
