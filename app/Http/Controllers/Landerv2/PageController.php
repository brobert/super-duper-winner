<?php

namespace App\Http\Controllers\Landerv2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function calendar()
    {
        return $this->_respond('landerv2.page.calendar');
    }

    public function starter()
    {
        return $this->_respond('landerv2.page.starter');
    }

    public function profile()
    {
        return $this->_respond('landerv2.page.profile');
    }

    public function register()
    {
        return $this->_respond('landerv2.page.register');
    }

    public function faq()
    {
        return $this->_respond('landerv2.page.faq');
    }

    public function login()
    {
        return $this->_respond('landerv2.page.login');
    }

    public function invoice()
    {
        return $this->_respond('landerv2.page.invoice');
    }

}
