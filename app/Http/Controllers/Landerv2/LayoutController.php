<?php

namespace App\Http\Controllers\Landerv2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
    public function default()
    {
        return $this->_respond('landerv2.layout.default');
    }

}
