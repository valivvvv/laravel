<div class="card">
	<span>{{ $post->created_at->toFormattedDateString() }}</span>
	<h3>
		<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
	</h3>
	<p class="card-text">{{ $post->body }}</p>
</div>