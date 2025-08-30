@extends('frontend.layouts.master')
@section('content')

<div class="container my-5">
    <h2 class="text-center">B.Sc. in {{ $bookCategory->name }} - Semester Courses</h2>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Semester</th>
                <th>Books</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bookCategory->semesters as $semester)
                <tr>
                    <td>{{ $semester->title }}</td>
                    <td>
                        @if ($semester->books->count() > 0)
                            <ul>
                                @foreach ($semester->books as $book)
                                    <li>
                                        <a href="{{ route('showBook', $book) }}">{{ $book->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <em>No books uploaded for this semester.</em>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center">No semesters available for this category.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
