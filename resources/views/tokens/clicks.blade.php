@extends('layouts.app')
@section('content')
    <table style="width: 100%;">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Link</th>
            <th>Clicked At</th>
            <th>IP</th>
            <th>Browser</th>
        </tr>
        @foreach($tokens as $token)
            <tr>
                <td>{{ $token->token_id }}</td>
                <td>{{ $token->email }}</td>
                <td>{{ $token->link }}</td>
                <td>{{ $token->clicked_at }}</td>
                <td>{{ $token->IP }}</td>
                <td>{{ $token->Browser }}</td>
            </tr>
        @endforeach
    </table>

@endsection