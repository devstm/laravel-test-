<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Stores extends BaseModel
{
    protected $table= 'store';
    public $fillable = [
        'name', 'email','password','currency_id'
    ];
    public function currency()
    {
        return $this->hasMany('App\Curruncies');
    }
    public function get_currency_code()
    {
            return Curruncies::where('id' , $this->currency_id)->first()->code;
    }


}

