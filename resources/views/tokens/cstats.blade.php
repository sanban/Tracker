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
        <th>Link</th>
        <th>Clicked</th>
    </tr>
        @foreach($tokens as $token)
            <tr>
                <td><a href="/stats/click/{{ $token->id }}">{{ $token->id }}</a></td>
                <td>{{ $token->email }}</td>
                <td>{{ $token->link }}</td>
                <td>{{ $token->clicked }}</td>
            </tr>
        @endforeach

</table>

</body>
</html>