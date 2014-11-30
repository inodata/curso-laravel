@extends('layout')

@section('content')

<table class="table table-bordered table-striped table-hover">
   <caption>Lista de usuarios</caption>
   <thead>
      <tr>
         <th>Username</th>
         <th>Email</th>
         <th>Creado</th>
         <th>Acciones</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($users as $user)
         <tr>
           <td>{{ $user->username }}</td>
           <td>{{ $user->email }}</td>
           <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
           <td>
               <a href="/users/{{ $user->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
               {{ Form::open(['url' => '/users/' . $user->id, 'method' => 'DELETE']) }}
               {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
               {{ Form::close() }}
           </td>
         </tr>
      @endforeach
   </tbody>
</table>
@endsection