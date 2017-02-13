<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width-device-width", initial-scale="1">
		<title>Laravel Intro</title>
		<link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{ asset('style.css')}} " rel="stylesheet">

	</head>
</body>
<div class="container">
@include('navbar')
	@yield('main')
	</div>
	@yield('footer')
	<script style="{{ asset('js/jquery2_2_3.min.js')}} "></script>
	<script style="{{ asset('bootstrap/js/bootstrap.min.js')}} "></script>
</body>
</html>