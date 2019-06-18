<?php

namespace App\Models\Hrm;

use Illuminate\Support\Facades\Log;


class ConfigModel extends HrmModel
{

    protected $table = 'configs';

    protected $primaryKey = 'attr';

    public $incrementing = false;

    protected $fillable = [
        'attr',
        'value'
    ];

    public function setValueJsonAttribute($value)
    {

        $this->attributes ['value_json'] = json_encode($value);
    }

    public function getValueJsonAttribute($value)
    {

        return $value ? json_decode($value) : [];
    }
}
