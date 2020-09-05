@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
	<div class="container mx-auto px-4 py-16 flex">
		<img src="https://i.pinimg.com/originals/0c/e6/47/0ce647ebe024e853f0138719f80b6a40.jpg" class="w-96" style="width: 24rem">
		<div class="ml-24">
			<h2 class="text-4xl font-semibold">Paradise (2019)</h2>
			<div class="flex items-center text-gray:400 text-sm">
				<span><img class="w-3" src="{{ asset('img/star.png') }}"></span>
				<span class="ml-1">85%</span>
				<span class="mx-2">|</span>
				<span>Feb 20, 2020</span>
				<span class="mx-2">|</span>
				<span>Action, Thriller, Drama</span>
			</div>
			<p class="text-gray-300 mt-8">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<div class="mt-12">
				<h4 class="text-white font=semibold">Featured Cast</h4>
				<div class="flex mt-4">
					<div>
						<div>Bong Joon</div>
						<div class="text-sm text-gray-400">Screenplay, Director, Story</div>
					</div>
					<div>
						<div>Bong Joon</div>
						<div class="text-sm text-gray-400">Screenplay, Director, Story</div>
					</div>
				</div>
			</div>
			<div class="mt-12">
				<button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
					<img class="w-6 fill-current" src="{{ asset('img/play-button.png') }}">
					<span class="ml-2">Play Trailer</span>
				</button>
			</div>
		</div>
	</div>
</div> {{-- end movie info --}}

<div class="movie-cast border-b border-gray-800">
	<div class="container mx-auto px-4 pt-16">
	<div class="popular-movies">
		<h2 class="text-4xl font-semibold">Cast</h2>
		<div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-3 lg:grid-cols-5 gap-8">
			<div class="mt-8">
				<a href="">
					<img src="https://i.pinimg.com/originals/0c/e6/47/0ce647ebe024e853f0138719f80b6a40.jpg" class="hover:opacity-75 transition ease-in-out duration-150">
				</a>
				<div class="mt-2">
					<a href="" class="text-lg mt-2 hover:text-gray:300">Mamun</a>
					<div class="flex items-center text-gray:400 text-sm mt-1">
						<span><img class="w-3" src="{{ asset('img/star.png') }}"></span>
						<span class="ml-1">85%</span>
						<span class="mx-2">|</span>
						<span>Feb 20, 2020</span>
					</div>
					<div class="text-gray:400 text-sm">
						Action, Thriller, Comedy
					</div>
				</div>
			</div>
			<div class="mt-8">
				<a href="">
					<img src="https://i.pinimg.com/originals/0c/e6/47/0ce647ebe024e853f0138719f80b6a40.jpg" class="hover:opacity-75 transition ease-in-out duration-150">
				</a>
				<div class="mt-2">
					<a href="" class="text-lg mt-2 hover:text-gray:300">Mamun</a>
					<div class="flex items-center text-gray:400 text-sm mt-1">
						<span><img class="w-3" src="{{ asset('img/star.png') }}"></span>
						<span class="ml-1">85%</span>
						<span class="mx-2">|</span>
						<span>Feb 20, 2020</span>
					</div>
					<div class="text-gray:400 text-sm">
						Action, Thriller, Comedy
					</div>
				</div>
			</div>
			<div class="mt-8">
				<a href="">
					<img src="https://i.pinimg.com/originals/0c/e6/47/0ce647ebe024e853f0138719f80b6a40.jpg" class="hover:opacity-75 transition ease-in-out duration-150">
				</a>
				<div class="mt-2">
					<a href="" class="text-lg mt-2 hover:text-gray:300">Mamun</a>
					<div class="flex items-center text-gray:400 text-sm mt-1">
						<span><img class="w-3" src="{{ asset('img/star.png') }}"></span>
						<span class="ml-1">85%</span>
						<span class="mx-2">|</span>
						<span>Feb 20, 2020</span>
					</div>
					<div class="text-gray:400 text-sm">
						Action, Thriller, Comedy
					</div>
				</div>
			</div>
			<div class="mt-8">
				<a href="">
					<img src="https://i.pinimg.com/originals/0c/e6/47/0ce647ebe024e853f0138719f80b6a40.jpg" class="hover:opacity-75 transition ease-in-out duration-150">
				</a>
				<div class="mt-2">
					<a href="" class="text-lg mt-2 hover:text-gray:300">Mamun</a>
					<div class="flex items-center text-gray:400 text-sm mt-1">
						<span><img class="w-3" src="{{ asset('img/star.png') }}"></span>
						<span class="ml-1">85%</span>
						<span class="mx-2">|</span>
						<span>Feb 20, 2020</span>
					</div>
					<div class="text-gray:400 text-sm">
						Action, Thriller, Comedy
					</div>
				</div>
			</div>
			<div class="mt-8">
				<a href="">
					<img src="https://i.pinimg.com/originals/0c/e6/47/0ce647ebe024e853f0138719f80b6a40.jpg" class="hover:opacity-75 transition ease-in-out duration-150">
				</a>
				<div class="mt-2">
					<a href="" class="text-lg mt-2 hover:text-gray:300">Mamun</a>
					<div class="flex items-center text-gray:400 text-sm mt-1">
						<span><img class="w-3" src="{{ asset('img/star.png') }}"></span>
						<span class="ml-1">85%</span>
						<span class="mx-2">|</span>
						<span>Feb 20, 2020</span>
					</div>
					<div class="text-gray:400 text-sm">
						Action, Thriller, Comedy
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection