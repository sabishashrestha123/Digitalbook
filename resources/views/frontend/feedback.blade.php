<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Feedback</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        body {
            background: linear-gradient(135deg, #e0f2f7, #f7eff7); /* Softer, modern gradient */
            font-family: 'Poppins', sans-serif; /* Modern, clean font */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Use min-height for responsiveness */
            margin: 0;
            padding: 20px; /* Add some padding for smaller screens */
            box-sizing: border-box; /* Include padding in element's total width/height */
        }

        .card {
            border-radius: 25px; /* More pronounced border-radius */
            background: linear-gradient(145deg, #ffffff, #f0f0f0); /* Subtle inner gradient */
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15); /* Stronger, softer shadow */
            padding: 40px 50px; /* More generous padding */
            max-width: 800px; /* Allow it to be a bit wider */
            width: 100%; /* Ensure it takes full width within max-width */
            border: none; /* Remove default bootstrap border */
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px); /* Slight lift on hover */
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        h2 {
            font-weight: 700; /* Bolder for impact */
            color: #333; /* Darker text */
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 10px;
        }

        h2::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background-color: #007bff; /* Accent color */
            border-radius: 2px;
        }

        .form-label {
            font-weight: 600; /* Slightly bolder labels */
            color: #555;
            margin-bottom: 8px; /* Space between label and input */
        }

        .form-control {
            border-radius: 12px; /* Smoother rounded corners for inputs */
            border: 1px solid #ddd;
            padding: 12px 18px; /* More comfortable input padding */
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05); /* Subtle inner shadow */
            transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .form-control:focus {
            border-color: #80bdff; /* Bootstrap's focus color */
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25), inset 0 1px 3px rgba(0, 0, 0, 0.08); /* Enhanced focus shadow */
            outline: 0;
        }

        textarea.form-control {
            resize: vertical; /* Allow vertical resizing */
            min-height: 100px; /* Ensure a decent starting height */
        }

        .form-control.is-invalid {
            border-color: #dc3545;
        }

        .invalid-feedback {
            font-size: 0.875em;
            margin-top: 0.25rem;
        }

        .star-rating {
            direction: rtl;
            font-size: 28px; /* Slightly larger stars */
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px; /* Space between stars */
            padding: 10px 0;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            color: #bbb; /* Lighter gray for unselected stars */
            cursor: pointer;
            transition: color 0.2s ease-in-out, transform 0.2s ease-in-out;
            font-size: 35px; /* Keep font size consistent with your original */
        }

        .star-rating label:hover,
        .star-rating label:hover~label {
            color: #ffc107; /* Gold color */
            transform: scale(1.1); /* Slight pop on hover */
        }

        .star-rating input:checked~label {
            color: #ffc107; /* Gold color for checked stars */
        }

        /* Adjust the active star for the testimonial display (Font Awesome) */
        .testimonial-card .fas.fa-star {
            color: #ffc107;
        }

        .testimonial-card .fas.fa-star.text-muted {
            color: #bbb !important; /* Override text-muted if present for unselected stars */
        }


        .btn-primary {
            background-color: #007bff; /* Bootstrap primary blue */
            border-color: #007bff;
            padding: 12px 25px; /* Larger button */
            font-size: 1.1em;
            font-weight: 600;
            border-radius: 50px; /* Fully rounded pill button */
            transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.2);
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
            transform: translateY(-2px); /* Slight lift */
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card {
                padding: 30px;
            }

            h2 {
                font-size: 1.8em;
            }

            .star-rating label {
                font-size: 30px;
            }

            .btn-primary {
                padding: 10px 20px;
                font-size: 1em;
            }
        }

        @media (max-width: 576px) {
            .card {
                padding: 20px;
                margin: 10px; /* Add margin to prevent sticking to edges */
            }

            h2 {
                font-size: 1.5em;
                margin-bottom: 20px;
            }

            .star-rating label {
                font-size: 25px;
            }

            .btn-primary {
                font-size: 0.9em;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
             <a href="{{ route('front.index') }}" class="back-button">
                <i class="fas fa-arrow-left"></i> Back to Home
            </a>
            <h2 class="text-center">Customer Feedback</h2>

            <form action="{{ route('feedbackPost') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="username" class="form-label">Student Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" id="username" placeholder="Enter your name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" id="phone" placeholder="Enter your phone number"
                            value="{{ old('phone') }}">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="faculty" class="form-label">Faculty with Level</label>
                        <input type="text" class="form-control @error('faculty') is-invalid @enderror"
                            name="faculty" id="faculty" placeholder="e.g., Science - Grade 12" value="{{ old('faculty') }}">
                        @error('faculty')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror"
                            name="subject" id="subject" placeholder="e.g., Mathematics"
                            value="{{ old('subject') }}">
                        @error('subject')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Upload Photo</label>
                        <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label text-center w-100">Your Rating</label>
                    <div class="star-rating">
                        @for ($i = 5; $i >= 1; $i--)
                            <input type="radio" name="rating" id="star{{ $i }}"
                                value="{{ $i }}" {{ old('rating') == $i ? 'checked' : '' }}>
                            <label for="star{{ $i }}"><i class="fas fa-star"></i></label>
                        @endfor
                    </div>
                    @error('rating')
                        <div class="text-danger text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="comments" class="form-label">Your Feedback Message</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="comments"
                        placeholder="Share your thoughts and experience..." style="height: 120px">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit Feedback</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
