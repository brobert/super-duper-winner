<?php

namespace App\Http\Controllers\Npk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NpkController extends Controller
{

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->add_crumb(['name' => 'npk']);
    }
}
