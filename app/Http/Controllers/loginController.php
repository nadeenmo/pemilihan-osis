<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'SatuSuara',
        ];
        return view('login.index', $data);
    }
    public function loginAdmin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Validasi login admin
        if ($credentials['username'] === 'admin' && $credentials['password'] === 'admin123') {
            Auth::loginUsingId(1);
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    public function loginUser (Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Validasi login user
        if ($credentials['username'] === 'user' && $credentials['password'] === 'user123') {
            // Simulasi login user
            Auth::loginUsingId(2);
            return redirect()->intended('user/dashboard'); // Redirect ke dashboard user
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/login', 302);
    }
}