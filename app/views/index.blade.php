@extends("_master")

@section("title")
	Project 3 - Developer's Best Friend
@stop

@section("head")
@stop

@section("content")

	<h1>Developer's Best Friend!</h1>

	<div id="lorem">
		<h3>Lorem Ipsum Generator</h3>
		<p>
			Generate random filler text.
		</p>
		<p id="generate">
			<a href="lorem-ipsum">Generate!</a>
		</p>
	</div>
	<div id="random">
		<h3>Random User Generator</h3>
		<p>
			Generate random users.
		</p>
		<p id="generate">
			<a href="user-generator">Generate!</a>
		</p>
	</div>

@stop