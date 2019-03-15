<?php

namespace app\Http\Traits\Hrm;

use Carbon\Carbon;
use App\Models\Hrm\WorkLogModel;


/**
 *
 * @author rb5169
 *
 */
trait WorkLog {

    protected function getYearRanges($yearOffset = 2)
    {

        $now = Carbon::now();
        $years = [];

        for($year = $now->year; $year > $now->year - $yearOffset; $year--)
        {
            $months = [];

            for($month = 1; $month <= 12; $month++)
            {
                if ($year < $now->year || $month <= $now->month)
                {
                    $months [] = $month;
                }
            }
            $years [$year] = $months;
        }

        return $years;
    }
}

