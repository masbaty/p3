@extends("_master")

@section("title")
	Lorem Ipsum Generator
@stop

@section("head")
@stop

@section("content")

<a href="..">Back to main page</a>

<h1>Lorem Ipsum Generator</h1>

<p>
	In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content that could be distracting with placeholder text may allow viewers to focus on graphic aspects such as font, typography, and page layout.
	<br />
	<a href="http://en.wikipedia.org/wiki/Lorem_ipsum">- Wikipedia</a>
</p>


{{ Form::open (array('url' => '/lorem-ipsum', 'method' => 'POST')) }}
	{{ Form::label('paragraphs', 'How many paragraphs? ') }}
	@if (isset($text))
		{{ Form::text('paragraphs', $text['number']) }}
	@else
		{{ Form::text('paragraphs', '5') }}
	@endif

	{{ Form::submit('Generate Latin Text!'); }}

		
		@if(isset($text))
			<h2>Here is your Lorem Ipsum text:</h2>

			@foreach($text['paragraphs'] as $paragraph)
				<p>
					{{ $paragraph }}
				</p
			@endforeach
		@endif
{{ Form::close() }}



<br /><br />



@stop