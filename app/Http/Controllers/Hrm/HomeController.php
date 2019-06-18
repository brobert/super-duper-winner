<?php

namespace App\Http\Controllers\Hrm;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Hrm\WorkLogModel;
use App\Models\Hrm\CalendarModel;
use App\Models\Hrm\FreeDayModel;
use App\Models\Hrm\ConfigModel;
use Carbon\Carbon;


// use App\Http\Controllers\HrmController;
class HomeController extends HrmController
{

    public function __construct(Request $request)
    {

        parent::__construct($request);

        $freeDays = new FreeDayModel();
        $configModel = new ConfigModel();
        $this->stash ['freeDays'] = $freeDays->freeDays(2019)->toArray();
        $this->stash ['configs'] = $configModel->get()->toArray();
    }

    public function index()
    {

        Log::info('Hrm\HomeController::index');
        $this->stash ['title'] = 'Hrm';
        $this->stash ['title_icon'] = 'ico-home';

        $this->stash ['yearRange'] = $this->getYearRanges(2);
        $this->stash ['yearRange'] = $this->getYearRanges(2);

        return $this->_respond('hrm.index');
    }

    public function show()
    {

        Log::info('Hrm\HomeController::show');

        $this->stash ['title'] = 'Hrm';
        $this->stash ['title_icon'] = 'ico-home';

        $this->stash ['yearRange'] = $this->getYearRanges(2);

        return $this->_respond('hrm.index');
    }
}
