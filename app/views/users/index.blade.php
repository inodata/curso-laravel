@extends('layout')

@section('content')

<table class="table table-bordered table-striped table-hover">
   <caption>Lista de usuarios</caption>

   <!-- Aqui van los mensajes en caso de que existan -->
   @if (Session::has('message'))
       <div class="alert alert-info">{{ Session::get('message') }}</div>
   @endif

   <thead>
      <tr>
         <th>Username</th>
         <th>Email</th>
         <th>Creado</th>
         <th>Ultima Edicion</th>
         <th>Acciones</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($users as $user)
         <tr>
           <td>{{ $user->username }}</td>
           <td>{{ $user->email }}</td>
           <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
           <td>{{ $user->updated_at->format('F d, Y') }}</td>
           <td>
            <a href="{{ URL::to('users/' . $user->id) }}" class="btn btn-small btn-success" >Mostrar</a>
            <a href="{{ URL::to('users/'.$user->id.'/edit') }}" class="btn btn-info" style="margin-right: 3px;">Editar</a>
            {{ Form::open(['url' => '/users/' . $user->id, 'method' => 'DELETE']) }}
              {{ Form::submit('Eliminar', ['class' => 'btn btn-danger'])}}
            {{ Form::close() }}
           </td>
         </tr>
      @endforeach
   </tbody>
</table>
@endsection