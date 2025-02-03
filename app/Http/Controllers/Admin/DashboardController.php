<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $book = Book::count();
        $student =User:: where('role','student')->count();
        return view('backend.index',compact('book','student'));
    }
}
