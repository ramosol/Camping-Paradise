<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use Validator;
use Image;

class ProductController extends Controller
{
    public function prodAdd(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:25',
            'category_id' => 'required',
            'title' => 'required|max:25',
            'sub_title' => 'required|max:25',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        try{
            $product_cat_name = Category::findOrFail($request->category_id)->name;

            $productImage = $request->file('image');
            $imageName = $request->name . $request->category_id . "." . $productImage->getClientOriginalExtension();

            Image::make($productImage)->resize(500,500)->save('images/products/'.$imageName);

            $last_img = '/images/products/'.$imageName;

            Product::insert([
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => $request->name,
                'category_id' => $request->category_id,
                'category_name' => $product_cat_name,
                "title" => $request->title,
                "sub_title" => $request->sub_title,
                "price" => $request->price,
                "description" => $request->description,
                "ref" => $request->ref,
                "available" => $request->available,
                "image" => $last_img,
            ]);

            return response()->json(['success' => 'Product added'], 200);

        }catch(ModelNotFoundException $e){
            return response()->json(['error' => 'Something went wrong'],401);
        }



    }

    public function prodEdit(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:25',
            'category_id' => 'required',
            'title' => 'required|max:25',
            'sub_title' => 'required|max:25',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        if($request->image === null){
            $actual_img = Products::find($id)->image;
            $last_img = $actual_img;
        } else{

            $productImage = $request->file('image');
            $imageName = $request->name . $request->product_id . "." . $productImage->getClientOriginalExtension();
            Image::make($productImage)->resize(500,500)->save('images/products/'.$imageName);
            $last_img = '/images/products/'.$imageName;
        }

        try{
            $product_cat_name = Category::findOrFail($request->category_id)->name;

            Product::findOrFail($id)->update([
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => $request->name,
                'category_id' => $request->category_id,
                'category_name' => $product_cat_name,
                "title" => $request->title,
                "sub_title" => $request->sub_title,
                "price" => $request->price,
                "description" => $request->description,
                "ref" => $request->ref,
                "available" => $request->available,
                'image' => $last_img
            ]);

            return response()->json(['success' => 'Product Edited'], 200);

        }catch(ModelNotFoundException $e){
            return response()->json(['error' => 'Product non-existent'],401);
        }
    }

    public function prodShow(){
        return Product::all();
    }

    public function prodShowId($id){
        try{
            return Product::findOrFail($id);
        }catch(ModelNotFoundException $e){
            return response()->json(['error' => 'Product non-existent'],401);
        }
    }

    public function prodDelete($id){
        try
        {
            $prodId = Product::findOrFail($id);
            $old_img = $prodId->image;
            unlink(public_path($old_img));
            $prodId->delete();
            return response()->json(['success' => 'Product deleted'],200);
        }
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => 'Product non-existent'],401);
        }

    }
}
