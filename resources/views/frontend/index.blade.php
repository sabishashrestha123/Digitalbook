@extends('frontend.layouts.master')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            @foreach ($sliders as $index => $slider)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}"
                    class="{{ $index == 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>

        <div class="carousel-inner">
            @foreach ($sliders as $index => $slider)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ asset($slider->image) }}" class="d-block w-100" height="600"
                        alt="Slide {{ $index + 1 }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $slider->title }}</h5>
                        <p>{{ $slider->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" style="top:20rem;" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" style="top:20rem;" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>





    <section class="testimonial-section">
        <div class="container">
            <h2 class="text-center mt-5 section-title">What Our Users Say</h2>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    @foreach ($feedbacks as $index => $feedback)
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $index }}"
                            class="{{ $index == 0 ? 'active' : '' }}"></button>
                    @endforeach
                </div>

                <!-- Carousel Inner (Testimonial Items) -->
                <div class="carousel-inner">
                    @foreach ($feedbacks as $index => $feedback)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="testimonial-card text-center">
                                        <!-- Avatar -->
                                        <div class="avatar-container">
                                            <img src="{{ $feedback->avatar_url ?? 'default-avatar.jpg' }}" alt="{{ $feedback->name }}"
                                                class="avatar">
                                        </div>

                                        <!-- Rating -->
                                        <div class="rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="fas fa-star {{ $i <= $feedback->rating ? 'text-warning' : 'text-muted' }}"></i>
                                            @endfor
                                        </div>

                                        <!-- Testimonial Text -->
                                        <p class="testimonial-text">
                                            "{{ $feedback->message }}"
                                        </p>

                                        <!-- User Info -->
                                        <div class="user-info">
                                            <h5>{{ $feedback->name }}</h5>
                                            <p>{{ $feedback->course ?? 'No Course Information' }}</p> <!-- Display Course or Default Text -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" style="top:15rem;" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" style="top:15rem; border-radius:50%" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
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
