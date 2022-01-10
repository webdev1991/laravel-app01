@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">  -->
	<!--
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">   
	-->
	<title>Hello</title>
</head>
<body>
	<h2 class="p-6 max-w-sm mx-auto items-center text-3xl font-bold">Source of code</h2>

	<p class="text-justify mx-20 my-6 filter grayscale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae cursus nibh. Nam a ullamcorper orci. Nam id quam dui. Nullam id libero a ante suscipit semper. Donec non nibh condimentum, ullamcorper tortor sed, pulvinar justo. Etiam ligula ante, ultrices ut ex eget, malesuada interdum purus. Cras ornare arcu in congue tristique. Proin convallis quis orci non molestie. Vestibulum non luctus risus. Pellentesque id felis dignissim augue rhoncus rhoncus. Phasellus nibh dolor, pharetra consequat mollis luctus, egestas a neque. Mauris commodo quam scelerisque est lacinia bibendum. Vestibulum nec ligula non turpis dignissim tincidunt ut a lacus. Vivamus egestas metus nec mi eleifend, in varius massa rutrum.</p>

	<p class="ml-20 ordinal">1st </p>
	<p class="ml-20 stacked-fractions">1/2 3/4 5/6 </p>



<h1 class="p-6 max-w-sm mx-auto text-3xl">Using Tailwind css</h1>
<div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4 bg-green-400 bg-opacity-50 bg-origin-border p-4 border-4 border-dashed">
  <div class="flex-shrink-0">
    <img class="h-12 w-12" src="/img/logo.svg" alt="ChitChat Logo">
  </div>
  <div>
    <div class="text-xl font-medium text-black">ChitChat</div>
    <p class="text-gray-500">You have a new message!</p>
  </div>
</div>

@endsection

</body>


</html>