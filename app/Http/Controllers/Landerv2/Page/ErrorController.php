<?php

namespace App\Http\Controllers\Landerv2\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ErrorController extends Controller
{
    public function 500()
    {
        return $this->_respond('landerv2.page.error.500');
    }

    public function 403()
    {
        return $this->_respond('landerv2.page.error.403');
    }

    public function 404()
    {
        return $this->_respond('landerv2.page.error.404');
    }

}
