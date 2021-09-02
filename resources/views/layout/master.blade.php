<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{env('APP_NAME')}} : @yield('title')</title>

	<link rel="stylesheet" href="/css/semantic-ui.min.css">
	<link rel="stylesheet" href="/css/app.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="/js/semantic.min.js"></script>
</head>
<body>
    <div class="ui fluid container">
        @include('components.navbar')
        @yield('content')
        @include('components.footer')
    </div>
</body>
</html>
