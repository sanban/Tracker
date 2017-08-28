<!DOCTYPE html>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
<html>
<head>
    <title></title>
</head>
<body>
{!! Form::open(array('url' => '/open', 'class' => 'form')) !!}
<div class="form-group">
    {!! Form::label('Enter email : ') !!}
    {!! Form::text ('email',null,
         array('required',
                 'class' => 'form-control',
                 'placeholder' => 'Email')) !!}
</div>



<div class="form-group">
    {!! Form::submit('Get Open Token',
    array('class' => 'btn btn-primary')) !!}
</div>


{!! Form::close() !!}
</body>
</html>