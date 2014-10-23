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
			<input type='text' name='users' id='users' value='' /><br />

		<label for='birthdate'>Birthdate </label>
			<input type="checkbox" name='birthdate' id='birthdate' /><br />

		<label for='profile'>Profile </label>
			<input type="checkbox" name='profile' id='profile' /><br />

		<input type='submit' value='Generate Users!' />


		
		@if(isset($text))
			<h2>Here are your random users:</h2>
			
			
		@for ($i=0; $i < $text['users']; $i++)
			Name: {{ $faker->name }}
			<br />
			Birthdate: {{ $faker->dateTimeThisCentury->format('mm-dd-yyyy') }}
			<br />
			Profile:<br />{{ $faker->text }}
			<br /><br />
		@endfor

		@endif
</form>

@stop