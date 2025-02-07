<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks=Feedback::latest()->get();
        return view('backend.feedback.index',compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        return view('backend.feedback.view',compact('feedback'));
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        toast('delete_feedback','success');
        return back();
    }
    public function updateStatus(Feedback $feedback)
    {
       $feedback->update([
           'status' => !$feedback->status
       ]);
       toast('Updated Successfully', 'success');
       return back();
    }
}
