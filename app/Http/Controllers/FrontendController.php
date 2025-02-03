<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        $sliders = Slider::where('status', 1)->latest()->get();
        return view('frontend.index', compact('sliders'));
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

    public function showByCategory(BookCategory $bookCategory)
    {
        $bookCategory->load(['semesters.books']);
        return view('frontend.bookDetail', compact('bookCategory'));
    }
}
