<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    //
    public function newPurchase(){
        return view('newPurchase');
    }

    public function purchaseList(){
        return view('PurchaseList');
    }
}
