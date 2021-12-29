<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $response = [
            'status' => false,
            'message' => 'There was an error'
        ];

        $user = User::select('*')->where('email', $request->email)->first();

        if ($user) {
            if (isset($request->password) && !password_verify($request->password, $user->password)) {
                $response['message'] = "Invalid Password";
            } else {
                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {
                    $response['status'] = true;
                    $response['message'] = 'Succesfully Login';
                    $response['user'] = Auth::user();
                }
            }
        } else {
            $response['message'] = "Account does not exist";
        }
 
        return $response;
    }

    public function logout()
    {
        $response = [
            'status' => false
        ];

        if (Auth::logout()) {
            $response['status'] = true;
        }

        return $response;
    }
}
