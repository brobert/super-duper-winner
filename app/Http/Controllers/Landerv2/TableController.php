<?php

namespace App\Http\Controllers\Landerv2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TableController extends Controller
{
    public function default()
    {
        return $this->_respond('landerv2.table.default');
    }

    public function datatable()
    {
        return $this->_respond('landerv2.table.datatable');
    }

}
