<!doctype html>
<html lang="en">

<!-- login23:11-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/assets/img/favicon.ico') }}">
  <title>OPSMSwCbF</title>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/assets/css/style.css') }}">
  <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
  <!-- ============================================================== -->
  <!-- login page  -->
  <!-- ============================================================== -->
  <div class="main-wrapper account-wrapper">
    <div class="account-page">
      <div class="account-center">
        <div class="account-box">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="account-logo">
              <a href="index-2.html"><img src="{{ asset('assets/assets/img/logo-dark.png') }}" alt=""></a>
            </div>
            <div class="form-group">
              <label>Username or Email</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Password</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message  }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group text-left">
              <label class="custom-control custom-checkbox">
                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; 
                <a href="{{ route('password.request') }}">Forgot your password?</a>
              </label>
            </div>


            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary account-btn">Login</button>
            </div>
            <div class="text-center register-link">
              Don’t have an account? <a href="{{ route('register') }}">Register Now</a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/assets/js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/assets/js/app.js') }}"></script>


</body>

</html>