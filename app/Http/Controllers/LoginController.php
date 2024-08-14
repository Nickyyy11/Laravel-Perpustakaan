<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $credentials = $request->only(['email' => $email, 'password' => $request->password]);
        $user = User::where('email', $email)->first();
        Alert::success('Selamat Anda Login', 'Success');
        if (!$user) {
            Alert::error('UPSSSS', 'Mohon Periksa Kembali');
            return redirect()->back()->withError('Login gagal');

            }
        if (password_verify($request->password, $user->password)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');


        }
        else {
            Alert::error('UPSSSS', 'Mohon Periksa Kembali');
            return redirect()->back()->withErrors('LOGIN GAGAL MASUKIN YG BENER');
        }
    }
}