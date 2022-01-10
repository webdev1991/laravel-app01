<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
	<nav class="p-6 bg-white flex justify-between">
		<ul class="flex items-center">
			<li>
				<a href="{{('home')}}" class="p-3">Home</a>
			</li>
			<li>
				<a href="{{('dashboard')}}" class="p-3">Dashboard</a>
			</li>
			<li>
				<a href="{{ route('posts')}}" class="p-3">Posts</a>
			</li>
			
		</ul>

		<ul class="flex items-center">
			
			@auth
				<li>
					<a href="" class="p-3">{{ auth()->user()->name }}</a>
				</li>
				<li>
					<form action="{{ route('logout') }}" method="post">
						@csrf
					<button type="submit" class="p-3">Logout</button>
					</form>
				</li>

			@endauth

			@guest
				<li>
					<a href="{{ route('login') }} " class="p-3">Login</a>
				</li>
				<li>
					<a href="{{ route('register') }}" class="p-3">Register</a>
				</li>

			@endguest			
			
		</ul>
		
	</nav>
	@yield('content')

</body>
</html>