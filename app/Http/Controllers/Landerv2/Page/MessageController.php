<?php

namespace App\Http\Controllers\Landerv2\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function bubble()
    {
        return $this->_respond('landerv2.page.message.bubble');
    }

    public function rich()
    {
        return $this->_respond('landerv2.page.message.rich');
    }

}
