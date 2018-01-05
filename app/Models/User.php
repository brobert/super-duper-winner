<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable, EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     *
     * @method full_name
     * User
     * @return string
     */
    public function full_name() {
        return sprintf("%s %s", $this->name, $this->last_name );
    }


    /**
     * Mutators
     */

    /**
     *
     * @method setPasswordAttribute
     * User
     * @param unknown $password
     */
    protected function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
