<html>
<head>
    <title> @yield('title') </title>
</head>
<body>
@include('navbar')
@yield('content')
<footer class="row">
	@include('footer')
</footer>
</body>
</html>

