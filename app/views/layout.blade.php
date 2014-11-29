<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('bootstrap/css/bootstrap.css') }}
        {{ HTML::style('bootstrap/css/bootstrap-responsive.css') }}
        @yield('head')
    </head>
    <body>
        <center>
            <h1>Curso Laravel</h1>
        </center>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.8.2.js') }}
        {{ HTML::script('bootstrap/js/bootstrap.min.js') }}

    </body>
</html>