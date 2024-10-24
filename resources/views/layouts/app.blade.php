<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>


	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Usando Vite -->
	@vite(['resources/js/app.js'])
</head>

<body>
	<div id="app">

		<div class="nav_bar">
			<div style="width:5%">
				<img src="{{ asset('img/Google_Icons.webp') }}" alt="">
			</div>

		</div>

		<main class="">
			@yield('content')
		</main>
	</div>
</body>

</html>

<style scoped>
	.nav_bar {
		height: 6rem;

		img {

			height: 6rem;

		}
	}
</style>
