@extends('frontend.layouts.master')

@section('content')
<div class="container my-5">
    <div class="text-center mb-4">
        <h2>{{ $author->name }}</h2>
        @if ($author->bio)
            <p class="text-muted">{{ $author->bio }}</p>
        @endif
    </div>

    <h4 class="mb-3">Books by {{ $author->name }}:</h4>
    @if ($author->books->isEmpty())
        <p>No books found for this author.</p>
    @else
        <div class="row">
            @foreach ($author->books as $book)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ Str::limit($book->description, 100) }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-sm btn-primary">View Book</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
