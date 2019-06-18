<?php

namespace App\Models\Hrm;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class FreeDayModel extends HrmModel
{

    protected $table = 'free_days';

    public static function freeDays($year)
    {

        return FreeDayModel::where('year')->orWhere('year', $year)->orderBy('month', 'asc')->orderBy('day', 'asc')->get();
    }
}
