<?php

namespace App\Http\Controllers;

use App\Product;
use App\Producttype;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class PurchaseController extends Controller
{
    //
    public function newPurchase()
    {
        $productTypes = Producttype::select('id', 'type', 'comment')->get();
        return view('newPurchase', compact('productTypes'));
    }

    public function purchaseList()
    {
        return view('PurchaseList');
    }

    public function purchaseAdd(Request $request)
    {
        if ($request->ajax()) {
            $purchase = new Product();
            $row=[];
            foreach ($request->products as $row) {
                foreach($row as $campo => $valor){
                    $purchase->$campo = $valor;
                }
                $purchase->save();
            }
            return "Guardado";
        }
        return "Error: no puede guardar";
    }
}//agregar en el array cuando estoy guardand los campos que faltan de la base de datos
