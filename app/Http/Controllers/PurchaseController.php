<?php

namespace App\Http\Controllers;

use App\Lrvd;
use App\Product;
use App\Producttype;
use Illuminate\Http\Request;

class PurchaseController extends Controller {
    public function newPurchase() {
        $productTypes = Producttype::select('id', 'type', 'comment')->get();
        return view('newPurchase', compact('productTypes'));
    }

    public function purchaseList() {
        return view('PurchaseList');
    }

    public function purchaseAdd(Request $request) {
       //dd($request->IDCL);
        if ($request->ajax()) {
            $idAgreement = $this->addAgreement($request->IDCL, $request->total, "compra");
            foreach ($request->products as $rows) { 
                $this->addProduct($idAgreement, $rows, 100);
            }
            return "Guardado";
        }
        return "Error: no puede guardar";
    }

    public function addAgreement($IDCL, $total,$typeDocument) {
        //dd($IDCL);
        $agreement = new Lrvd();
        $agreement->IDCL = $IDCL;
        $agreement->amount = $total;
        $agreement->typeDocument = $typeDocument;
        $agreement->documentId = bin2hex(random_bytes(10));
        $agreement->save();
        return $agreement->id;
    }

    public function addProduct($idAgreement, $rows, $state) {
        $purchase = new Product();
        foreach ($rows as $campo => $valor) {
            if ($campo == "state") {
                $purchase->productState = $valor;
                $purchase->currentAgreement = $idAgreement;
                $valor = $state;
            }
            if ($campo == "productImage") {
                $valor = urldecode($valor);
            }
            $purchase->$campo = $valor;
        }
        $purchase->save();
    }
}