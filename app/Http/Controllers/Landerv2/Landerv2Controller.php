<?php

namespace App\Http\Controllers\Landerv2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Landerv2Controller extends Controller
{

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->add_crumb(['name' => 'landerv2']);
    }

}
