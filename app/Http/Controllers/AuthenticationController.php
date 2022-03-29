<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class AuthenticationController extends Controller
{

    public function login(Request $request)
    {
        if (!Auth::attempt($request->all())) {
            return $this->respondUnauthorized('Login details are incorrect.');
        }

        $user = auth()->user();
        $token = $user->createToken('login')->plainTextToken;

        return $this->withResource(
//            UserResource::make($user)
//                ->additional(['token' => $token]),
        )->send();
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
