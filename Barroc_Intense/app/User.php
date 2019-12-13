<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['role_id', 'name', 'email', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles() {
        return $this->HasOne('App\Role','role_id','id');
    }

    public function Malfunction(){
        return $this->hasMany('\App\Malfunction', 'client_id');
    }

    public function leases()
    {
        return $this->hasMany('\App\lease', 'customer_id');
    }

    public function company() {
        return $this->hasOne('\App\company','user_id');
    }

}
