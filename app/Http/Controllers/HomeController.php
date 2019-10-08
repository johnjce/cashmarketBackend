<?php

namespace App\Http\Controllers;

use App\Lrvd;
use Illuminate\Support\Facades\Auth;
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
        Auth::user()->authorizeRoles(['admin','policia']);
        $customers = new CustomerController();
        return view('home')->with('customers',$customers->userPerMonth());
    }

    public function updateSignature(Request $request){
        Auth::user()->authorizeRoles(['admin']);
        $agreement = Lrvd::where("documentId",$request->documentId);
        dd($agreement->update(['signatureCustomer' => $request->signature]));
        return true;
    }
}
