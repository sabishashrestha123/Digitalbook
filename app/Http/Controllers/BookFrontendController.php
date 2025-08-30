<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookFrontendController extends Controller
{
        public function index()
    {
        $books = Book::latest()->paginate(9);
        return view('frontend.books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('frontend.books.show', compact('book'));
    }
}

