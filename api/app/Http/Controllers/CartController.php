<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use Carbon\Carbon;
use Auth;

class CartController extends Controller
{
    public function add($product_id){

        try{

            $userId = Auth::id();
            $userData = User::findOrFail($userId);
            $productData = Product::findOrFail($product_id);


            Cart::insert([
                'user_id' => $userId,
                'user_name' => $userData->name,
                'product_id' => $product_id,
                'product_name' => $productData->name,
                'price' => $productData->price,
                'image' => $productData->image,
                'available' => $productData->available,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            return response()->json(['success' => 'Product added to cart'],200);

        }catch(ModelNotFoundException $e){
            return response()->json(['error' => 'User or Product non-existent'],401);
        }

    }

    public function show(){

        $userId = Auth::id();
        return Cart::all()->where('user_id', $userId);
    }

    public function delete($id){
        try{
            Cart::findOrFail($id)->delete();
            return response()->json(['success' => 'Element deleted'],200);
        }catch(ModelNotFoundException $e){
            return response()->json(['error' => 'something went wrong'],401);
        }
    }
}
