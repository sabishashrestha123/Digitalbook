<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginpage()
    {
        return view('backend.auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'], // Just validate that the password is required
        ]);

        // Attempt to log the user in
        if (auth()->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            return redirect()->route('admin.index');
        } else {
            return "no no ";
            return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.loginpage');
    }

}
