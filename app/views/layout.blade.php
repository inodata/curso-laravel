<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('bootstrap/css/bootstrap.css') }}
        @yield('head')
    </head>
    <body>
        <div class="container">
            @section('navbar')
                <nav class="nav navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/hello">Curso Laravel</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ URL::to('users') }}">Listar usuarios</a></li>
                        <li><a href="{{ URL::to('users/create') }}">Crear usuario</a></li>
                        <li><a href="{{ URL::to('logout') }}">Salir</a></li>
                    </ul>
               </nav>

            @show
            <div class="content">
                @yield('content')
            </div>
        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.8.2.js') }}
        {{ HTML::script('bootstrap/js/bootstrap.min.js') }}

    </body>
</html>