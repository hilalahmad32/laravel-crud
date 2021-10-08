<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DeleteProductController extends Controller
{
    public function delete($id)
    {
      $product=Product::findOrFail($id);
      $result=$product->delete();
      if($result){
          return redirect(route("get-product"))->with("status",'Product Delete Successfully');
      }
    }
}
