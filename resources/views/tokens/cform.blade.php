<!DOCTYPE html>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
<html>
<head>
    <title></title>
</head>
<body>
{!! Form::open(array('url' => '/click', 'class' => 'form')) !!}
<div class="form-group">
    {!! Form::label('Enter email : ') !!}
    {!! Form::text('email', null,
        array('required',
            'class' => 'form-control',
            'placeholder' => 'Email')) !!}
    <br>
</div>

<div class="form-group">
    {!! Form::label('Enter link : ') !!}
    {!! Form::text('link', null,
                array('required',
                      'class' => 'form-control',
                      'placeholder' => 'Link')) !!}
    <br>
</div>

<div class="form-group">
    {!! Form::submit('Get Click Token',
                      array('class' => 'btn btn-primary')) !!}
    <br>
</div>


{!! Form::close() !!}

</body>
</html>