@extends('frontend.layouts.master')
@section('content')

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="form-container col-md-6 col-lg-10">
        <h2 class="text-center mb-4">Student Feedback</h2>
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="username" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Faculty with Level</label>
                <input type="text" class="form-control" id="class" placeholder="Enter your class">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave your comments here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


    </div>
@endsection
