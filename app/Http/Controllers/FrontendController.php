<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function studentLogin()
    {
        return view('frontend.auth.login');
    }

    public function studentRegistration()
    {
        return view('frontend.auth.register');
    }
    public function adminlogin()
    {
        return view('frontend.auth.adminlogin');
    }
    public function csit()
    {
        return view('frontend.csit');
    }
    public function feedback()
    {
        return view('frontend.feedback');
    }
    public function librarian()
    {
        return view('frontend.auth.librarian');
    }
    public function bca()
    {
        return view('frontend.bca');
    }
    public function back()
    {
        return view('backend.index');
    }

}