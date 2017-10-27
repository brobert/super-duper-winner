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

    public function fixed_sidebar()
    {
        return $this->_respond('landerv2.layout.fixed.sidebar');
    }

    public function fixed_header()
    {
        return $this->_respond('landerv2.layout.fixed.header');
    }

    public function navbar_collapse()
    {
        return $this->_respond('landerv2.layout.navbar.collapse');
    }

    public function reveal_header()
    {
        return $this->_respond('landerv2.layout.reveal.header');
    }

    public function with_footer()
    {
        return $this->_respond('landerv2.layout.with.footer');
    }
}
