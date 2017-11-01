<?php

namespace App\Http\Controllers\Landerv2;

use Illuminate\Http\Request;
use App\Http\Controllers\Landerv2\Landerv2Controller;

class ChartController extends Landerv2Controller
{

    public function flot()
    {
        $this->add_crumb(['name' => 'chart.flot']);
        return $this->_respond('landerv2.chart.flot');
    }

}
