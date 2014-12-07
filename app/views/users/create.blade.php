@extends('layout')

@section('title') Crear Usuario @stop

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='glyphicon glyphicon-user'></i>Crear usuario</h1>

    @if ($errors->has())
        <div class='bg-danger alert'>{{ HTML::ul($errors->all()) }}</div>
    @endif

    {{ Form::open(['role' => 'form', 'url' => '/users']) }}

    <div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('password_confirmation', 'Confirmar Password') }}
        {{ Form::password('password_confirmation', ['placeholder' => 'Confirmar Password', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::submit('Crear usuario', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}

</div>

@stop