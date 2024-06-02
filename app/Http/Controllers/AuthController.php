<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('Personal Access Token')->plainTextToken;

            return response()->json([
                'token' => $token,
                'user' => $user,
            ]);
        }

        return response()->json([
            'error' => 'Unauthorized',
        ], 401);
    }
// role based 
    public function userdetails(Request $request){
        // $user = User::where('id',Auth::user())->get();
        return response()->json([
            // 'token' => $token,
            'user' => $request->user(),
        ]);

    }

    public function success(Request $request){
        // $user = User::where('id',Auth::user())->get();
        return response()->json([
            'token' => 'aaaahhhhehehheheeheh',
            'user' => $request->user(),
        ]);

    }
}
