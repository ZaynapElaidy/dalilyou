<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     public function user() //create
    {
        return $this->belongsTo('App\User');
    }  
     public function order() //create
    {
        return $this->hasMany('App\Order');
    }  
}
