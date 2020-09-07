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