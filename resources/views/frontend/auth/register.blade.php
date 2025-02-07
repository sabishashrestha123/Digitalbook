@extends('frontend.layouts.master')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4 rounded-4" style="width: 400px;">
            <h3 class="text-center mb-3 fw-bold">Student Registration</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('studentLog') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-medium">Full Name</label>
                    <input type="text" class="form-control rounded-pill" id="name" name="name"
                        value="{{ old('name') }}" placeholder="Enter your full name">
                </div>

                <div class="mb-3">
                    <label for="Symbol_no" class="form-label fw-medium">Symbol No</label>
                    <input type="text" class="form-control rounded-pill" id="Symbol_no" name="Symbol_no"
                        value="{{ old('Symbol_no') }}" placeholder="Enter your Symbol No">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-medium">Email</label>
                    <input type="email" class="form-control rounded-pill" id="email" name="email"
                        value="{{ old('email') }}" placeholder="Enter your email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-medium">Password</label>
                    <input type="password" class="form-control rounded-pill" id="password" name="password"
                        placeholder="Enter your password">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label fw-medium">Confirm Password</label>
                    <input type="password" class="form-control rounded-pill" id="password_confirmation"
                        name="password_confirmation" placeholder="Confirm your password">
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary rounded-pill fw-bold">Register</button>
                </div>

                <p class="text-center mt-3">
                    Already have an account?
                    <a href="{{ route('studentLogin') }}" class="text-decoration-none fw-medium text-primary">Login</a>
                </p>
            </form>
        </div>
    </div>
@endsection
