<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
		'payed_at',
		'description',
		'amount',
		'user_id',
	];

	
    public function user() 
    {	
		return $this->belongsTo('App\User');
	}

}
