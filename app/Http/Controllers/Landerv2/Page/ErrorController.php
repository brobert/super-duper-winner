<?php

namespace App\Http\Controllers\Landerv2\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ErrorController extends Controller
{
    public function error_500()
    {
        return $this->_respond('landerv2.page.error.500');
    }

    public function error_403()
    {
        return $this->_respond('landerv2.page.error.403');
    }

    public function error_404()
    {
        return $this->_respond('landerv2.page.error.404');
    }

}
