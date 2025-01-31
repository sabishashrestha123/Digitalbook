<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Nepalgunj Campus Online Library Management System</title>
    <link rel="icon" href="{{ asset('assets/backend/images/fevicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/css/colors.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/css/custom.css') }}" />
</head>
<body class="inner_page login">
    @include('sweetalert::alert')
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <!-- Add Logo if needed -->
                        </div>
                    </div>
                    <div class="login_form">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <fieldset>
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="field">
                                    <label class="label_field">Email Address</label>
                                    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required />
                                </div>
                                <div class="field">
                                    <label class="label_field">Password</label>
                                    <input type="password" name="password" placeholder="Password" required />
                                </div>
                                <div class="field">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="remember"> Remember Me
                                    </label>
                                    <a class="forgot" href="#">Forgotten Password?</a>
                                </div>
                                <div class="field margin_0">
                                    <button type="submit" class="main_bt">Sign In</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
</body>
</html>
