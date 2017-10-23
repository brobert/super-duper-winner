<?php

namespace App\Http\Controllers\Landerv2\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavbarController extends Controller
{
    public function collapse()
    {
        return $this->_respond('landerv2.layout.navbar.collapse');
    }

}
