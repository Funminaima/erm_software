<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    // reverse relationship with customer
    public function customer(){
    	return $this->hasMany('App\Customer');
    }
}
