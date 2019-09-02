<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Auth\Access\Response;

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
        
    public function seeCustomers(){
        $customers = Customer::all();
        return view('CustomerList',compact('customers'));
    }
    public function save(){
        $customers=new CustomersModel($this->adapter);
        $customer=new Customer($this->adapter);
        $customer->setDni($_POST['dni']);
        $customer->setName($_POST['names']);
        $customer->setLastname($_POST['lastname']);
        $customer->setAddress($_POST['address']);
        $customer->setTelephone($_POST['telephone']);
        $customer->setEmail($_POST['email']);
        $customer->setDni($_POST['dni']);
        $customer->setImgDni($_POST['img_dni']);
        $customer->setSignaturePicture($_POST['signaturePicture']);
        if(!isset($_POST["id"]) || $_POST["id"] == "")
            return $customers->addCustomer($customer);
        else {
            $customer->setId($_POST['id']);
            return $customers->updateCustomer($customer);
        }
    }

    public function getCustomerById(){
        if(isset($_POST['id']) && $_POST['id'] != ""){
            $customer=new Customer($this->adapter);
            return $customer->getById($_POST['id']);
        }
    }
    
    public function delCustomer(){ 
        //editar
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];    
            $customer=new Customer($this->adapter);
            if($customer->deleteById($id)){
                $this->redirect();
            }else{
                echo "Error: NO se borr&oacute;, Revise si tiene contratos o productos relacionados e intentelo de nuevo.";
            }
        }else{
            echo "Error: es necesario un ID de customere para borrar.";
        }
    }



    public function createCustomer(){
        $this->view("addCustomer",null);
    }

    public function updateCustomer(){
        $customers=new Customer($this->adapter);
        $customer=$customers->getById($_GET["id"]);

        $this->view("addCustomer",array(
            "customer"=>$customer
        ));
    }

    public function search(){
        $customers=new CustomersModel($this->adapter);
        $customerResult = $customers->search($_POST['value']);
        echo json_encode($customerResult);
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
