@extends("_master")

@section("title")
	Random User Generator
@stop

@section("head")
@stop

@section("content")

<a href="..">Back to main page</a>

<h1>Random User Generator</h1>




{{ Form::open (array('url' => '/user-generator', 'method' => 'POST')) }}
		{{ Form::label('users', 'How many users? ') }}
		@if (isset($text))
			{{ Form::text('users', $text['users'] ) }}
		@else 
			{{ Form::text('users', '3' ) }}
		@endif

		<br />

		@if (isset($text))
			{{ Form::label('birthdate', 'Birthdate? ') }}
			@if ($text['birthdaySelected'])
				{{ Form::checkbox('birthdate', 'birthdate', true ) }}
			@else
				{{ Form::checkbox('birthdate', 'birthdate' ) }}
			@endif
				<br />

			{{ Form::label('profile', 'Profile? ') }}
			@if ($text['profileSelected'])
				{{ Form::checkbox('profile', 'profile', true ) }}
			@else
				{{ Form::checkbox('profile', 'profile' ) }}
			@endif
			<br />
		@else
			{{ Form::label('birthdate', 'Birthdate? ') }}
				{{ Form::checkbox('birthdate', 'birthdate' ) }}

				<br />

			{{ Form::label('profile', 'Profile? ') }}
				{{ Form::checkbox('profile', 'profile' ) }}

				<br />
		@endif

		{{ Form::submit('Generate Users!') }}


		
		@if(isset($text))
			<h2>Here are your random users:</h2>
			
			
			@for ($i=0; $i < $text['users']; $i++)
				<ul>
					<li>
						Name: {{ $faker->name }}
					</li>

					@if ($text['birthdaySelected'])
					<li>
						Birthdate: {{ $faker->dateTimeThisCentury->format('mm-dd-yyyy') }}
					</li>
					@endif

					@if ($text['profileSelected'])
					<li>
						{{ $faker->text }}
					</li>
					@endif
				</ul>
			@endfor

		@endif
{{ Form::close() }}

@stop