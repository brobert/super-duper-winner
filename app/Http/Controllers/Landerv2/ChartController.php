<?php

namespace App\Http\Controllers\Landerv2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChartController extends Controller
{
    public function flot()
    {
        return $this->_respond('landerv2.chart.flot');
    }

}
