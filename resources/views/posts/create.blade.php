@extends('layouts.master')

@section('content')

	<h1>Create a Post</h1>
	<hr>

	<form method="POST" action="/posts">
	  {{ csrf_field() }}

	  <div class="form-group">
	    <label for="inputTitle">Title</label>
	    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title">
	  </div>
	  <div class="form-group">
	    <label for="inputBody">Body</label>
	    <textarea id="inputBody" name="body" class="form-control"></textarea>
	  </div>
	  <div class="form-group">
	  	<button type="submit" class="btn btn-primary">Publish</button>
	  </div>
	</form>

	@include('layouts.errors')

@endsection