@extends('layouts.main')

@section('content')
	<div class="container mx-auto px-4 pt-16">
		<div class="popular-movies">
			<h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
			<div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-3 lg:grid-cols-5 gap-8">
				@foreach ($popularMovies as $movie)
					<div class="mt-8">
					<a href="">
						<img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
					</a>
					<div class="mt-2">
						<a href="" class="text-lg mt-2 hover:text-gray:300">{{ $movie['title'] }}</a>
						<div class="flex items-center text-gray:400 text-sm mt-1">
							<span><img class="w-3" src="{{ asset('img/star.png') }}"></span>
							<span class="ml-1">{{ $movie['vote_average'] * 10 }}%</span>
							<span class="mx-2">|</span>
							<span>{{ date('M d, Y', strtotime($movie['release_date'])) }}</span>
						</div>
						<div class="text-gray:400 text-sm">
							@foreach ($movie['genre_ids'] as $genre)
								{{ $genres->get($genre) }}{{ !$loop->last ? ',' : '' }}
							@endforeach
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<div class="container mx-auto px-4 pt-16">
		<div class="popular-movies">
			<h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
			<div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-3 lg:grid-cols-5 gap-8">
				@foreach ($nowPlayingMovies as $movie)
					<div class="mt-8">
					<a href="">
						<img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
					</a>
					<div class="mt-2">
						<a href="" class="text-lg mt-2 hover:text-gray:300">{{ $movie['title'] }}</a>
						<div class="flex items-center text-gray:400 text-sm mt-1">
							<span><img class="w-3" src="{{ asset('img/star.png') }}"></span>
							<span class="ml-1">{{ $movie['vote_average'] * 10 }}%</span>
							<span class="mx-2">|</span>
							<span>{{ date('M d, Y', strtotime($movie['release_date'])) }}</span>
						</div>
						<div class="text-gray:400 text-sm">
							@foreach ($movie['genre_ids'] as $genre)
								{{ $genres->get($genre) }}{{ !$loop->last ? ',' : '' }}
							@endforeach
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection