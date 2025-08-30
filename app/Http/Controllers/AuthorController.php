<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
      public function index()
    {
        $authors = Author::all();
        return view('frontend.authors.index', compact('authors'));
    }

    public function show($id)
    {
        $author = Author::with('books')->findOrFail($id);
        return view('frontend.authors.show', compact('author'));
    }
}
