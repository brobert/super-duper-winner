<?php

namespace App\Http\Controllers\Landerv2\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimelineController extends Controller
{
    public function v2()
    {
        return $this->_respond('landerv2.page.timeline.v2');
    }

}
