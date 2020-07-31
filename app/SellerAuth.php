<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class SellerAuth extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
 protected $guard = 'seller';
    public $fillable = [
        'name', 'email','password','updated_at','created_at'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    function setPassword($val){
        $this->attributes['password']= bcrypt($val);
    }

    protected $table = "seller_auths";
}
