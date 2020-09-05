<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movies App</title>

	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body class="font-sans bg-gray-900 text-white">
	<nav class="border-b border-gray-800">
		<div class="container mx-auto px-4 flex items-center justify-between px-4 py-6">
			<ul class="flex items-center">
				<li>
					<a href="#">
						<img class="w-32" src="{{ asset('nav.png') }}">
					</a>
				</li>
				<li class="ml-16" style="margin-top: 12px">
					<a href="" class="hover:text-gray-300">Movies</a>
				</li>
				<li class="ml-6" style="margin-top: 12px">
					<a href="" class="hover:text-gray-300">TV Shows</a>
				</li>
				<li class="ml-6" style="margin-top: 12px">
					<a href="" class="hover:text-gray-300">Actors</a>
				</li>
			</ul>
			<div class="flex items-center">
				<div class="flex-1 mr-3 leading-snug">
					<input type="text" name="" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
				</div>
				<div class="rounded-full h-8 w-8 flex-shrink-0 mr-3 relative">
					<img loading="lazy" src="{{ asset('avatar.png') }}" alt="Mohamed-Kaizen" class="absolute inset-0 z-negative w-full h-full">
				</div>
				
			</div>
		</div>
	</nav>

	@yield('content')

</body>
</html>