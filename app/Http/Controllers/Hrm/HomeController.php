<?php

namespace App\Http\Controllers\Hrm;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Hrm\WorkLogModel;
use App\Models\Hrm\CalendarModel;
use Carbon\Carbon;


// use App\Http\Controllers\HrmController;
class HomeController extends HrmController
{

    public function index()
    {

        $this->stash ['title'] = 'Hrm';
        $this->stash ['title_icon'] = 'ico-home';
        $this->stash ['worklog'] = CalendarModel::with('workLog')->orderBy('date', 'asc')->get()->groupBy(function ($res)
        {
            return Carbon::parse($res->date)->format('Y-m'); // grouping by years
                                                                 // return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });
        $this->stash ['calendars'] = CalendarModel::whereMonth('date', '03')->whereYear('date', 2019)->orderBy('date', 'desc')->get()->toArray();

        $this->stash ['worklogColumns'] = Schema::connection('hrm')->getColumnListing('work_logs'); // users table
        $this->stash ['worklogMonths'] = $this->months(12); // users table

        return $this->_respond('hrm.index');
    }

    public static function months($lastMonths = 12)
    {

        $monthDays = [];
        for($i = 0; $i < $lastMonths; $i++)
        {
            $now = date("Y-m-d", strtotime("-$i months"));
            $now = Carbon::parse($now);
            $monthDays [$now->format('Y-m')] = Carbon::parse($now->format('Y-m-d'))->daysInMonth;
        }

        return $monthDays;

        // $start = (new DateTime($now->format('Y-m-d')))->modify('first day of this month');
        // $end = (new DateTime(($now->addMonths($futureM))->format('Y-m-d')))->modify('first day of next month');
        // $interval = DateInterval::createFromDateString('1 month');
        // $period = new DatePeriod($start, $interval, $end);
        // $months = array();
        // foreach ( $period as $dt )
        // {
        // array_push($months, array(
        // 'month' => $dt->format("F/Y"),
        // 'days' => []
        // ));
        // }
        // return $months;
    }
}
