@extends('frontend.layouts.master')
@section('content')

<div class="login-container">
    <h3>Student Registration</h3>
    <form action="{{ route('admin.student-register.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your full name">
        </div>
        <div class="mb-3">
            <label for="Symbol_no" class="form-label">Symbol No</label>
            <input type="text" class="form-control" name="Symbol_no" placeholder="Enter your Symbol No">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Confirm password</label>
            <input type="password" class="form-control" name="password_confirmation"  placeholder="Enter your confirm password">
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="{{ route('studentLogin') }}" class="text-center">Already have an account?</a>
        </div>
    </form>
</div>




@endsection
