@extends('layouts.app')
@section('content')
    <font size="4">Put this in the mail body <br>
        &lt;a href="<u>tracker.dev/click/{{ $id }}</u>"&gt;{{ $link }}&lt;/a&gt;
    </font>

@endsection