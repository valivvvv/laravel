@extends('layouts.master')

@section('content')

	<div class="container">

		<span>{{ $post->created_at->toFormattedDateString() }}</span>
		<h3>
			<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
		</h3>
		<p class="card-text">{{ $post->body }}</p>

		@if ( count($post->comments) )
			<hr>
			<div class="comments">
				<ul class="list-group">
					@foreach ( $post->comments as $comment)
						<li class="list-group-item">
							<strong>
								{{ $comment->created_at->diffForHumans() }}:
							</strong>
							{{ $comment->body }}
						</li>
					@endforeach
				</ul>
			</div>
		@endif

		<hr>
		<div class="card">
			<div class="card-block">
				<form method="POST" action="/posts/{{ $post->id }}/comments">
					{{ csrf_field() }}
					<div class="form-group">
						<textarea name="body" placeholder="Your comment..." class="form-control"></textarea>
					</div>
					<div class="form-group">
					  	<button type="submit" class="btn btn-primary">Add Comment</button>
					</div>
				</form>

				@include('layouts.errors')
			</div>
		</div>

	</div>

@endsection