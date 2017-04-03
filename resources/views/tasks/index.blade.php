<!DOCTYPE html>
<html>
<head>
    <title>About</title>
</head>
<body>
    <h1>Tasks</h1>

    @foreach ($tasks as $task)
    	<li><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></li>
    @endforeach
</body>
</html>