<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Products_detail;
use Illuminate\Http\Request;

class EditProducts extends Controller
{
    public function edit_Product(Request $request)
    {
        $productID = request('productID');

        $Categorie = Categorie::get();

        $product_details = Products_detail::where('product_id', $productID)
        ->get();

        return view('edit_products',[
            'product_details' => $product_details,
            'Categorie' => $Categorie
        ]);
    }
}
