<?php

namespace App\Http\Controllers\Landerv2\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    public function gallery()
    {
        return $this->_respond('landerv2.page.media.gallery');
    }

    public function album()
    {
        return $this->_respond('landerv2.page.media.album');
    }

}
