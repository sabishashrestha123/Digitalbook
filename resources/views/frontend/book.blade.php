@extends('frontend.layouts.master')

@section('content')

<!-- Book Search Section -->
<section class="search-section my-5">
    <div class="container">
        <form action="{{ route('book.search') }}" method="GET" class="d-flex justify-content-center">
            <input type="search" name="search" class="form-control w-50" placeholder="Search for books..." aria-label="Search" value="{{ request()->input('search') }}">
            <button type="submit" class="btn btn-outline-primary ms-2">Search</button>
        </form>
    </div>
</section>

<!-- Books Section -->
<section class="books-section py-5">
    <div class="container">
        @if($books->isEmpty())
            <div class="alert alert-warning text-center" role="alert">
                No books found for your search query.
            </div>
        @else
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($books as $book)
                    <div class="col">
                        <div class="card h-100 shadow-sm border-light rounded-3">
                            <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $book->title }}" style="object-fit: cover; height: 250px;">
                            <div class="card-body">
                                <h5 class="card-title text-primary">{{ $book->title }}</h5>
                                <p class="card-text text-muted">{{ $book->author }}</p>
                                <a href="{{ route('showBook', $book) }}" class="btn btn-outline-primary mt-3 w-100">View Book</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

@endsection
