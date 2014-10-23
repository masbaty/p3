@extends("_master")

@section("title")
	Random User Generator
@stop

@section("head")
@stop

@section("content")

<a href="..">Back to main page</a>

<h1>Random User Generator</h1>

How many users? 

<form method='POST'>
		<label for='users'>How many users? </label>
			<input type='text' name='users' id='users' value='' />

		<label for='birthdate'>Birthdate </label>
			<input type="checkbox" name='birthdate' id='birthdate' />

		<label for='profile'>Profile </label>
			<input type="checkbox" name='profile' id='profile' />

		<input type='submit' value='Generate Users!' />


		
		@if(isset($text))
			<h2>Here is your Lorem Ipsum text:</h2>
			{{ $faker->name }}
			<br />
			{{ $faker->address }}
			<br />
			{{ $faker->text }}
			
		@endif
</form>

@stop