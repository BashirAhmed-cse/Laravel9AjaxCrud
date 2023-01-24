<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        $products = Product::latest()->paginate(5);
        return view('products',compact('products'));
    }

    // add product

    public function addProduct(Request $request){
        $request->validate(
            [
             'name'=>'required|unique:products',
             'price'=>'required',
            ],
            [
                'name.required'=>'Name is Required',
                'name.unique'=>'Name already Exists',
                'price.required'=>'Price is Required',
            ]
            );

            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->save();
            return response()->json([
              'status' => 'success',  
            ]);
    }

    // update product

    public function updateProduct(Request $request){
        $request->validate(
            [
             'up_name'=>'required|unique:products,name,'.$request->up_id,
             'up_price'=>'required',
            ],
            [
                'up_name.required'=>'Name is Required',
                'up_name.unique'=>'Name already Exists',
                'up_price.required'=>'Price is Required',
            ]
            );

            Product::where('id',$request->up_id)->update([
                'name'=>$request->up_name,
                'price'=>$request->up_price,
            ]);
          
            return response()->json([
              'status' => 'success',  
            ]);
    }

    public function deleteProduct(Request $request){
        Product::find($request->product_id)->delete();
        return response()->json([
            'status' => 'success',  
          ]);
    }
}
