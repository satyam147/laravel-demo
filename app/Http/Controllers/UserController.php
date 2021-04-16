<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration()
    {
        return view('Auth.register');
    }


    public function register(Request $request)
    {
        $request->validate([
            'username' => ['required','unique:users'],
            'password' => ['required']
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            return response()->json([
                'status' => true
            ]);
        }

        return response()->json([
           'status' => false,
           'msg' => 'Unable to register'
        ]);
    }
}
