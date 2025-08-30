<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #11998e, #38ef7d);
            min-height: 100vh;
            margin: 0;
        }

        .login-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 40px 15px;
        }

        .login-card {
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            animation: fadeIn 0.7s ease;
        }

        h3 {
            text-align: center;
            margin-bottom: 24px;
            font-weight: 700;
            color: #333;
        }

        .form-label {
            font-weight: 500;
            color: #555;
        }

        .form-control {
            padding: 12px 16px;
            border-radius: 50px;
        }

        .form-control:focus {
            border-color: #38ef7d;
            box-shadow: 0 0 0 0.2rem rgba(56, 239, 125, 0.25);
        }

        .btn-primary {
            background-color: #11998e;
            border-color: #11998e;
            font-weight: 600;
            padding: 10px;
            width: 100%;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0d776f;
        }

        .links {
            text-align: center;
            margin-top: 15px;
            font-size: 0.95rem;
        }

        .links a {
            color: #11998e;
            text-decoration: none;
            font-weight: 600;
        }

        .links a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="login-wrapper">
        <div class="login-card">
            <h3>Student Login</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                </div>

                <div class="d-grid mb-2">
                    <button type="submit" class="btn btn-primary rounded-pill">Login</button>
                </div>

                <div class="links">
                    <a href="#">Forgot password?</a>
                    <br>
                    <span>Don't have an account? </span>
                    <a href="{{ route('studentregister') }}">Register</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
