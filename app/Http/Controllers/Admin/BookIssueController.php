<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookIssue\StoreBookIssueRequest;
use App\Http\Requests\BookIssue\UpdateBookIssueRequest;
use App\Models\Book;
use App\Models\BookIssue;
use App\Models\User;
use Illuminate\Http\Request;

class BookIssueController extends Controller
{
    public function index()
    {
        $bookIssues = BookIssue::with('user', 'book')->latest()->get();
        return view('backend.bookissue.index', compact('bookIssues'));
    }
    public function create()
    {
        $users = User::all();
        $books = Book::all();
        return view('backend.bookissue.create', compact('users', 'books'));
    }
    public function store(StoreBookIssueRequest $request)
    {
        BookIssue::create($request->validated());
        toast('Book Issue added successfully!', 'success');
        return redirect()->route('admin.book-issues.index');

    }
    public function show(BookIssue $bookIssue)
    {
        $bookIssue->load('user', 'book');
        return view('backend.bookissue.view', compact('bookIssue'));
    }

    public function edit(BookIssue $bookIssue)
    {
        $bookIssue->load('user', 'book');
        return view('backend.bookissue.edit', compact('bookIssue'));
    }

    public function update(UpdateBookIssueRequest $request, string $id)
    {
        $bookIssue = BookIssue::find($id);
        $bookIssue->update($request->validated());
        toast('Book Issue updated successfully!', 'success');
        return redirect()->route('admin.book-issues.index');
    }
    public function destroy(BookIssue $bookIssue)
    {


        $bookIssue->delete();
        toast('Book Issue deleted successfully!', 'success');
        return redirect()->route('admin.book-issues.index');
    }
}
