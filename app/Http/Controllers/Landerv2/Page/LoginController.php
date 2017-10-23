<?php

namespace App\Http\Controllers\Landerv2\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function returned()
    {
        return $this->_respond('landerv2.page.login.returned');
    }

}
