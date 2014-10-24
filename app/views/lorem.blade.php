@extends("_master")

@section("title")
	Lorem Ipsum Generator
@stop

@section("head")
@stop

@section("content")

<a href="..">Back to main page</a>

<h1>Lorem Ipsum Generator</h1>

How many paragraphs? 

<form method='POST'>
		<label for='number'>Paragraphs: </label>
		@if (isset($text))
			<input type='text' name='paragraphs' id='number' value={{ $text['number'] }} />
		@else
			<input type='text' name='paragraphs' id='number' value=5 />
		@endif
		<input type='submit' value='Generate Latin Text!' />


		
		@if(isset($text))
			<h2>Here is your Lorem Ipsum text:</h2>

			@foreach($text['paragraphs'] as $paragraph)
				<p>
					{{ $paragraph }}
				</p
			@endforeach
		@endif
</form>

<!--
{{ Form::open(array('url' => '/lorem-ipsum', 'method' => 'POST')) }}
	{{ Form::label('paragraphs','Paragraphs') }}
	{{ Form::text('paragraphs'); }}
	{{ Form::submit('Get Latin Text!'); }}
{{ Form::close() }}
-->

<br /><br />



@stop