<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Merchant;

class ProductController extends Controller
{
    public function index()

    {

    	dd(Product::all());

    }


    public function locked_index() 

    {

    	$user = auth()->user();

    	$merchant = Merchant::where(['name' => $user->name])->first();

    	$products = Product::where(['locked' => 1, 'merchant_id' => $merchant->id])->get();


    	return view('products.index', ['products' => $products]);

    }


    public function dynamic_index()

    {

    	return view('products.dynamic_index');

    }


    public function create(Request $request) 

    {

    	$user = auth()->user();

    	$merchant = Merchant::where(['name' => $user->name])->first();


    	$name = $request->name;
    	$price = $request->price;
    	$locked = $request->locked;

    	$product = Product::create([
    		'name' => $name,
    		'price' => $price,
    		'locked' => $locked,
    		'merchant_id' => $merchant->id
    	]);

    	return redirect()->back();

    }


    public function show_qr($product_id)

    {

    	$user = auth()->user();

    	$merchant = Merchant::where(['name' => $user->name])->first();

    	$product = Product::find($product_id);


    	return view('products.show_qr', ['message' => '{"action" : "'.$product->name.'", "args": "'.$product->price.'"}']);


    }


    public function show_dynamic_qr(Request $request) 

    {

    	return view('products.show_qr', ['message' => '{"action" : "'.$request->name.'", "args": "'.$request->price.'"}']);

    }
}
