@extends('layout.app')
@section('titulo','Listagem de empregados')
@section('conteudo')
<table class="table table-striped">
	<thead>
		<th scope="col"> CPF </th> 
		<th scope="col"> Nome </th> 
		<th scope="col"> Profissão </th> 
		<th scope="col"> Cargo </th> 
		<th scope="col"> Data de nascimento </th> 
	</thead>
	<tbody>
		@foreach ($empregado as $empregados)
		<tr>
			<td>{{$empregados->CPF}} </td>
			<td>{{$empregados->NOME}} </td>
			<td>{{$empregados->PROFISSAO}} </td>
			<td>{{$empregados->CARGO}} </td>
			<td>{{$empregados->DATANASC}} </td>
		</tr>
		@endforeach
	</tbody>
	<tfoot>
		<tr>
			<td><a href="{{URL::to('/empregado/cadastrar')}}"><button class="btn btn-default"type="button">Cadastre</button></a></td>
		</tr>
	</tfoot>
</table>
@endsection