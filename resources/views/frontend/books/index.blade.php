<div class="container-fluid py-5 bg-light-custom">
    <h2 class="text-center mb-5 display-4 fw-bold text-dark-custom">📚 Explore Our Collection</h2>

    <div class="row justify-content-center">
        @foreach ($books as $book)
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card h-100 shadow-lg border-0 rounded-4 overflow-hidden card-hover-effect">
               <img src="{{ $book->cover_image ?? 'https://via.placeholder.com/300x400' }}"
                     alt="{{ $book->title }}"
                     class="img-fluid rounded shadow-lg" style="max-height: 400px;">
                <div class="card-body d-flex flex-column p-4">
                    <h5 class="card-title text-dark-custom fw-bold mb-2">{{ $book->title }}</h5>
                    <p class="card-text text-secondary-custom mb-1"><small>👤 Author: {{ $book->author }}</small></p>
                    <p class="text-muted-custom small flex-grow-1">{{ $book->description }}</p>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary mt-3 align-self-start view-details-btn-browse">📖 View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-5">
        {{ $books->links() }} {{-- Pagination --}}
    </div>
</div>

<style>
    /* Custom Colors and General Styling */
    .bg-light-custom {
        background-color: #f0f2f5 !important; /* Matches the background from the details page */
    }
    .text-dark-custom {
        color: #212529 !important; /* Matches the dark text from the details page */
    }
    .text-secondary-custom {
        color: #6c757d !important; /* Muted gray for author/small text */
    }
    .text-muted-custom {
        color: #495057 !important; /* Slightly darker gray for description */
    }
    body {
        font-family: 'Inter', 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; /* Consistent font stack */
    }

    /* Card Specifics */
    .card {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); /* Stronger, softer shadow for cards */
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        border-radius: 1rem !important; /* More rounded corners, matches details card */
    }
    .card-hover-effect:hover {
        transform: translateY(-8px); /* More pronounced lift on hover */
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15) !important; /* More intense shadow on hover */
    }

    .book-cover-img-browse {
        height: 320px; /* Slightly taller book covers for impact */
        object-fit: cover;
        border-top-left-radius: 1rem; /* Apply border-radius to image corners */
        border-top-right-radius: 1rem;
        transition: transform 0.3s ease-in-out;
    }

    .card-hover-effect:hover .book-cover-img-browse {
        transform: scale(1.05); /* Enhanced zoom effect on image hover */
    }

    .card-body {
        padding: 1.5rem !important; /* Consistent padding inside card body */
    }

    .card-title {
        font-size: 1.35rem; /* Make titles more prominent */
        line-height: 1.3;
    }

    /* View Details Button */
    .view-details-btn-browse {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.3s ease, transform 0.2s ease;
        padding: 0.75rem 1.5rem; /* Larger button padding */
        border-radius: 0.5rem; /* More rounded buttons */
        font-weight: 500;
        display: inline-flex; /* Use flexbox for icon alignment */
        align-items: center;
        justify-content: center;
    }

    .view-details-btn-browse:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        transform: translateY(-3px); /* More pronounced lift on button hover */
        box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3); /* Add a subtle shadow to button on hover */
    }

    .view-details-btn-browse i {
        margin-right: 0.5rem; /* Space between icon and text */
    }

    /* Pagination */
    .pagination .page-item .page-link {
        border-radius: .35rem; /* Slightly more rounded pagination links */
        margin: 0 .3rem; /* More space between links */
        border: 1px solid #dee2e6;
        color: #007bff;
        transition: background-color 0.2s ease, border-color 0.2s ease;
        min-width: 38px; /* Ensure consistent width */
        text-align: center;
    }

    .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        font-weight: bold;
    }

    .pagination .page-item .page-link:hover {
        background-color: #e9ecef;
        border-color: #cddbe7; /* Slightly darker border on hover */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05); /* Subtle shadow on hover */
    }
</style>
