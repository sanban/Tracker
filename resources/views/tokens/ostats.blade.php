<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>ID 		EMAIL 		OPENED</h1>
@foreach($tokens as $token)
    <h2><a href="/stats/open/{{ $token->id }}">{{ $token->id }}</a>      {{ $token->email }}       {{ $token->opened }}<br><br></h2>
@endforeach
</body>
</html>