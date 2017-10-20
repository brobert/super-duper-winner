<?php

namespace App\Http\Controllers\Landerv2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComponentController extends Controller
{
    /**
     *
     * @method __construct
     * ComponentController
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function animation()
    {
        return $this->_respond('landerv2.component.animation');
    }


    public function pricing()
    {
        return $this->_respond('landerv2.component.pricing');
    }


    public function button()
    {
        return $this->_respond('landerv2.component.button');
    }


    public function tabsaccordion()
    {
        return $this->_respond('landerv2.component.tabsaccordion');
    }


    public function notification()
    {
        return $this->_respond('landerv2.component.notification');
    }


    public function panel()
    {
        return $this->_respond('landerv2.component.panel');
    }


    public function loading()
    {
        return $this->_respond('landerv2.component.loading');
    }


    public function slider()
    {
        return $this->_respond('landerv2.component.slider');
    }


    public function grid()
    {
        return $this->_respond('landerv2.component.grid');
    }


    public function others()
    {
        return $this->_respond('landerv2.component.others');
    }


    public function typography()
    {
        return $this->_respond('landerv2.component.typography');
    }


    public function sortable()
    {
        return $this->_respond('landerv2.component.sortable');
    }


    public function carousel()
    {
        return $this->_respond('landerv2.component.carousel');
    }


    public function icon()
    {
        return $this->_respond('landerv2.component.icon');
    }

}
