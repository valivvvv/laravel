<div class="card">
	<span class="blog-post-meta">
		<b>{{ $post->user->name }}</b>
		on <b>{{ $post->created_at->toFormattedDateString() }}</b> 
	</span>
	<h3>
		<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
	</h3>
	<p class="card-text">{{ $post->body }}</p>
</div>