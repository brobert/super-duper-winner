<?php

namespace App\Http\Controllers\Npk;

use Illuminate\Http\Request;
use App\Http\Controllers\Npk\NpkController;


class PaymentController extends NpkController
{

    public function __construct(Request $request)
    {

        parent::__construct($request);
    }

    public function index()
    {

        $this->stash ['title'] = 'Krasnal';
        $this->stash ['title_icon'] = 'ico-home';

        return $this->_respond('npk.payments.index');
    }
}
