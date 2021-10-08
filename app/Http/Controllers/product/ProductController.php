<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view("crud.add-product");
    }

    public function create(Request $request)
    {
        $product=new Product();
        $title=$request->title;
        $desc=$request->desc;
        $price=$request->price;

        $validate=$request->validate([
            "title"=>"required",
            "desc"=>"required",
            "price"=>"required",
        ]);

        if($validate){
            $product->title=$title;
            $product->description=$desc;
            $product->price=$price;
            $result=$product->save();
    
            if($result){
                return redirect(route("get-product"))->with('status','Product Add Successfully');
            }
        }else{
            return redirect(route("add-product"));
        }
        
      
    }
}
