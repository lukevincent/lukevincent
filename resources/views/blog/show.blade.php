<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>{{ $post->title }}</h1>
	<p>{{ readingTime($post->body) }}</p>
	<img src="{{ $post->featured_image }}">
	<div> {!! $post->body !!} </div>
</body>
</html>
