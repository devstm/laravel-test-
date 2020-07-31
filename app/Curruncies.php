<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curruncies extends BaseModel
{
    protected $table= 'curruncy';
    protected $fillable = [
        'name', 'code'
    ];
    public function store()
    {
        return $this->belongsToMany('App\Stores');
    }
}
