@extends('frontend.layouts.master')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Authors</h2>
    <div class="row">
        @foreach ($authors as $author)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $author->name }}</h5>
                        <p class="card-text">{{ Str::limit($author->bio, 100) }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('authors.show', $author->id) }}" class="btn btn-primary btn-sm">View Books</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
