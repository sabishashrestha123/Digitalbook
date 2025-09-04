<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.Sc. {{ $bookCategory->name }} - Semester Courses</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        h2 {
            margin-bottom: 30px;
            font-weight: 600;
        }
        table th, table td {
            vertical-align: middle;
        }
        ul {
            padding-left: 20px;
        }
        a.book-link {
            text-decoration: none;
            color: #0d6efd;
        }
        a.book-link:hover {
            text-decoration: underline;
        }
        .no-books {
            font-style: italic;
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">B.Sc. in {{ $bookCategory->name }} - Semester Courses</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
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
                                    <ul class="mb-0">
                                        @foreach ($semester->books as $book)
                                            <li>
                                                <a href="{{ route('showBook', $book) }}" class="book-link">
                                                    {{ $book->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <span class="no-books">No books uploaded for this semester.</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center no-books">No semesters available for this category.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
