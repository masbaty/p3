@extends("_master")

@section("title")
	Lorem Ipsum Generator
@stop

@section("head")
@stop

@section("content")

<h1>Lorem Ipsum Generator</h1>

How many paragraphs? 

<form method='GET' action='/lorem-ipsum'>
		<label for='number'>Paragraphs: </label>
		<input type='text' name='number' id='number' value={{{ $number }}} />
		<input type='submit' value='Generate Latin Text!' />
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