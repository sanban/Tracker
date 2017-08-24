<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
{!! Form::open(array('url' => '/open', 'class' => 'form')) !!}
<div class="form-group">
    {!! Form::label('Email') !!}
    {!! Form::text ('email',null,
         array('required',
                 'class' => 'form-control',
                 'placeholder' => 'Email')) !!}
</div>



<div class="form-group">
    {!! Form::submit('Get token',
    array('class' => 'btn btn-primary')) !!}
</div>


{!! Form::close() !!}
</body>
</html>