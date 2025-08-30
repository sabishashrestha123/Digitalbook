@extends('frontend.layouts.master')
@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-4">
         <img src="{{ $book->cover_image ?? 'https://via.placeholder.com/300x400' }}"
                     alt="{{ $book->title }}"
                     class="img-fluid rounded shadow-lg" style="max-height: 400px;">
        </div>
        <div class="col-md-8">
            <h2>{{ $book->title }}</h2>
            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>Category:</strong> {{ $book->BookCategory->name ?? 'N/A' }}</p>
            <p><strong>Semester:</strong> {{ $book->Semester->name ?? 'N/A' }}</p>
            <hr>
            <p>{{ $book->description }}</p>

            @if ($book->pdf_url)
                <a href="{{ $book->pdf_url }}" target="_blank" class="btn btn-success mt-3">📥 Download / View PDF</a>
            @endif

            <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">← Back to List</a>
        </div>
    </div>
</div>
@endsection
