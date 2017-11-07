<?php

namespace App\Http\Controllers\Landerv2;

use Illuminate\Http\Request;
use App\Http\Controllers\Landerv2\Landerv2Controller;

class PageController extends Landerv2Controller
{

    /**
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    /**
     *
     * @return unknown
     */
    public function calendar()
    {
        return $this->_respond('landerv2.page.calendar');
    }

    public function starter()
    {
        return $this->_respond('landerv2.page.starter');
    }

    public function update_profile( Request $request )
    {

    }

    public function profile()
    {
        $this->add_crumb(['name' => 'page.profile']);
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

    public function invoice_printable()
    {
        return $this->_respond('landerv2.page.invoice.printable');
    }

    public function login_returned()
    {
        return $this->_respond('landerv2.page.login.returned');
    }

    public function timeline_v2()
    {
        return $this->_respond('landerv2.page.timeline.v2');
    }

}
