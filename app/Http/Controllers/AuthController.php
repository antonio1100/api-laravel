<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // if (!$token = Auth::guard('api')->attempt($credentials)) {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }

        if (Auth::attempt($credentials)) {
	        return 'Logado Correctamente';
	    }else {
            return 'Los datos introducidos no son correctos';
        }

        

        // return response()->json([
        //     // 'token' => $token,
        //     'user' => Auth::guard('api')->user()
        // ]);
    }
}

