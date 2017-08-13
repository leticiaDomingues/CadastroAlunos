@extends('layout.app')

@section('page-title','Editar aluno')

@section('body')
    <div class="col-md-9 col-md-offset-1">
    	@if ($errors->any())
		    <div class="alert alert-danger form-group col-md-12">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<form action="/aluno/{{$aluno->id}}" method="POST">
		    {{ csrf_field() }}
		    {{ method_field('PUT') }}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group col-md-12">
			    <label for="nome">Nome</label>
			    <input type="text" class="form-control" id="nome" name="nome" value="{{$aluno->nome}}">
			</div>
			<div class="form-row">
				<div class="form-group col-md-7">
			 		<label for="dataNasc" class="col-form-label">Data de Nascimento</label>
			 		<input class="form-control" type="date" id="dataNasc" name="dataNasc" value="{{$aluno->dataNasc}}">
				</div>
				<div class="form-group col-md-5">
			 		<label for="serie" class="col-form-label">Série de Ingresso</label>
			  		<select id="serie" class="form-control" name="serie">
			  			<option value="">Selecione</option>
				  		@for($i = 1; $i <= 9; $i++)
						    <option value="{{ $i }}"
						    @if($i == $aluno->serie)
						        selected="selected"
						    @endif
						    >{{ $i }}º ano</option>
						@endfor
  					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-10">
			 		<label for="rua" class="col-form-label">Rua</label>
			  		<input type="text" class="form-control" id="rua" name="rua" value="{{$aluno->rua}}">
				</div>
				<div class="form-group col-md-2">
			 		<label for="numero" class="col-form-label">Numero</label>
			  		<input type="text" class="form-control" id="numero" name="numero" value="{{$aluno->numero}}">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-5">
			 		<label for="bairro" class="col-form-label">Bairro</label>
			  		<input type="text" class="form-control" id="bairro" name="bairro" value="{{$aluno->bairro}}">
				</div>
				<div class="form-group col-md-7">
			 		<label for="complemento" class="col-form-label">Complemento</label>
			  		<input type="text" class="form-control" id="complemento" placeholder="Opcional" name="complemento" value="{{$aluno->complemento}}">
				</div>
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-6">
			 		<label for="cidade" class="col-form-label">Cidade</label>
			  		<input type="text" class="form-control" id="cidade" name="cidade" value="{{$aluno->cidade}}">
				</div>
				<div class="form-group col-md-4">
			  		<label for="estado" class="col-form-label">Estado</label>
			  		<select id="estado" class="form-control" name="estado">
					@foreach ($estados as $estado)
					    <option value="{{ $estado[0] }}"
					    @if ($estado[0] == $aluno->estado)
					        selected="selected"
					    @endif
					    >{{ $estado[1] }}</option>
					@endforeach
			  			
			  		</select>
				</div>
				<div class="form-group col-md-2">
			 		<label for="cep" class="col-form-label">CEP</label>
			  		<input type="text" class="form-control" id="cep" placeholder="11111-111" name="cep" value="{{$aluno->cep}}">
				</div>
			</div>
			<div class="form-group col-md-12">
			    <label for="nomeMae">Nome da Mãe</label>
			    <input type="text" class="form-control" id="nomeMae" name="nomeMae" value="{{$aluno->nomeMae}}">
			</div>
			<div class="form-row">
				<div class="form-group col-md-8">
			 		<label for="cpfMae" class="col-form-label">CPF da Mãe</label>
			  		<input type="text" class="form-control" id="cpfMae" name="cpfMae" value="{{$aluno->cpfMae}}">
				</div>
				<div class="form-group col-md-4">
			 		<label for="dataPagamento" class="col-form-label">Data Preferencial de Pagamento</label>
			  		<input class="form-control" type="date" id="dataPagamento" name="dataPagamento" value="{{$aluno->dataPagamento}}">
				</div>
			</div>
			<div class="form-group">
			<label display="hidden"></label>
			</div>
			<div class="form-group col-md-12" style="text-align:right">
				<a href="/aluno" class="btn btn-info" style="width:100px; margin-left:10px">Voltar</a>
				<button type="submit" class="btn btn-info" style="width:100px; margin-left:10px">Editar</button>
			</div>
		</form>
	</div>
@endsection	