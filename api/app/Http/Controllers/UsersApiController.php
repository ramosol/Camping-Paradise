<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Str;
use Validator;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Events\Verified;
use Carbon\Carbon;

class UsersApiController extends Controller
{
    use VerifiesEmails;

    public $successStatus = 200;

    public function userLogin()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            if ($user->email_verified_at !== NULL) {
                $success['message'] = 'Login successfull';
//                return response()->json(['success' => $success], $this->successStatus);
                $uniqid = Str::random(9);
                return $user->createToken($uniqid)->plainTextToken;
            } else {
                return response()->json(['error' => 'Please Verify Email'], 401);
            }
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function userRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->sendApiEmailVerificationNotification();
        $success['message'] = 'Please confirm yourself by clicking on verify user button sent to you on your email';
        return response()->json(['success' => $success], $this->successStatus);

    }

    public function userInfo(Request $request)
    {
        return $request->user();
    }

    public function userLogout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['success' => "You've been logged out"],200);
    }

    public function userEdit(Request $request)
    {
        $id = Auth::id();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }


        try {
            User::findOrFail($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'updated_at' => Carbon::now(),
            ]);

            return response()->json(['success' => 'Your profil has been updated'], 200);

        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'User non-existent'], 401);
        }

    }

    public function userDelete(){
        $id = Auth::id();
        try {
            User::findOrFail($id)->delete();
            return response()->json(['success' => "You've successfully deleted your account"], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'User non-existent'], 401);
        }
    }
}
