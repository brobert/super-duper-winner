<?php

namespace App\Models\Hrm;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class FreeDay extends HrmModel
{

    public static function freeDays($year)
    {

        return FreeDay::where('year')->orWhere('year', $year)->orderBy('month', 'asc')->orderBy('day', 'asc')->get();
    }
}
