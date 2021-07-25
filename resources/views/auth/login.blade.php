<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freeletics Surabaya Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-4.1.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('login-css.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="box" action="{{ route('auth.check') }}" method="POST">
                    @if(Session::get('Fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('Fail') }}
                        </div>
                    @endif

                    @csrf
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Freeletics" style="margin-bottom: 20px">
                        <h1>Login</h1>
                        <p class="text-muted"> Please enter your email and password!</p>
                        <input type="text" name="email" placeholder="Email">
                        <span class="text-danger">@error('email'){{ $message}} @enderror</span>
                        <input type="password" name="password" placeholder="Password">
                        <span class="text-danger">@error('password'){{ $message}} @enderror</span>
                        <br><a class="forgot text-muted" href="{{ route('index') }}">Get Back</a>
                        <input type="submit" value="Submit">
                        <div class="col-md-12">
                            <ul class="social-network social-circle">
                                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>