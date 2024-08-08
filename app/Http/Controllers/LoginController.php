<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if (password_verify($request->password, $user->password)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->withErrors('LOGIN GAGAL MASUKIN YG BENER');
        }
    }
}