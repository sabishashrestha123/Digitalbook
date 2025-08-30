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
    </div>





<div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <!-- Indicators -->
    <div class="carousel-indicators">
        @foreach ($feedbacks as $index => $feedback)
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $index }}"
                    class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
        @foreach ($feedbacks as $index => $feedback)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <div class="testimonial-card text-center mx-auto" style="max-width: 600px;">
                  <img src="{{ asset('storage/' . $feedback->image) }}" alt="Feedback Image" />

                    <h5>{{ $feedback->name }}</h5>
                    <p class="text-muted">{{ $feedback->faculty ?? 'Unknown' }}</p>
                    <p class="fst-italic">"{{ $feedback->message }}"</p>
                    <div class="text-warning">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star {{ $i <= $feedback->rating ? '' : 'text-muted' }}"></i>
                        @endfor
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Auto Slide Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var carouselElement = document.getElementById('testimonialCarousel');
        new bootstrap.Carousel(carouselElement, {
            interval: 5000,
            wrap: true
        });
    });
</script>

@endsection
