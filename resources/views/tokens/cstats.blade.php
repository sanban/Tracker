@extends('layouts.app')
@section('content')
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

@endsection