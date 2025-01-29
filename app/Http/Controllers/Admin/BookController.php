<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Requests\Book\UpdateBookRequest;
use App\Models\Book;
use App\Models\BookCategory;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::latest()->get();
        return view('backend.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bookCategories = BookCategory::latest()->get();
     return view('backend.book.create', compact('bookCategories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        Book::create($request->validated());
        toast('Book added successfully!', 'success');
        return redirect()->route('admin.books.index');

    }


    public function show(Book $book)
    {

        return view('backend.book.view', compact('bookCategory', 'books'));
    }

    public function edit(Book $book)
    {
        // dd($book);
        $bookCategories = BookCategory::latest()->get();
        return view('backend.book.edit', compact('book', 'bookCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());
        toast('Book updated successfully!', 'success');
        return redirect()->route('admin.books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        toast('Book deleted successfully!', 'success');
        return redirect()->route('admin.books.index');
    }

}
