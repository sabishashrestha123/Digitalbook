<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookBorrow\StoreBookborrowRequest;
use App\Models\Book;
use App\Models\BookBorrow;
use App\Models\BookCategory;
use App\Models\User;
use Illuminate\Http\Request;

class BookBorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookBorrows=BookBorrow::latest()->get();
        return view('backend.bookBorrow.index', compact('bookBorrows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::where('status',1)->where('role','student')->latest()->get();
        $books=Book::where('status',1)->latest()->get();
        return view('backend.bookBorrow.create',compact('users','books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookborrowRequest $request)
    {
        BookBorrow::create($request->validated());
        toast('Book borrowed successfully!', 'success');
        return redirect()->route('admin.book-barrow.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookBorrow $bookBorrow)
    {
        $bookBorrow->delete();
        toast('Book borrow deleted successfully!', 'success');
        return back();
    }
    public function updateStatus(BookBorrow $bookBorrow)
    {
       $bookBorrow->update([
           'status' => !$bookBorrow->status
       ]);
       toast('Updated Successfully', 'success');
       return back();
    }
}
