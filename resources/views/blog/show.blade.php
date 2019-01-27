<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>{{ $post->title }}</h1>
	<img src="{{ $post->featured_image }}">
	<div> {!! $post->body !!} </div>
</body>
</html>
