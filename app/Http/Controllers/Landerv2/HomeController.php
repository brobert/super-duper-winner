<?php

namespace App\Http\Controllers\Landerv2;

use App\Http\Controllers\Controller;

use App\Resources\WeatherResource;
use App\Resources\StatsResource;
use App\Resources\IncomeResource;
use App\Resources\TrafficResource;
use App\Resources\BrowserBreakpoints;

class HomeController extends Controller
{
    public function index(
        WeatherResource $weather,
        StatsResource   $stats,
        IncomeResource  $income,
        TrafficResource $traffic,
        BrowserBreakpoints $breakpoints
        )
    {
        $this->stash['stats'] = [
            'token' => 'pages.home.stats.title',
            'data' => $stats->get_stats_by_type(),
        ];
        
        $this->stash['traffic']         = $traffic->get_by('day');
        $this->stash['today_income']    = $income->get_by('day');
        $this->stash['weather']         = $weather->get();
        $this->stash['breakpoints']     = $breakpoints->get_list();
        
        return $this->_respond('landerv2.index');
    }
    
    public function widget()
    {
        return $this->_respond('landerv2.widget');
    }
    
}
