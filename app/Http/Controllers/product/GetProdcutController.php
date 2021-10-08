<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class GetProdcutController extends Controller
{
    public function index()
    {
        $product=Product::orderBy("id","DESC")->get();
        return view("crud.get-product",["products"=>$product]);
    }
}
