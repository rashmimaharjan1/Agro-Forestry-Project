<!doctype html>
<html lang="{{ app()->getLocale() }}">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Agro Forestry</title>
		<link rel="stylesheet" type="text/css" href="{{url('public/css/test.css')}}">
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<!--  main link bootstrap css -->
		<link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">
		<!--font awesome-icon-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		
		{{-- other link --}}
		<link rel="stylesheet" type="text/css" href="{{ url('public/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ url('public/css/owl.theme.green.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ url('public/css/owl.theme.default.min.css')}}">
		<!-- style -->
		
		<link rel="stylesheet" type="text/css" href="{{url('public/css/pages/aboutus.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('public/css/pages/profile.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('public/css/pages/ourservice.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('public/css/pages/our-advocacy.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('public/css/pages/executive-team.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('public/css/company.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('public/css/pages/pages.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('public/css/partials/footer.css')}}">
		<script src="https://unpkg.com/scrollreveal"></script>
		<script>
        ScrollReveal({ reset: true });
    </script>

	</head>
	<body>
		
		@include('partials.header')
		
		@yield('content')
		@include('partials.footer')
		
		{{-- bootstrapp --}}
		<script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

		<script type="text/javascript" src="{{ url('public/js/owl.carousel.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('public/js/jquery.carouFredSel-6.2.0-packed.js') }}"></script>
		<script type="text/javascript" src="{{url('public/js/js.js')}}"></script>
		<script type="text/javascript" src="{{url('public/js/pages.js')}}"></script>
	</body>
</html>