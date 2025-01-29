<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookCategory;
use App\Http\Requests\BookCategory\StoreBookCategoryRequest;
use App\Http\Requests\BookCategory\UpdateBookCategoryRequest;


class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookCategories = BookCategory::latest()->get();
        return view('backend.bookCategory.index', compact('bookCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bookCategory.create');
    }



    public function store(StoreBookCategoryRequest $request)
    {


        BookCategory::create($request->validated());
        toast('Category added successfully!', 'success');
        return redirect()->route('admin.book-categories.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookCategory $bookCategory)
    {
        return view('backend.bookCategory.edit', compact('bookCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookCategoryRequest $request, BookCategory $bookCategory)
    {
        $bookCategory->update($request->validated());
        toast('Category updated successfully!', 'success');
        return redirect()->route('admin.book-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookCategory $bookCategory)
    {
        $bookCategory->delete();
        toast('Category deleted successfully!', 'success');
        return redirect()->route('admin.book-categories.index');
    }

    public function viewBooks(BookCategory $bookCategory)
    {
        $books = $bookCategory->books;
        return view('backend.book.view', compact('bookCategory', 'books'));
    }
}
