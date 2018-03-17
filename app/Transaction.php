<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    

	protected $fillable = [

		'id',
		'telegram_user_id',
		'product_id',
		'currency',
		'amount',
		'status'

	];


}
