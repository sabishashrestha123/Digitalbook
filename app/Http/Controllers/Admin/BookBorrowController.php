<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookBorrow\StoreBookborrowRequest;
use App\Http\Requests\BookBorrow\UpdateBookborrowRequest;
use App\Models\Book;
use App\Models\BookBorrow;
use App\Models\BookCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookBorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookBorrows = BookBorrow::latest()->get();
        return view('backend.bookBorrow.index', compact('bookBorrows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('status', 1)->where('role', 'student')->latest()->get();
        $books = Book::where('status', 1)->latest()->get();
        return view('backend.bookBorrow.create', compact('users', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookborrowRequest $request)
    {
        BookBorrow::create($request->validated());
        toast('Book borrowed successfully!', 'success');
        return redirect()->route('admin.book-borrow.index');
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
    public function edit(BookBorrow $bookBorrow)
    {

        $users = User::all();
        $books = Book::all();
        return view('backend.bookBorrow.edit', compact('bookBorrow', 'users', 'books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookborrowRequest $request, BookBorrow $bookBorrow)
    {
        $bookBorrow->update($request->validated());
        toast('Book borrow updated successfully!', 'success');
        return to_route('admin.book-borrow.index');
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
        if ($bookBorrow->is_returned) {
            toast('Book already returned!', 'error');
            return back();
        }

        $returnDate = Carbon::parse($bookBorrow->return_date);
        $today = Carbon::now();

        if ($today->gt($returnDate)) {
            return redirect()->route('admin.book-borrow.showLateFeeForm', $bookBorrow);
        }

        // If no late fee, mark as returned
        $bookBorrow->update(['is_returned' => 1]);
        toast('Book returned successfully!', 'success');
        return back();
    }

    public function showLateFeeForm(BookBorrow $bookBorrow)
{
    $returnDate = Carbon::parse($bookBorrow->return_date);
    $today = Carbon::now();

    $overdueDays = $today->gt($returnDate)
        ? $today->diffInDays($returnDate)
        : 0;

    // Force integer value
    $lateFee = (int)($overdueDays * 5);

    return view('backend.bookBorrow.late_fee_form', compact('bookBorrow', 'lateFee'));
}
    public function processLateFee(Request $request, BookBorrow $bookBorrow)
    {
        $request->validate([
            'paid_amount' => 'required|numeric|min:' . $request->late_fee
        ]);

        $bookBorrow->update([
            'is_returned' => 1,
            'late_fee' => $request->paid_amount
        ]);

        toast('Late fee paid and book marked as returned!', 'success');
        return redirect()->route('admin.book-borrow.index');
    }
}
