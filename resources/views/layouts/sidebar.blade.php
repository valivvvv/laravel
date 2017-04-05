<div class="sidebar">
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