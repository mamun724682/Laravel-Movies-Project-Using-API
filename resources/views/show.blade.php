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
		</div>
	</div>
</div>
@endsection