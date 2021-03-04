<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acti;
use Validator;
use Carbon\Carbon;

class ActiController extends Controller
{
    public function add(Request $request){
        $validator = Validator::make($request->all(),[
            'user_id' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()],401);
        }

        Acti::insert([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return response()->json(['success' => 'Activity added'], 200);
    }

    public function show(){
        return Acti::all();
    }
}
