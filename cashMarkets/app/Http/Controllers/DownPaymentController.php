<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownPaymentController extends Controller
{
    //
    public function newDownPayment(){
        return view('newDownPayment');
    }

    public function downPaymentList(){
        return view('DownPaymentList');
    }
}
