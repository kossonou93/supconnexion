<!DOCTYPE html>
<html lang="en">
<head>
	<title>Password Intervenant</title>
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
	<div class="container-login100" style="background-image: url('{{ asset('users/images/teacher4.jpg') }}')">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" style="opacity: 0.9;">
			<form class="login100-form validate-form" method="POST" action="{{ route('intervenant.password.send.submit') }}">
                {{csrf_field()}}
				<span class="login100-form-title p-b-37">
					Réinitialisé Mot de Passe
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Entrez email">
					<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" type="text" placeholder="email" name="email" value="{{ $user->email }}" disabled="disabled">
					@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Entrez nouveau mot de passe">
					<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" type="password" placeholder="nouveau mot de passe" name="password" required autocomplete="new-password">
					@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Confirmez mot de passe">
					<input id="password-confirm" type="password" class="input100 @error('password') is-invalid @enderror" type="password" placeholder="confirmez mot de passe" name="password_confirmation" required autocomplete="new-password">
					@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button type="submit"  class="login100-form-btn">
						Valider
					</button>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	@include('sweetalert::alert')
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