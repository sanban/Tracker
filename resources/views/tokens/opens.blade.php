<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


ID    EMAIL      OPENED_AT     IP    BROWSER<br><br>
@foreach($tokens as $token)
    {{ $token->token_id }}   {{ $token->email }}   {{ $token->opened_at }} {{ $token->IP }}  {{ $token->Browser }}<br><br>
@endforeach
</body>
</html>