<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;

class VerificationApiController extends Controller
{
    use VerifiesEmails;

    public function verify(Request $request)
    {
        $userID = $request['id'];
        $user = User::findOrFail($userID);
        $date = date('Y-m-d g:i:s');
        $user->email_verified_at = $date;
        $user->save();
        return response()->json('Email verified!');
    }

    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return response()->json('User already have verified email!', 422);
// return redirect($this->redirectPath());
        }
        $request->user()->sendEmailVerificationNotification();
        return response()->json('The notification has been resubmitted');
// return back()->with(‘resent’, true);
    }
}
