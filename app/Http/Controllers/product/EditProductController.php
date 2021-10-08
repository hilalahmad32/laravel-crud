<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class EditProductController extends Controller
{
    public function index($id)
    {
        $product=Product::findOrFail($id);
        return view("crud.edit-product",['product'=>$product]);
    }

    public function update(Request $request , $id)
    {
        $product=Product::findOrFail($id);

        $product->title=$request->title;
        $product->description=$request->desc;
        $product->price=$request->price;
        $result=$product->save();
        if($result){
            return redirect(route("get-product"))->with("status",'Product Update Successfully');
        }
    }
}
