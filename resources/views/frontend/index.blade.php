@extends('frontend.layouts.master')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.pixel-studios.com/blog/wp-content/uploads/2018/12/012-1200x600.jpg"
                    class="d-block w-100" height="600" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Welcome to our Nepalgunj Campus library management system.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.pixel-studios.com/blog/wp-content/uploads/2018/12/012-1200x600.jpg"
                    class="d-block w-100" height="600" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Here, we have CSIT and BCA books.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.pixel-studios.com/blog/wp-content/uploads/2018/12/012-1200x600.jpg"
                    class="d-block w-100" height="600" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Thank you for visiting our website.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" style="top:20rem;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" style="top:20rem;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>





    <section class="testimonial-section">
        <div class="container">
            <h2 class="text-center mt-5 section-title">What Our Users Say</h2>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0"
                        class="active"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
                </div>

                <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimonial-card text-center">
                                    <div class="avatar-container">
                                        <img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aW1hZ2V8ZW58MHx8MHx8fDA%3D" alt="Ram Bahadur BC" class="avatar">
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="testimonial-text">
                                        "This library management system has significantly improved our efficiency. We can
                                        now easily track books, members, and overdue items."
                                    </p>
                                    <div class="user-info">
                                        <h5>Ram Bahadur BC</h5>
                                        <p>CSIT, 7th sem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card text-center">
                                    <div class="avatar-container">
                                        <img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aW1hZ2V8ZW58MHx8MHx8fDA%3D" alt="Jane Smith" class="avatar">
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p class="testimonial-text">
                                        "The interface is incredibly user-friendly and intuitive. It has streamlined our
                                        entire library management process."
                                    </p>
                                    <div class="user-info">
                                        <h5>Jane Smith</h5>
                                        <p>Library Administrator</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card text-center">
                                    <div class="avatar-container">
                                        <img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aW1hZ2V8ZW58MHx8MHx8fDA%3D" alt="Mike Johnson" class="avatar">
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="testimonial-text">
                                        "The automated notification system has helped us reduce overdue books by 75%.
                                        Excellent system!"
                                    </p>
                                    <div class="user-info">
                                        <h5>Mike Johnson</h5>
                                        <p>Senior Librarian</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Slide -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimonial-card text-center">
                                    <div class="avatar-container">
                                        <img src="/api/placeholder/100/100" alt="Sarah Wilson" class="avatar">
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="testimonial-text">
                                        "The reporting features are exceptional. I can generate detailed analytics about
                                        book circulation with just a few clicks."
                                    </p>
                                    <div class="user-info">
                                        <h5>Sarah Wilson</h5>
                                        <p>Library Director</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card text-center">
                                    <div class="avatar-container">
                                        <img src="/api/placeholder/100/100" alt="David Chen" class="avatar">
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="testimonial-text">
                                        "Managing multiple library branches has become effortless with this system. Great
                                        work!"
                                    </p>
                                    <div class="user-info">
                                        <h5>David Chen</h5>
                                        <p>Branch Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card text-center">
                                    <div class="avatar-container">
                                        <img src="/api/placeholder/100/100" alt="Emma Thompson" class="avatar">
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p class="testimonial-text">
                                        "The mobile app integration makes it easy for students to check book availability
                                        and reserve items."
                                    </p>
                                    <div class="user-info">
                                        <h5>Emma Thompson</h5>
                                        <p>Student Representative</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <button class="carousel-control-prev" style="top:15rem;" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" style="top:15rem; border-radius:50%" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myCarousel = new bootstrap.Carousel(document.getElementById('testimonialCarousel'), {
                    interval: 5000, // Change slides every 5 seconds
                    wrap: true // Continue cycling from the beginning
                });
            });
        </script>
    @endpush
@endsection
