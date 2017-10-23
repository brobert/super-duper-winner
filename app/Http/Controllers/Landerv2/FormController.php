<?php

namespace App\Http\Controllers\Landerv2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function validation()
    {
        return $this->_respond('landerv2.form.validation');
    }

    public function wysiwyg()
    {
        return $this->_respond('landerv2.form.wysiwyg');
    }

    public function wizard()
    {
        return $this->_respond('landerv2.form.wizard');
    }

    public function imagecrop()
    {
        return $this->_respond('landerv2.form.imagecrop');
    }

    public function element()
    {
        return $this->_respond('landerv2.form.element');
    }

    public function xeditable()
    {
        return $this->_respond('landerv2.form.xeditable');
    }

    public function layout()
    {
        return $this->_respond('landerv2.form.layout');
    }

    public function fileupload()
    {
        return $this->_respond('landerv2.form.fileupload');
    }

}
