<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Requests\Book\UpdateBookRequest;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Semester;

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
        $semesters = Semester::latest()->get();
     return view('backend.book.create', compact('bookCategories','semesters'));
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
    $bookCategories = BookCategory::all();
    $semesters = Semester::all();

    return view('backend.book.view', compact('book', 'bookCategories', 'semesters'));
}


    public function edit(Book $book)
    {
        // dd($book);
        $bookCategories = BookCategory::latest()->get();
        $semesters = Semester::latest()->get();
       return view('backend.book.edit', compact('book', 'bookCategories', 'semesters'));

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
