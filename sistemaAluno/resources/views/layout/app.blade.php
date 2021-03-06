<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/estudante.png" />

        <title>Gerenciamento de Alunos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel = "stylesheet" type = "text/css" href="{{ URL::asset('css/bootstrap/vendor/bootstrap/css/bootstrap.min.css') }}"/>
        <link rel = "stylesheet" type = "text/css" href="{{ URL::asset('css/bootstrap/vendor/metisMenu/metisMenu.min.css') }}"/>
        <link rel = "stylesheet" type = "text/css" href="{{ URL::asset('css/bootstrap/vendor/bootstrap-social/bootstrap-social.css') }}"/>
        <link rel = "stylesheet" type = "text/css" href="{{ URL::asset('css/bootstrap/dist/css/sb-admin-2.css') }}"/>
        <link rel = "stylesheet" type = "text/css" href="{{ URL::asset('css/bootstrap/vendor/font-awesome/css/font-awesome.min.css') }}"/>
        <link rel = "stylesheet" type = "text/css" href="{{ URL::asset('css/bootstrap/vendor/datatables-plugins/dataTables.bootstrap.css') }}"/>
        <link rel = "stylesheet" type = "text/css" href="{{ URL::asset('css/bootstrap/vendor/datatables-responsive/dataTables.responsive.css') }}"/>
        
        <link rel = "stylesheet" type = "text/css" href="{{ URL::asset('css/app.css') }}"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                    <a class="navbar-brand" href="\">Gerenciamento de Alunos</a>
                    <img src="\estudante.png" style="width:40px;margin-top:4px"/>
            </div>
		</nav>
        <div class=" position-ref full-height">
            <div class="content col-xs-12 col-md-10 col-md-offset-1">
            	<h1 class="page-header">@yield('page-title')</h1>
                @section('body')
                    @show
            </div>
        </div>
    </body>
</html>
