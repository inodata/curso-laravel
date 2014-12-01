@extends('layout')

@section('head')
<style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px;
      }
      .container {
        width: 400px;
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px;
        -webkit-border-radius: 10px 10px 10px 10px;
           -moz-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      .error {
        color: red;
      }

    </style>
@stop

@section('content')

@section('navbar')
<center><h1>Curso Laravel</h1></center>
@stop

<div class="row">
    <div class="login-form">
        {{ Form::open(['route' => 'sessions.store', 'class' => 'form col-md-12 center-block']) }}
            <!-- check for login errors flash var -->
            @if (Session::has('login_errors'))
                <center><span class="error"><b>Email or Password incorrect.</b></span></center>
            @endif

            <div class="login-box">
                <div class="input-group ">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                </div>

                <div class="input-group ">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                </div>

                <div class='input-group'>{{ Form::submit('Login', ['class' => 'btn btn-primary btn-block']) }}</div>
            </div>
        {{ Form::close() }}
    </div>
</div>
@stop