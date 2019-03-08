<?php

namespace App\Models\Hrm;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hrm\WorkLogModel;


class CalendarModel extends HrmModel
{

    protected $table = 'calendars';

    public function workLog()
    {

        return $this->hasOne('App\Models\Hrm\WorkLogModel', 'id', 'date_id')->withDefault();
    }
}
