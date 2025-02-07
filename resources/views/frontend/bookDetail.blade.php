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
                    @foreach ($bookCategory->semesters as $semester)
                    <tr>
                        <td>{{ $semester->title }}</td>
                        <td>
                            @foreach ($semester->books as $book)
                            <ul>
                                <li>
                                    <a href="{{ route('showBook',$book) }}">{{ $book->title }}</a>
                                </li>

                            </ul>
                            @endforeach
                        </td>
                    </tr>
                    @endforeach

                </tbody>

        </table>
    </div>
@endsection
