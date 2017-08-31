@extends('layouts.app')
@section('content')
    {!! Form::open(array('url' => '/open', 'class' => 'form')) !!}
    <div class="form-group">
        {!! Form::label('Enter email : ') !!}
        {!! Form::text ('email',null,
             array('required',
                     'class' => 'form-control',
                     'placeholder' => 'Email')) !!}
        @if ($errors->any())
            <ul>{!! implode('', $errors->all('<li style="color:red">:message</li>')) !!}</ul>
        @endif
        <br>
        <br>
    </div>



    <div class="form-group">
        {!! Form::submit('Get Open Token',
        array('class' => 'btn btn-primary')) !!}
    </div>


    {!! Form::close() !!}

@endsection