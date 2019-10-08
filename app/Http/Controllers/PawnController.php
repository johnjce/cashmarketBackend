<?php
namespace App\Http\Controllers;
use App\Lrvd;
use App\Product;
use App\Producttype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PawnController extends Controller{

    public function newPawn(){
        Auth::user()->authorizeRoles(['admin']);
        $productTypes = Producttype::select('id', 'type', 'comment')->get();
        return view('newPawn', compact('productTypes'));
    }

    public function pawnList()
    {
        Auth::user()->authorizeRoles(['admin']);
        //dd("para en dd");
        $pawns = DB::table('lrvds')
            ->join('customers', 'customers.IDCL', '=', 'lrvds.IDCL')
            //->join('products', 'products.currentAgreement', '=', 'lrvds.id')
            ->where("lrvds.typeDocument", "=", "pawn")
            ->select('customers.names', 'customers.lastname', 'customers.dni', 'lrvds.created_at', 'lrvds.documentId')
            ->orderByDesc('id')
            ->paginate(15);
        return view('PawnList', compact('pawns'));
    }

    public function pawnAgreementData(Request $request)
    {
        Auth::user()->authorizeRoles(['admin']);
        return DB::table('lrvds')
            ->join('customers', 'customers.IDCL', '=', 'lrvds.IDCL')
            ->join('products', 'products.currentAgreement', '=', 'lrvds.id')
            ->where("lrvds.typeDocument", "=", "pawn")
            ->where("lrvds.documentId", "=", $request->documentId)
            ->select('customers.names', 'customers.lastname', 'customers.dni', 'customers.telephone', 'lrvds.created_at', 'lrvds.documentId', "products.*")
            ->orderByDesc('id')
            ->get();
    }

    public function pawnAdd(Request $request)
    {
        Auth::user()->authorizeRoles(['admin']);
        if ($request->ajax()) {
            $idAgreement = $this->addAgreement($request->IDCL, $request->total, "pawn");
            foreach ($request->products as $rows) {
                $this->addProduct($idAgreement[1], $rows, 200);
            }
            return $idAgreement[0];
        }
        return "Error: no puede guardar";
    }

    public function addAgreement($IDCL, $total, $typeDocument)
    {
        Auth::user()->authorizeRoles(['admin']);
        $agreement = new Lrvd();
        $agreement->IDCL = $IDCL;
        $agreement->amount = $total;
        $agreement->typeDocument = $typeDocument;
        $agreement->documentId = bin2hex(random_bytes(10));
        $agreement->save();
        return [$agreement->documentId,$agreement->id];
    }

    public function addProduct($idAgreement, $rows, $state)
    {
        Auth::user()->authorizeRoles(['admin']);
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
