<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends BaseModel
{
     public $table= 'seller';
     public $fillable = [
        'name', 'email','password','updated_at','created_at'
    ];
     function setPassword($val){
         $this->attributes['password']= bcrypt($val);
     }
     //protected $hidden = [ 'password' ];


    public function product()
    {
        return $this->hasMany('App\Product');
    }

}
