
@extends('layout.app')
@section('titulo','Adicionando novo empregado')
@section('conteudo')
<h1>Adicionando novo empregado</h1>
<form method="POST" action="create">
	<input type="text" pattern="[0-9]{11}$"  title="cpf, apenas numeros, com 11 digitos" name="CPF" maxlength="11" minlength="11" class="form-control" required name=CPF placeholder="CPF, somente numeros">
	<input type="text"  name="NOME"class="form-control" required name=NOME placeholder="NOME">
	<input type="text" name="PROFISSAO" class="form-control" placeholder="PROFISSAO">
	<input type="text" name="CARGO" class="form-control" placeholder="CARGO">
	<input type="date" name="DATANASC" class="form-control" placeholder="DATA DE NASCIMENTO">
	<input type="hidden" name="_token"  value="{{ csrf_token() }}">
	<input type="submit" class="btn btn-default" value="Salvar">
</form>
@endsection