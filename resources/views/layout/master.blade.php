<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{env('APP_NAME')}} : @yield('title')</title>

	<link rel="stylesheet" href="/css/semantic-ui.min.css">
	<link rel="stylesheet" href="/css/app.css">
	<script src="/js/semantic.min.js"></script>
</head>
<body>
	@include('components.navbar')

	@yield('content')
</body>
</html>