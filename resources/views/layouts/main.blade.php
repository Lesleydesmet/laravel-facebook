<html>
<head>
	<title>Article</title>
	{{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}"> --}}
	<link rel="stylesheet" href="{{ asset('css/materialize.css')}}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
	{{-- <link rel="stylesheet" href="{{ asset('css/table.css')}}"> --}}
	<link rel="stylesheet" href="{{ asset('stylesheets/screen.css')}}">
	<link rel="stylesheet" href="{{ asset('themify-icons.css')}}">
	<link rel="stylesheet" href="{{ asset('css/exp.css')}}">
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">

	<script src="{{ asset('js/jquery-3.1.0.js')}}"></script>
	<script src="{{ asset('js/materialize.js')}}"></script>
	  <script src="{{ asset('js/data.js')}}"></script>
	  {{--<script src="{{ asset('js/boot.js')}}"></script>--}}
	  <script src="{{ asset('js/map.js')}}"></script>{{-- for google map  --}}
	   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvDQqg3zszpBHiw5B8gEMhfBFMt3h_ZPE&callback=initMap"
    async defer></script>
	 <script src="{{ asset('js/app.js')}}"></script>
	<script src="{{ asset('js/list.js')}}"></script>
	
</head>
<body>

	<div class="container">
		@yield('content')
	</div>
	
