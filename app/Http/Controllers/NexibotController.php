<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\TelegramUser;
use App\Merchant;
use App\Product;
use App\Transaction;

use \unreal4u\TelegramAPI\HttpClientRequestHandler;
use \unreal4u\TelegramAPI\TgLog;
use \unreal4u\TelegramAPI\Telegram\Methods\SendMessage;

class NexibotController extends Controller
{
   

	public function create_link(Request $request)

	{

		$request->validate([

			'telegram_id' => 'required',

			'merchant_name' => 'required',

			'product_name' => 'required',

			'amount' => 'required',

		]);


		$telegram_id = $request->telegram_id;
		$merchant_name = $request->merchant_name;
		$product_name = $request->product_name;
		$amount = $request->amount;
		
		$tx_id = date('YmdHis') . '_' . $telegram_id;


		$telegram_user = TelegramUser::firstOrCreate(['id' => $telegram_id]);

		$product = Product::where(['name' => $product_name])->first();

		$merchant = Merchant::where(['name' => $merchant_name])->first();

		dd(Product::all());

		$transaction = Transaction::firstOrCreate([

			'id' => $tx_id,

			'telegram_user_id' => $telegram_id,

			'product_id' => $product->id,

			'currency' => 'EUR',

			'amount' => $amount / 100,

			'status' => 'none'

		]);


		// Alias e chiave segreta 
		$ALIAS = $merchant->alias;
		$CHIAVESEGRETA = $merchant->secret;

		// TODO: URL da modificare sulla base dell'URL del backend
		$requestUrl = "https://int-ecommerce.nexi.it/ecomm/ecomm/DispatcherServlet";
		$merchantServerUrl = "https://" . $_SERVER['HTTP_HOST'] . "/api/v1/callback/";

		// Parametri da customizzare sulla base del QR code
		$codTrans = $tx_id;
		$divisa = "EUR";
		$importo = $amount;

		// Calcolo MAC
		$mac = sha1('codTrans=' . $codTrans . 'divisa=' . $divisa . 'importo=' . $importo . $CHIAVESEGRETA);

		// Parametri obbligatori
		$obbligatori = array(
		    'alias' => $ALIAS,
		    'importo' => $importo,
		    'divisa' => $divisa,
		    'codTrans' => $codTrans,
		    'url' => $merchantServerUrl . "success",
		    'url_back' => "about:blank",
		    'mac' => $mac,   
		);


		$requestParams = $obbligatori;//array_merge($obbligatori, $facoltativi);

		$aRequestParams = array();
		foreach ($requestParams as $param => $value) {
		    $aRequestParams[] = $param . "=" . $value;
		}

		$stringRequestParams = implode("&", $aRequestParams);

		$redirectUrl = $requestUrl . "?" . $stringRequestParams;


		echo $redirectUrl;
	}



	function success_callback(Request $request) 

	{

		


		$codTrans = $request->codTrans;
		$esito = $request->esito;


		$transaction = Transaction::where(['id' => $codTrans])
									->update(['status' => $esito]);



	}





}
