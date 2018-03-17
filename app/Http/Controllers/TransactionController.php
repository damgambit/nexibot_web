<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Transaction;
use App\Product;
use App\Merchant;

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
		$product = Product::where(['id' => $transaction->product_id])->first();
		$merchant = Merchant::where(['id' => $product->merchant_id])->first();

		if($transaction->status == "OK") {
			echo "Success?".$transaction->id.'?'.$product->name.'?'.$transaction->amount.'?'.$merchant->name;
		} else if ($transaction->status = "none") {
			echo "Pending?".$transaction->id.'?'.$product->name.'?'.$transaction->amount.'?'.$merchant->name;
		} else {
			echo "Failed?".$transaction->id.'?'.$product->name.'?'.$transaction->amount.'?'.$merchant->name;
		}

	}

}
