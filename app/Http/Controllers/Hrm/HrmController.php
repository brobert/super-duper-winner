<?php

namespace App\Http\Controllers\Hrm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HrmController extends Controller
{

    protected $scope = 'hrm';

    public function __construct(Request $request)
    {

        parent::__construct($request);
        $this->add_crumb([
            'name' => 'hrm'
        ]);
    }
}
