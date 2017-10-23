<?php

namespace App\Http\Controllers\Landerv2\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function grid()
    {
        return $this->_respond('landerv2.page.blog.grid');
    }

    public function default()
    {
        return $this->_respond('landerv2.page.blog.default');
    }

    public function single()
    {
        return $this->_respond('landerv2.page.blog.single');
    }

}
