<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{
    protected $table= 'products';
    protected $fillable = [
        'id','name','quantity','price','price_per_unit','seller_id'
    ];


    public function seller()
    {
        return $this->belongsTo(Seller::class);

    }
    public function getSellerName()
    {
        return @$this->seller->name; //Seller::where('id' , $this->seller_id)->first()->name;
    }


}
