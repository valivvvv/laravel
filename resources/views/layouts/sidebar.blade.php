<div class="sidebar">

	<div class="sidebar-module">
		<h4>Archives</h4>
		<ol class="list-unstyled">
			@foreach ($archives as $stat)
				<li>
					<a href="?year={{ $stat['year'] }}&month={{ $stat['month'] }}">
						{{ '(' . $stat['published'] . ') ' . $stat['month'] . ' ' . $stat['year'] }}
					</a>
				</li>
			@endforeach
		</ol>
	</div>

	<div class="sidebar-module">
		<h4>Tags</h4>
		<ol class="list-unstyled">
			@foreach ($tags as $tag)
				<li>
					<a href="/posts/tags/{{ $tag }}">
						{{ $tag }}
					</a>
				</li>
			@endforeach
		</ol>
	</div>

</div>