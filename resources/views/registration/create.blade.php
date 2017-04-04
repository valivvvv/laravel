@extends('layouts.master')

@section('content')

	<h1>Register</h1>

	<form method="POST" action="/register">

		{{ csrf_field() }}

		<div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
		</div>

		<div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
		</div>

		<div class="form-group">
		    <label for="password_confirmation">Password:</label>
		    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password Confirmation">
		</div>

		<div class="form-group">
		    <label for="password">Password Confirmation:</label>
		    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
		</div>

		<div class="form-group">
	  		<button type="submit" class="btn btn-primary">Register</button>
	  	</div>

	</form>

	@include('layouts.errors')

@endsection