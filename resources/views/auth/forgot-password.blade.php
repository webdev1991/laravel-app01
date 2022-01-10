
@extends('layouts.app')

@section('content')


<div class="flex justify-center">
	<div class="w-6/12 bg-white p-6 mt-6 rounded-lg">

		@if (session('status'))
			<div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
				{{ session('status') }}
			</div>
		@endif

		<form action="" method="post">
			@csrf

			<div class="mb-4">
				<label for="email" class="sr-only">Email</label>
				<input type="text" name="email" id="email" placeholder="Your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('email')}}">

				@error('email')
				<div class="text-red-500 mt-2 text-sm">
					{{$message}}
				</div>
				@enderror
			</div>

					
			<div>
				<button type="submit" value="Email Password Reset Link" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Submit</button>
			</div>

		</form>
	</div>
</div>



@endsection

