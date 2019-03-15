<?php

namespace App\Http\Controllers\Hrm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Traits
use App\Http\Traits\Hrm\WorkLog;


class HrmController extends Controller
{
    use WorkLog;

    protected $scope = 'hrm';

    public function __construct(Request $request)
    {

        parent::__construct($request);
        $this->add_crumb([
            'name' => 'hrm'
        ]);
    }
}
