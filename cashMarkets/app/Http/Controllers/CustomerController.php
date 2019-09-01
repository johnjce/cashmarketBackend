<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('CustomerAdd');
    }

    public function userPerMonth(){
        return [
            'maxUsers'=>'12',
            'users1'=>'4',
            'users2'=>'6',
            'users3'=>'8',
            'users4'=>'3',
            'users5'=>'5',
            'users6'=>'9',
        ];
    }
}
