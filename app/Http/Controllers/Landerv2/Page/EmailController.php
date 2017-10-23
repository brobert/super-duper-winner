<?php

namespace App\Http\Controllers\Landerv2\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function view()
    {
        return $this->_respond('landerv2.page.email.view');
    }

    public function inbox()
    {
        return $this->_respond('landerv2.page.email.inbox');
    }

}
