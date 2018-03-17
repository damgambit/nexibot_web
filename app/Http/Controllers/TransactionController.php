<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Transaction;

class TransactionController extends Controller

{
    
	public function index() 

	{

		$transactions = Transaction::all();

		return view('transaction.index', ['transactions' => $transactions]);

	}


	function check($telegram_user_id)

	{

		$transaction = Transaction::where(['telegram_user_id' => $telegram_user_id])
							->orderBy('created_at', 'desc')
							->first();

		if($transaction->status == "OK") {
			echo "Success";
		} else if ($transaction->status = "none") {
			echo "Pending";
		} else {
			echo "Failed";
		}

	}

}
