<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
        <!-- Logo and Title -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('front.index') }}">
            <img src="https://png.pngtree.com/template/20190316/ourmid/pngtree-books-logo-image_79985.jpg" alt="DBIS Logo"
                style="width: 50px; height: auto;" class="me-2 rounded shadow-sm" />
            <h5 class="mb-0 text-white fw-bold">DBIS</h5>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Items -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link text-white mx-2" href="{{ route('front.index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white mx-2" href="{{ route('books.index') }}">Browse
                        Books</a></li>
                <li class="nav-item"><a class="nav-link text-white mx-2" href="{{ route('authors.index') }}">Authors</a>
                </li>
                <li class="nav-item"><a class="nav-link text-white mx-2" href="#">My Library</a></li>


                <!-- Courses Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white mx-2" href="#" id="coursesDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        @foreach (bookCategories() as $bookCategory)
                            <li>
                                <a class="dropdown-item" href="{{ route('books.by.category', $bookCategory) }}">
                                    {{ $bookCategory->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link text-white mx-2" href="{{ route('feedback') }}">Feedback</a>
                </li>
                <li class="nav-item"><a class="nav-link text-white mx-2" href="{{ route('contactus') }}">Contact Us</a></li>
                <!-- Search Bar -->
                <li class="nav-item mx-2">
                    <form class="d-flex" role="search" action="{{ route('book.search') }}" method="GET">
                        <input class="form-control form-control-sm me-2" type="search" name="search"
                            placeholder="Search books..." value="{{ request()->input('search') }}">
                    </form>
                </li>

                <!-- Authenticated User -->
                @auth
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle fs-5"></i> <span>{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="padding: 0;">
                            <i class="bi bi-person-circle fs-5"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2"
                                    href="{{ route('studentregister') }}">
                                    <i class="bi bi-person-plus"></i> Register
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2"
                                    href="{{ route('studentLogin') }}">
                                    <i class="bi bi-box-arrow-in-right"></i> Login
                                </a>
                            </li>

                        </ul>
                    </li>


                @endauth
            </ul>
        </div>
    </div>
</nav>


<style>
    /* Navbar link hover effect */
    .navbar-nav .nav-link {
        transition: color 0.3s, background-color 0.3s;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link:focus {
        color: #e92121 !important;
        /* Bootstrap info color */
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 6px;
    }

    /* Dropdown item hover effect */
    .dropdown-menu-dark .dropdown-item:hover,
    .dropdown-menu-dark .dropdown-item:focus {
        background-color: #0dcaf0;
        color: #fff;
    }

    /* Active nav link styling (optional) */
    .navbar-nav .nav-link.active {
        color: #0dcaf0 !important;
        font-weight: bold;
    }

    /* Search input styling */
    .navbar form .form-control-sm {
        font-size: 0.9rem;
        padding: 6px 10px;
        border-radius: 6px;
        transition: box-shadow 0.3s ease;
    }

    .navbar form .form-control-sm:focus {
        box-shadow: 0 0 5px rgba(13, 202, 240, 0.8);
        border-color: #0dcaf0;
    }

    /* User icon hover */
    .nav-link .bi-person-circle:hover {
        color: #0dcaf0 !important;
    }
</style>






<section class="hero">
    <div class="hero-content">
        <h1>Welcome to DBIS</h1>
        <p>Your centralized platform for accessing and managing digital books anytime, anywhere.</p>
        <a href="{{ route('books.index') }}" class="btn1">Explore Books</a>
    </div>
</section>

<style>
    .hero {
        background-image: url('https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=800&q=80');
        background-size: cover;
        /* Cover entire section */
        background-position: center;
        /* Center the image */
        background-repeat: no-repeat;
        color: white;
        /* Text color for contrast */
        padding: 120px 20px;
        /* Top & bottom padding for spacing */
        text-align: center;
        border-radius: 12px;
        position: relative;
        overflow: hidden;
        height: 650px;
    }

    /* Optional: add a dark overlay for better text readability */
    .hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        /* black overlay with 50% opacity */
        z-index: 0;
    }

    .hero-content {
        position: relative;
        z-index: 1;
        /* Put content above overlay */
        max-width: 700px;
        margin: 0 auto;
    }

    .btn1 {
        background-color: #38ef7d;
        color: #000;
        padding: 12px 30px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        display: inline-block;
        margin-top: 20px;
        transition: background-color 0.3s ease;
    }

    .btn1:hover {
        background-color: #11998e;
        color: white;
    }
</style>


<section class="features">
    <div class="feature-box">
        <div class="icon">⬇️</div>
        <h3>Download eBooks</h3>
        <p>Access and download books in PDF, EPUB, and MOBI formats.</p>
    </div>
    <div class="feature-box">
        <div class="icon">📖</div>
        <h3>Read Online</h3>
        <p>Read books directly in the browser using our integrated reader.</p>
    </div>
    <div class="feature-box">
        <div class="icon">💡</div>
        <h3>Smart Search</h3>
        <p>Quickly find books by title, author, or category.</p>
    </div>
</section>
