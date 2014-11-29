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

      .login-form {
        margin-left: 65px;
      }
       .error {
        color: red;
      }

      legend {
        margin-right: -50px;
        font-weight: bold;
        color: #404040;
      }

    </style>
@stop

@section('content')
<div class="row">
    <div class="login-form">
        {{ Form::open(['route' => 'sessions.store']) }}
            <!-- check for login errors flash var -->
            @if (Session::has('login_errors'))
                <center><span class="error"><b>Username or password incorrect.</b></span></center>
            @endif

            <fieldset>
                <div class="clearfix">
                    {{ Form::label('email', 'Email: ') }}
                    <div class="div_texbox">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            {{ Form::email('email') }}
                        </div>
                    </div>
                </div>

                <div class="clearfix">
                    {{ Form::label('password', 'Password: ') }}
                    <div class="div_texbox">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span>
                            {{ Form::password('password') }}
                        </div>
                    </div>

                </div>

                <div>{{ Form::submit('Login') }}</div>
            </fieldset>
        {{ Form::close() }}
    </div>
</div>
@stop