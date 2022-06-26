<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use App\Models\Categorie as ModelsCategorie;
use Illuminate\Http\Request;

class Categorie extends Controller
{
    public function Categorie(){

    $Categorie = ModelsCategorie::get();

    return view('add_products',[
        'Categorie' => $Categorie]);

  }
}
