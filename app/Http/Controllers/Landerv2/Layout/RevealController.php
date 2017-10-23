<?php

namespace App\Http\Controllers\Landerv2\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RevealController extends Controller
{
    public function header()
    {
        return $this->_respond('landerv2.layout.reveal.header');
    }

}
