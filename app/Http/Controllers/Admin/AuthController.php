<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginpage()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {

            if(Auth::user()->role == 'student'){
                toast('Logged in successfully.', 'success');
                return to_route('front.index');
            }

            toast('Logged in successfully.', 'success');
            return redirect()->route('admin.index');
        }

        toast('Invalid credentials.', 'error');
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function logout()
    {
        $role = Auth::user()->role ?? null;
        Auth::logout();
        toast('Logged out successfully.', 'success');
        if ($role == 'student') {
            return redirect()->route('front.index');
        }
        return redirect()->route('loginpage');
    }

}