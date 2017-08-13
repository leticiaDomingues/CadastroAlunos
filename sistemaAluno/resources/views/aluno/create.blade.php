@extends('layout.app')

@section('page-title','Cadastrar aluno')

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
		<form action="/aluno" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group col-md-12">
			    <label for="nome">Nome</label>
			    <input type="text" class="form-control" id="nome" name="nome" >
			</div>
			<div class="form-row">
				<div class="form-group col-md-7">
			 		<label for="dataNasc" class="col-form-label">Data de Nascimento</label>
			 		<input class="form-control" type="date" id="dataNasc" name="dataNasc">
				</div>
				<div class="form-group col-md-5">
			 		<label for="serie" class="col-form-label">Série de Ingresso</label>
			  		<select id="serie" class="form-control" name="serie">
    					<option value="">Selecione</option>
    					<option value="1">1º ano</option>
    					<option value="2">2º ano</option>
    					<option value="3">3º ano</option>
    					<option value="4">4º ano</option>
    					<option value="5">5º ano</option>
    					<option value="6">6º ano</option>
    					<option value="7">7º ano</option>
    					<option value="8">8º ano</option>
    					<option value="9">9º ano</option>
  					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-10">
			 		<label for="rua" class="col-form-label">Rua</label>
			  		<input type="text" class="form-control" id="rua" name="rua">
				</div>
				<div class="form-group col-md-2">
			 		<label for="numero" class="col-form-label">Numero</label>
			  		<input type="text" class="form-control" id="numero" name="numero">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-5">
			 		<label for="bairro" class="col-form-label">Bairro</label>
			  		<input type="text" class="form-control" id="bairro" name="bairro">
				</div>
				<div class="form-group col-md-7">
			 		<label for="complemento" class="col-form-label">Complemento</label>
			  		<input type="text" class="form-control" id="complemento" placeholder="Opcional" name="complemento">
				</div>
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-6">
			 		<label for="cidade" class="col-form-label">Cidade</label>
			  		<input type="text" class="form-control" id="cidade" name="cidade">
				</div>
				<div class="form-group col-md-4">
			  		<label for="estado" class="col-form-label">Estado</label>
			  		<select id="estado" class="form-control" name="estado">
			  			<option value="">Selecione</option>
    					<option value="AC">Acre</option>
    					<option value="AL">Alagoas</option>
    					<option value="AP">Amapá</option>
    					<option value="AM">Amazonas</option>
    					<option value="BA">Bahia</option>
    					<option value="CE">Ceará</option>
    					<option value="DF">Distrito Federal</option>
			  			<option value="ES">Espírito Santo</option>
			  			<option value="GO">Goiás</option>
			  			<option value="MA">Maranhão</option>
			  			<option value="MT">Mato Grosso</option>
			  			<option value="MS">Mato Grosso do Sul</option>
			  			<option value="MG">Minas Gerais</option>
			  			<option value="PA">Pará</option>
			  			<option value="PB">Paraíba</option>
			  			<option value="PR">Paraná</option>
			  			<option value="PE">Pernambuco</option>
			  			<option value="PI">Piauí</option>
			  			<option value="RJ">Rio de Janeiro</option>
			  			<option value="RN">Rio Grande do Norte</option>
			  			<option value="RS">Rio Grande do Sul</option>
			  			<option value="RO">Rondônia</option>
			  			<option value="RR">Roraima</option>
			  			<option value="SC">Santa Catarina</option>
			  			<option value="SP">São Paulo</option>
			  			<option value="SE">Sergipe</option>
			  			<option value="TO">Tocantins</option>
			  		</select>
				</div>
				<div class="form-group col-md-2">
			 		<label for="cep" class="col-form-label">CEP</label>
			  		<input type="text" class="form-control" id="cep" placeholder="12345678" name="cep">
				</div>
			</div>
			<div class="form-group col-md-12">
			    <label for="nomeMae">Nome da Mãe</label>
			    <input type="text" class="form-control" id="nomeMae" name="nomeMae">
			</div>
			<div class="form-row">
				<div class="form-group col-md-8">
			 		<label for="cpfMae" class="col-form-label">CPF da Mãe</label>
			  		<input type="text" class="form-control" id="cpfMae" name="cpfMae" placeholder="12345678911">
				</div>
				<div class="form-group col-md-4">
			 		<label for="dataPagamento" class="col-form-label">Data Preferencial de Pagamento</label>
			  		<input class="form-control" type="date" id="dataPagamento" name="dataPagamento">
				</div>
			</div>
			<div class="form-group">
			<label display="hidden"></label>
			</div>
			<div class="form-group col-md-12" style="text-align:right">
				<a href="/aluno" class="btn btn-info" style="width:100px; margin-left:10px">Voltar</a>
				<button type="submit" class="btn btn-info" style="width:100px; margin-left:10px">Salvar</button>
			</div>
		</form>
	</div>
@endsection