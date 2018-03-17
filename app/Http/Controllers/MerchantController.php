<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Merchant;

class MerchantController extends Controller
{
    public function index()

    {

    	dd(Merchant::all());

    }
}
