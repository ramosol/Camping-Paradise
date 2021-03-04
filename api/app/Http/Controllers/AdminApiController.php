<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class AdminApiController extends Controller
{
    public function userAdminShowAll()
    {
        return User::all();
    }

    public function userAdminShowId($id)
    {
        try {
            return User::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'User non-existent'], 401);
        }
    }

    public function userAdminEdit(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        if ($request->email_verified_at == "1") {
            $email_verified_at = Carbon::now();
        } else {
            $email_verified_at = null;
        }

        try {
            User::findOrFail($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'email_verified_at' => $email_verified_at,
                'password' => Hash::make($request->password),
                'updated_at' => Carbon::now(),
                'is_admin' => $request->is_admin
            ]);

            return response()->json(['success' => 'User edited'], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'User non-existent'], 401);
        }

    }

    public function userAdminDelete($id)
    {
        try {
            User::findOrFail($id)->delete();
            return response()->json(['success' => 'User deleted'], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'User non-existent'], 401);
        }

    }
}
