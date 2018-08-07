<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	{{Html::style ('css/bootstrap.min.css')}}

	<title>@yield('titulo')</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="{{URL::to('/empregado')}}">Crud - José Geraldo Costa Oliveira</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{URL::to('/empregado')}}">Lista <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{URL::to('/empregado/cadastrar')}}">Cadastro</a>
				</li>
				
				
			</ul>

		</div>
	</nav>


	<div class="conteudo">
		@yield('conteudo')

	</div>
	{{Html::script ('js/jquery-3.3.1.min.js')}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	{{Html::script ('js/bootstrap.min.js')}}
</body>
</html>