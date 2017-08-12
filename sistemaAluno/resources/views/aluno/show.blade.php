@extends('layout.app')

@section('page-title','Detalhes do aluno')

@section('body')
    
    <div class="col-md-9 col-md-offset-1">
    	<div class="form-group col-md-12">
    		<label for="nome">Nome</label>
			<span id="nome" class="form-control">{{$aluno->nome}}</span>
		</div>
		<div class="form-row">
			<div class="form-group col-md-7">
		 		<label for="dataNasc" class="col-form-label">Data de Nascimento</label>
		 		<span class="form-control" id="dataNasc">{{$aluno->dataNasc}}</span>
			</div>
			<div class="form-group col-md-5">
		 		<label for="serie" class="col-form-label">Série de Ingresso</label>
		  		<span id="serie" class="form-control">{{$aluno->serie}}º ano</span>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-10">
		 		<label for="rua" class="col-form-label">Rua</label>
		  		<span class="form-control" id="rua">{{$aluno->rua}}</span>
			</div>
			<div class="form-group col-md-2">
		 		<label for="numero" class="col-form-label">Numero</label>
		  		<span class="form-control" id="numero" >{{$aluno->numero}}</span>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-5">
		 		<label for="bairro" class="col-form-label">Bairro</label>
		  		<span class="form-control" id="bairro" >{{$aluno->bairro}}</span>
			</div>
			<div class="form-group col-md-7">
		 		<label for="complemento" class="col-form-label">Complemento</label>
		  		<span class="form-control" id="complemento">{{$aluno->complemento}}</span>
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-6">
		 		<label for="cidade" class="col-form-label">Cidade</label>
		  		<span class="form-control" id="cidade">{{$aluno->cidade}}</span>
			</div>
			<div class="form-group col-md-4">
		  		<label for="estado" class="col-form-label">Estado</label>
		  		<span id="estado" class="form-control">{{$aluno->estado}}</span>
			</div>
			<div class="form-group col-md-2">
		 		<label for="cep" class="col-form-label">CEP</label>
		  		<span class="form-control" id="cep">{{$aluno->cep}}</span>
			</div>
		</div>
		<div class="form-group col-md-12">
		    <label for="nomeMae">Nome da Mãe</label>
		    <span class="form-control" id="nomeMae" >{{$aluno->nomeMae}}</span>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
		 		<label for="cpfMae" class="col-form-label">CPF da Mãe</label>
		  		<span class="form-control" id="cpfMae" >{{$aluno->cpfMae}}</span>
			</div>
			<div class="form-group col-md-4">
		 		<label for="dataPagamento" class="col-form-label">Data Preferencial de Pagamento</label>
		  		<span class="form-control" id="dataPagamento">{{$aluno->dataPagamento}}</span>
			</div>
		</div>
		<div class="form-group">
			<label display="hidden"></label>
		</div>
		<div class="form-group col-md-12" style="text-align:right">
			<a href="/aluno" class="btn btn-info" style="width:100px; margin-left:10px">Voltar</a>
		</div>
    </div>
@endsection