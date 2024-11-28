<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //buat function index
    public function index()
    {
        return view('login');
    }
    public function actionLogin(Request $request)
    {
        $credential = $request ->only(['email', 'password']);
        //AUTH
        // attempt buat ngecek
        if(Auth::attempt($credential)){
            return redirect()->intended('dashboard');
        }else{
            return back()->withErrors(['email' => 'Mohon periksa kembali email dan password Anda!'])->withInput();

        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->to ('login');
    }
}
