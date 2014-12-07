@extends('layout')

@section('title') Monstrar Usuario @stop

@section('content')

<h1>Monstrando a {{ $user->username }}</h1>

<div class="jumbotron text-center">
    <h2>{{ $user->name }}</h2>
    <p>
        <strong>Email:</strong> {{ $user->email }}<br>
        <strong>Creado el:</strong> {{ $user->created_at }}
    </p>
</div>

@stop