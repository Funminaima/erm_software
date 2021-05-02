<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $guarded=[];
	// relationship with state
    public function state(){
    	return $this->BelongsTo('App\state');
    }
}
