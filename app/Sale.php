<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //relationship with inventory

    function inventory(){
    	return $this->hasOne(Inventory::class);
    }

    
}
