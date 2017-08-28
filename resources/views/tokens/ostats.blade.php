<!DOCTYPE html>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
<html>
<head>
    <style>
        table, th, td {
            /*border: 1px solid black;*/
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
        th {
            text-align: left;
        }
        tr:nth-child(even){
            background-color: #F2F2F2;}
    </style>
</head>
<body>
<table style="width:100%;">
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Opened</th>
    </tr>
    @foreach($tokens as $token)
        <tr>
            <td><a href="/stats/open/{{ $token->id }}">{{ $token->id }}</a></td>
            <td>{{ $token->email }}</td>
            <td>{{ $token->opened }}</td>
        </tr>
    @endforeach

</table>
</body>
</html>