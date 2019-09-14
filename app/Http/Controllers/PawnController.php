<?php
namespace App\Http\Controllers;
use App\Lrvd;
use App\Product;
use App\Producttype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PawnController extends Controller{

    public function newPawn(){
        $productTypes = Producttype::select('id', 'type', 'comment')->get();
        return view('newPawn', compact('productTypes'));
    }

    public function pawnList()
    {
        //dd("para en dd");
        $pawns = DB::table('lrvds')
            ->join('customers', 'customers.IDCL', '=', 'lrvds.IDCL')
            //->join('products', 'products.currentAgreement', '=', 'lrvds.id')
            ->where("lrvds.typeDocument", "=", "pawn")
            ->select('customers.names', 'customers.lastname', 'customers.dni', 'lrvds.created_at', 'lrvds.documentId')
            ->paginate(15);
        return view('PawnList', compact('pawns'));
    }

    public function pawnAgreementData(Request $request)
    {
        return DB::table('lrvds')
            ->join('customers', 'customers.IDCL', '=', 'lrvds.IDCL')
            ->join('products', 'products.currentAgreement', '=', 'lrvds.id')
            ->where("lrvds.typeDocument", "=", "pawn")
            ->where("lrvds.documentId", "=", $request->documentId)
            ->select('customers.names', 'customers.lastname', 'customers.dni', 'customers.telephone', 'lrvds.created_at', 'lrvds.documentId', "products.*")
            ->get();
    }

    public function pawnAdd(Request $request)
    {
        if ($request->ajax()) {
            $idAgreement = $this->addAgreement($request->IDCL, $request->total, "pawn");
            foreach ($request->products as $rows) {
                $this->addProduct($idAgreement, $rows, 100);
            }
            return $idAgreement;
        }
        return "Error: no puede guardar";
    }

    public function addAgreement($IDCL, $total, $typeDocument)
    {
        $agreement = new Lrvd();
        $agreement->IDCL = $IDCL;
        $agreement->amount = $total;
        $agreement->typeDocument = $typeDocument;
        $agreement->documentId = bin2hex(random_bytes(10));
        $agreement->save();
        return $agreement->id;
    }

    public function addProduct($idAgreement, $rows, $state)
    {
        $pawn = new Product();
        foreach ($rows as $campo => $valor) {
            if ($campo == "state") {
                $pawn->productState = $valor;
                $pawn->currentAgreement = $idAgreement;
                $valor = $state;
            }
            if ($campo == "productImage") {
                $valor = urldecode($valor);
            }
            $pawn->$campo = $valor;
        }
        $pawn->save();
    }
}
