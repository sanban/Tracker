<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>ID 		EMAIL 	LINK	CLICKED</h1>
@foreach($tokens as $token)
    <h2><a href="/stats/click/{{ $token->id }}">{{ $token->id }}</a>      {{ $token->email }}       {{ $token->link }}      {{ $token->clicked }}
        <br><br></h2>
@endforeach
</body>
</html>