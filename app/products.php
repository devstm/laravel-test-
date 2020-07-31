<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends BaseModel
{
    protected $table= 'products';
    protected $fillable = [
        'id','name','quantity','price','price_per_unit','seller_id'
    ];

}
