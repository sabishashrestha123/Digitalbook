<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookBorrow;
use App\Models\BookIssue;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $book = Book::count();
        $student =User:: where('role','student')->count();
        $issuebook=BookBorrow::where('is_returned',0)->count();
        $returnbook=BookBorrow::where('is_returned',1)->count();
        $available_books =$book - $issuebook;
        $totalFee=BookBorrow::sum('late_fee');
        return view('backend.index',compact('book','student','returnbook','issuebook','available_books','totalFee'));
    }
}
