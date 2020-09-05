@extends('layouts.main')

@section('content')
	<div class="container mx-auto px-4 pt-16">
		<div class="popular-movies">
			<h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
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
@endsection