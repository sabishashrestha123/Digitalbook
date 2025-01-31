<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Semester\StoreSemesterRequest;
use App\Http\Requests\Semester\UpdateSemesterRequest;
use App\Models\BookCategory;
use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semesters=Semester::with('bookCategory')->latest()->get();
        return view('backend.semester.index',compact('semesters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bookCategories=BookCategory::latest()->get();
        return view('backend.semester.create',compact('bookCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSemesterRequest $request)
    {
        Semester::create($request->validated());
        toast('Semester added successfully!','success');
        return to_route('admin.semester.index');
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
    public function edit(Semester $semester)
    {
        $bookCategories = BookCategory::all(); // Fetch all book categories

        return view('backend.semester.edit', compact('semester', 'bookCategories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSemesterRequest $request, Semester $semester)
    {
        $semester->update($request->validated());
        toast('Semester updated successfully!','success');
        return to_route('admin.semester.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semester $semester)
    {
        $semester->delete();
        toast('Semester deleted successfully!','success');
        return back();
    }
    public function updateStatus(Semester $semester)
    {
       $semester->update([
           'status' => !$semester->status
       ]);
       toast('Updated Successfully', 'success');
       return back();
    }
}
