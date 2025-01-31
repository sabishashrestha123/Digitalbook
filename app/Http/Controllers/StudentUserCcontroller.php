<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentUser\StoreStudentUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentUserCcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role','student')->latest()->get();
        return view('backend.studentuser.index',compact('users'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentUserRequest $request)
    {

        User::create(array_merge($request->validated(), ['password' => Hash::make($request->password), 'role' => 'student']));
        toast('You are  registered Successfully','success');
        return to_route('studentLogin');
    }


    public function show(string $id)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if($user->status ==1)
        {
            toast('status is on you cant make delete user','error');
            return back();
        }

        $user->delete();
        toast('User deleted successfully','success');
        return back();
    }
    public function updateStatus(User $user)
    {
        $user->update([
            'status' => !$user->status
        ]);
        toast('Updated Successfully', 'success');
        return back();
    }

}
