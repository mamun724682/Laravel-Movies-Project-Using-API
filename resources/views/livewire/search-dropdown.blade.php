<div class="flex-1 mr-3 leading-snug" x-data="{ isOpen: true }" @click.away="isOpen = false">

	<input wire:model.debounce.500ms="search" type="text" name="" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">

	<div wire:loading class="spinner top-0 mr-8 mt-12"></div>

	@if ($search)
		<div class="absolute bg-gray-800 text-sm rounded w-64 mt-4" x-show="isOpen">
		<ul>
			@forelse ($searchResults as $searchResult)
				<li class="border-b border-gray-700">
				<a href="{{ route('movies.show', $searchResult['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
					<img src="https://image.tmdb.org/t/p/w500/{{ $searchResult['poster_path'] }}" class="w-8">
					{{ $searchResult['title'] }}
				</a>
			</li>
			@empty
				<div class="px-3 py-3">No results for "{{ $search }}"</div>
			@endforelse
		</ul>
	</div>
	@endif
</div>