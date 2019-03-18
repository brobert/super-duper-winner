<?php

namespace App\Models\Hrm;


class ConfigModel extends HrmModel
{
    protected $table = 'configs';

    public function setValueAttribute($value)
    {
        return json_encode ( $value );
    }

    public function getValueAttribute($value)
    {
        return json_decode ( $this->value );
    }
}
