@extends('layouts.app')
@section('content')
    {!! Form::open(array('url' => '/click', 'class' => 'form')) !!}
    <div class="form-group">
        {!! Form::label('Enter email : ') !!}
        {!! Form::text('email', null,
            array('required',
                'class' => 'form-control',
                'placeholder' => 'Email')) !!}
        <br>

        @if ($errors->any())
            <ul>{!! implode('', $errors->all('<li style="color:red">:message</li>')) !!}</ul>
        @endif
        <br>
    </div>

    <div class="form-group">
        {!! Form::label('Enter link : ') !!}
        {!! Form::text('link', null,
                    array('required',
                          'class' => 'form-control',
                          'placeholder' => 'Link')) !!}
        <br>
        <br>
    </div>

    <div class="form-group">
        {!! Form::submit('Get Click Token',
                          array('class' => 'btn btn-primary')) !!}
        <br>
    </div>


    {!! Form::close() !!}

    @endsection