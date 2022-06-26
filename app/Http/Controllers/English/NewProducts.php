<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use App\Models\Products_categorie;
use App\Models\Products_detail;
use Illuminate\Http\Request;

class NewProducts extends Controller
{
    public function products(){

        return view('add_products');

    }

   public function add_products(Request $request){

     $product_name = request('product_name');
     $description = request('description');
     $stock = request('stock');
     $price = request('price');
     $ProductCategory = request('CategoryName');

     
     $file = $request->file('pro-image');
     $OriginalName = $file->getClientOriginalName();
     $products_img = date('ymdhms').''.$OriginalName;
     $destinationPath = 'assets/images/products';
     $file->move($destinationPath,$products_img);

     $old_primrekey=Products_detail::orderBy('created_at', 'desc')->value('product_id');
     $product_id=$old_primrekey+1;

     Products_detail::Create(
      array(
          'product_id' => $product_id ,
          'name' => $product_name ,
          'description' => $description ,
          'stock' => $stock ,
          'price' => $price ,
          'product_profile_img' => $products_img  
                  
      )
      );

      foreach($ProductCategory as $singlecategory)
    {
      Products_categorie::Create(
                    array(
                        'product_id' => $product_id ,
                        'CategoryID' => $singlecategory         
                    )
                    );

    }

      return redirect()->back();
   }

   public function get_products(){

    $products=Products_detail::select('*')
    ->orderByDesc('products_details.created_at')
    ->get();

    return view('all_products',['products'=>$products]);

   }
}
