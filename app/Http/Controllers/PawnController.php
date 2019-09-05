<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PawnController extends Controller
{
    //
    public function newPawn(){
        return view('newPawn');
    }

    public function pawnList(){
        return view('PawnList');
    }
}
