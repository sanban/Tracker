@extends('layouts.app')
@section('content')
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

@endsection