<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS (Optional if already globally included) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            min-height: 100vh;
            margin: 0;
        }

        .register-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 40px 15px;
        }

        .register-card {
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 420px;
            animation: fadeIn 0.7s ease;
        }

        .register-card h3 {
            font-weight: 700;
            color: #343a40;
        }

        .form-label {
            font-weight: 500;
            color: #444;
        }

        .form-control {
            padding: 12px 16px;
            border-radius: 50px;
            font-size: 0.95rem;
        }

        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 0 0.2rem rgba(37, 117, 252, 0.25);
        }

        .btn-primary {
            background-color: #2575fc;
            border-color: #2575fc;
            font-weight: 600;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #1a5cd8;
        }

        .alert ul {
            margin: 0;
            padding-left: 18px;
        }

        .login-link {
            margin-top: 18px;
            font-size: 0.95rem;
        }

        .login-link a {
            color: #2575fc;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from {
                transform: translateY(30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="register-wrapper">
        <div class="register-card">
            <h3 class="text-center mb-4">Student Registration</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('studentLog') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name') }}" placeholder="Enter your full name" required>
                </div>

                <div class="mb-3">
                    <label for="Symbol_no" class="form-label">Symbol No</label>
                    <input type="text" class="form-control" id="Symbol_no" name="Symbol_no"
                        value="{{ old('Symbol_no') }}" placeholder="Enter your Symbol No" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ old('email') }}" placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter your password" required>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation"
                        name="password_confirmation" placeholder="Confirm your password" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary rounded-pill">Register</button>
                </div>

                <p class="text-center login-link">
                    Already have an account?
                    <a href="{{ route('studentLogin') }}">Login</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>
