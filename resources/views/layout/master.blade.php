<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{env('APP_NAME')}} : @yield('title')</title>

	<link rel="stylesheet" href="/css/semantic-ui.min.css">
	<script src="/js/semantic.min.js"></script>
</head>
<body>
	<header>
		@include('components.navbar')
	</header>

	@yield('content')
</body>
</html>