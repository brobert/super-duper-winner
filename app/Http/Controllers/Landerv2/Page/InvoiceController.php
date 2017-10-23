<?php

namespace App\Http\Controllers\Landerv2\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function printable()
    {
        return $this->_respond('landerv2.page.invoice.printable');
    }

}
