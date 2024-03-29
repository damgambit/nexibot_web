<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Transaction;
use App\Product;
use App\Merchant;

use DB;

class TransactionController extends Controller

{
    
	public function index() 

	{

		$transactions = Transaction::all();

		return view('transaction.index', ['transactions' => $transactions]);

	}


	public function user_transactions()

	{

		$transactions = DB::table('transactions')
            ->join('products', 'transactions.product_id', '=', 'products.id')
            ->join('merchants', 'merchants.id', '=', 'products.merchant_id')
            ->get();

		return view('transaction.index', ['transactions' => $transactions]);

	}


	public function validate_confirmation()

	{

		return view('transactions.validate_transaction');

	}


	public function check_qr_conf(Request $request) 

	{

		return view('transactions.confirmed');

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
