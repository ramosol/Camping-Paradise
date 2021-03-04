<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Category;
use Validator;
use DB;

class CategoryController extends Controller
{
    public function catAdd(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:25'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        Category::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return response()->json(['success' => 'Category added'], 200);

    }

    public function catDelete($cat_name){

        $cat_exist = Category::where('name', '=', $cat_name)->count();
        $toDel = Category::where('name',$cat_name);

        if($cat_exist == 1) {
            $toDel->delete();
            return response()->json(['success' => 'Category deleted'], 200);
        }

        return response()->json(['error' => 'Error, something went wrong'],401);
    }

    public function catShow(){
        return Category::all();
    }
}
