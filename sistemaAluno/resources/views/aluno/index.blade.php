<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
    </head>
    <body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Gerenciamento de Alunos</a>
            </div>
		</nav>
        <div class=" position-ref full-height">
            <div class="content col-xs-12 col-md-10 col-md-offset-1">
            	<h1 class="page-header">Alunos</h1>

 				@if($alunos==null)
 					<div class="nenhum-aluno">
    					Nenhum aluno cadastrado.
    				</div>
    			@else
   					<div class="table-responsive">
	                    <table class="table table-striped" id="tabela-alunos">
	                        <thead>
	                            <tr>
	                                <th style="display:none"></th>
	                                <th style="width:10%">Série</th>
	                                <th style="width:65%">Nome</th>
	                                <th style="width:25%">Ações</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            @foreach ($alunos as $aluno)
		                            <tr>
		                                <td style="display:none">{{ $aluno->id }}</td>
		                                <td style="width:10%">{{ $aluno->serie }}</td>
		                                <td style="width:65%">{{ $aluno->nome }}</td>
		                                <td>
		                                	<button type="button" class="btn btn-info btn-outline btn-circle" title="Ver detalhes">
		                                		<i class="fa fa-eye"></i>
	                            			</button>
	                            			<button type="button" class="btn btn-warning btn-outline btn-circle" title="Editar">
		                                		<i class="fa fa-pencil"></i>
	                            			</button>
	                            			<button type="button" class="btn btn-danger btn-outline btn-circle" title="Excluir">
		                                		<i class="fa fa-times"></i>
	                            			</button>
		                                </td style="width:25%">
		                            </tr>
	                            @endforeach
	                        </tbody>
	                    </table>
	                </div>
				@endif

                <div class="col-md-1 col-md-offset-11">
	                <button type="button" class="btn btn-info btn-circle btn-lg" title="Cadastrar novo aluno" onclick="window.location='{{ url("aluno/create") }}'">
	                	<i class="fa fa-plus"></i>
	                </button>
                </div>
            </div>
        </div>
    </body>
</html>
