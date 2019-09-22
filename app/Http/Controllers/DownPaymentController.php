<?php
namespace App\Http\Controllers;
use App\Lrvd;
use App\Product;
use App\Producttype;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DownPaymentController extends Controller{

    public function newDownPayment(){
        $productTypes = Producttype::select('id', 'type', 'comment')->get();
        return view('newDownPayment', compact('productTypes'));
    }

    public function downPaymentList()
    {
        //dd("para en dd");
        $downPayments = DB::table('lrvds')
            ->join('customers', 'customers.IDCL', '=', 'lrvds.IDCL')
            //->join('products', 'products.currentAgreement', '=', 'lrvds.id')
            ->where("lrvds.typeDocument", "=", "deposito")
            ->select('customers.names', 'customers.lastname', 'customers.dni', 'lrvds.created_at', 'lrvds.documentId')
            ->paginate(15);
        return view('DownPaymentList', compact('downPayments'));
    }

    public function downPaymentAgreementData(Request $request)
    {
        return DB::table('lrvds')
            ->join('customers', 'customers.IDCL', '=', 'lrvds.IDCL')
            ->join('products', 'products.currentAgreement', '=', 'lrvds.id')
            ->where("lrvds.typeDocument", "=", "deposito")
            ->where("lrvds.documentId", "=", $request->documentId)
            ->select('customers.names', 'customers.lastname', 'customers.dni', 'customers.telephone', 'lrvds.created_at', 'lrvds.documentId', "products.*")
            ->get();
    }

    public function downPaymentAdd(Request $request)
    {
        if ($request->ajax()) {
            $idAgreement = $this->addAgreement($request->IDCL, $request->total, "deposito", $request->terms, $request->lastDayOfPay);
            foreach ($request->products as $rows) {
                $this->addProduct($idAgreement[1], $rows, 300);
            }
            return $idAgreement[0];
        }
        return "Error: no puede guardar";
    }

    public function addAgreement($IDCL, $total, $typeDocument, $term, $lastDayOfPay)
    {
        $agreement = new Lrvd();
        $agreement->IDCL = $IDCL;
        $agreement->lastDayOfPay = new DateTime(strtotime($lastDayOfPay));
        $agreement->term = $term;
        $agreement->amount = $total;
        $agreement->typeDocument = $typeDocument;
        $agreement->documentId = bin2hex(random_bytes(10));
        $agreement->save();
        return [$agreement->documentId,$agreement->id];
    }

    public function addProduct($idAgreement, $rows, $state)
    {
        $downPayment = new Product();
        foreach ($rows as $campo => $valor) {
            if ($campo == "state") {
                $downPayment->productState = $valor;
                $downPayment->currentAgreement = $idAgreement;
                $valor = $state;
            }
            if ($campo == "productImage") {
                $valor = urldecode($valor);
            }
            $downPayment->$campo = $valor;
        }
        $downPayment->save();
    }
}
