<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        public function user() //create
    {
        return $this->belongsTo('App\User');
    }
       public function product() //create
    {
        return $this->belongsTo('App\Product');
    }

    
}
