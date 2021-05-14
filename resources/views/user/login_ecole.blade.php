<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Ecole</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('form/images/icons/favicon.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('form/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('form/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('form/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('form/css/style.css') }}">
<!--===============================================================================================-->
</head>
<body>
	<div class="loader_bg">
        <div class="loader"></div>
    </div>
	
	<div class="container-login100" style="background-image: url('{{ asset('users/images/teacher3.jpg') }}')">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" style="opacity: 0.9;">
			<form class="login100-form validate-form" method="POST" action="{{ route('ecole.login.submit') }}">
                @csrf
				<div class="row">
					<div class="col-sm-12 col-md-12">
						@if ($message = Session::get('success'))
							<div class="alert alert-success">
								{{ $message }}
							</div>
						@endif
					</div>
				</div>
				<span class="login100-form-title p-b-37">
					Login Ecole
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
					@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" placeholder="mot de passe" name="password" required autocomplete="current-password">
					@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
				</div>

				<div class="container-login100-form-btn">
					<button type="submit"  class="login100-form-btn">
						Connexion
					</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Mot de Passe oublié?') }}
                        </a>
                    @endif
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Se connecter avec
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="{{ asset('form/images/icons/icon-google.png') }}" alt="GOOGLE">
					</a>
				</div>

				<div class="text-center" style="margin-top:-90px">
                    <a class="txt2 hov1" href="{{ route('ecole.register') }}">
						Inscription
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('form/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script>
    setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
</script>
	<script src="{{ asset('form/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('form/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('form/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('form/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('form/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('form/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('form/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('form/js/main.js') }}"></script>

</body>
</html>