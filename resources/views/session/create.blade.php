@extends('layouts.master')

@section('content')

	<h1>Sing in</h1>

	<form method="POST" action="/login">

		{{ csrf_field() }}

		<div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
		</div>

		<div class="form-group">
		    <label for="password">Password:</label>
		    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
		</div>

		<div class="form-group">
	  		<button type="submit" class="btn btn-primary">Log in</button>
	  	</div>

	</form>

	@include('layouts.errors')

@endsection