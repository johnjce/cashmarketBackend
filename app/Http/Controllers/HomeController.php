<?php

namespace App\Http\Controllers;

use App\Lrvd;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $customers = new CustomerController();
        return view('home')->with('customers',$customers->userPerMonth());
    }

    public function updateSignature(Request $request){
        $agreement = Lrvd::where("documentId",$request->documentId);
        dd($agreement->update(['signatureCustomer' => $request->signature]));
        return true;
    }
}
