@extends('layout.app')

@section('page-title', 'Alunos')

@section('body')
	@if(count($alunos) <= 0)
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
@endsection
