@extends('frontend.layouts.master')
@section('content')

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card shadow-lg p-5 col-md-8"
            style="border-radius: 20px; background: linear-gradient(135deg, #f9f9f9, #e3f2fd);">
            <h2 class="text-center mb-4 text-dark fw-bold">Student Feedback</h2>

            <form action="{{ route('feedbackPost') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="username" class="form-label">Student Name</label>
                        <input type="text" class="form-control rounded-pill @error('name') is-invalid @enderror"
                            name="name" id="username" placeholder="Enter your name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control rounded-pill @error('email') is-invalid @enderror"
                            name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control rounded-pill @error('phone') is-invalid @enderror"
                            name="phone" id="phone" placeholder="Enter your phone number" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="faculty" class="form-label">Faculty with Level</label>
                        <input type="text" class="form-control rounded-pill @error('faculty') is-invalid @enderror"
                            name="faculty" id="faculty" placeholder="Enter your class" value="{{ old('faculty') }}">
                        @error('faculty')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control rounded-pill @error('subject') is-invalid @enderror"
                            name="subject" id="subject" placeholder="Enter subject name" value="{{ old('subject') }}">
                        @error('subject')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Rating</label>
                        <div class="star-rating d-flex gap-2 justify-content-center">
                            @for ($i = 5; $i >= 1; $i--)
                                <input type="radio" name="rating" id="star{{ $i }}"
                                    value="{{ $i }}" {{ old('rating') == $i ? 'checked' : '' }}>
                                <label for="star{{ $i }}">&#9733;</label>
                            @endfor
                        </div>
                        @error('rating')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control rounded-3 @error('message') is-invalid @enderror" name="message" id="comments"
                        style="height: 120px">{{ old('message') }}</textarea>
                    <label for="comments">Comments</label>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 rounded-pill fw-bold">Submit</button>
            </form>
        </div>
    </div>

    <style>
        .star-rating {
            direction: rtl;
            font-size: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            color: gray;
            cursor: pointer;
            transition: color 0.2s;
            font-size: 35px;
        }

        .star-rating input:checked~label,
        .star-rating label:hover,
        .star-rating label:hover~label {
            color: gold;
        }

        .card {
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        }
    </style>

@endsection
