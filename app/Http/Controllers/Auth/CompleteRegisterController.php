<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CompleteRegisterController extends Controller
{
    public function show(Request $request)
    {
        DB::table(config('auth.passwords.users.table'))
        ->where('email', $request->email)
        ->update(['created_at' => now()]);

        $user = User::where('email', $request->email)->first();

        $user->email_verified_at = now();
        $user->save();

        return $user;
    }
}
