<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

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
        Auth::user()->authorizeRoles(['admin']);
        return view('CustomerAdd');
    }
    
    public function seeCustomers(){
        Auth::user()->authorizeRoles(['admin','policia']);
        $customers = Customer::all();
        return view('CustomerList',compact('customers'));
    }

    public function save(Request $request){
        Auth::user()->authorizeRoles(['admin']);
        if($request->ajax()) {
            $customer = new Customer();
            foreach ($request->all() as $variable => $value) {
                if($variable == 'img_dni')$customer->img_dni=rawurldecode($value);
                if($variable != 'IDCL' && $variable != 'img_dni' && $variable != 'signaturePicture'){
                    $customer->$variable = $value;
                }
            }
            $customer->save();
            return "Guardado";
        }
        return "Error: no puede guardar imagenes";
    }

    public function getCustomerById($id){
        Auth::user()->authorizeRoles(['admin','policia']);
        return Customer::where('IDCL',$id)->first();
    }
    

    public function createCustomer(){
        Auth::user()->authorizeRoles(['admin']);
        $this->view("addCustomer",null);
    }

    public function updateCustomer(){
        Auth::user()->authorizeRoles(['admin']);
        $customers=new Customer($this->adapter);
        $customer=$customers->getById($_GET["id"]);

        $this->view("addCustomer",array(
            "customer"=>$customer
        ));
    }

    public function customerSearch(Request $keyWord){
        Auth::user()->authorizeRoles(['admin','policia']);
        return json_encode(Customer::where('IDCL','like','%'.$keyWord->q.'%')
                 ->orWhere('names','like','%'.$keyWord->q.'%')
                 ->orWhere('lastname','like','%'.$keyWord->q.'%')
                 ->orWhere('telephone','like','%'.$keyWord->q.'%')
                 ->orWhere('email','like','%'.$keyWord->q.'%')
                 ->orWhere('address','like','%'.$keyWord->q.'%')
                 ->orWhere('dni','like','%'.$keyWord->q.'%')
                 ->orderByDesc('names')
                 ->get());
    }
    
    public function userPerMonth(){
        Auth::user()->authorizeRoles(['admin','policia']);
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
