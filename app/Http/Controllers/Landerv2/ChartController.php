<?php

namespace App\Http\Controllers\Landerv2;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    /**
     *
     * @method __construct
     * ChartController
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    /**
     *
     * @method flot
     * ChartController
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function flot(Request $request)
    {
        return $this->_respond('landerv2.chart.flot');
    }
}
