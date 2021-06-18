<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Sup'Connexion</title>
	<link href="{{ asset('admini/styles/multiselect.css') }}" rel="stylesheet"/>

	<script src="{{ asset('admini/scripts/multiselect.min.js') }}"></script>

	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('admini/assets/img/icon.png') }}" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="{{ asset('admini/assets/js/plugin/webfont/webfont.min.js') }}"></script>


	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ["{{ asset('admini/assets/css/fonts.css') }}"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('admini/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admini/assets/css/azzara.min.css') }}">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('admini/assets/css/demo.css') }}">

	<link rel="stylesheet" href="{{ asset('admini/assets/css/picker.css') }}">
	<link rel="stylesheet" href="{{ asset('admini/assets/css/picker.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admini/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('admini/assets/css/pricing.css') }}">
	<link rel="stylesheet" href="{{ asset('admini/assets/css/paiement.css') }}">
</head>