<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Resources\WeatherResource;
use App\Resources\StatsResource;
use App\Resources\IncomeResource;
use App\Resources\TrafficResource;
use App\Resources\BrowserBreakpoints;
use App\Resources\MessageResource;
use App\Http\Traits\AppResponse;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, AppResponse;

    protected $request;

    protected $scope = 'landerv2';

    public function __construct(Request $request)
    {

        $this->request = $request;
        $this->load_messages(new MessageResource());
    }

    public function home(WeatherResource $weather, StatsResource $stats, IncomeResource $income, TrafficResource $traffic, BrowserBreakpoints $breakpoints)
    {

        $this->stash ['stats'] = [
            'token' => 'pages.home.stats.title',
            'data' => $stats->get_stats_by_type()
        ];

        $this->stash ['traffic'] = $traffic->get_by('day');
        $this->stash ['today_income'] = $income->get_by('day');
        $this->stash ['weather'] = $weather->get();
        $this->stash ['breakpoints'] = $breakpoints->get_list();

        return $this->_respond();
    }

    private function load_messages(MessageResource $message_res)
    {

        $this->stash ['messages'] = $message_res->get_messages();
    }
}
