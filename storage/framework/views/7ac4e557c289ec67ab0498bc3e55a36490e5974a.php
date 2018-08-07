<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php echo e(Html::style ('css/bootstrap.min.css')); ?>


	<title><?php echo $__env->yieldContent('titulo'); ?></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?php echo e(URL::to('/empregado')); ?>">Crud - José Geraldo Costa Oliveira</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo e(URL::to('/empregado')); ?>">Lista <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo e(URL::to('/empregado/cadastrar')); ?>">Cadastro</a>
				</li>
				
				
			</ul>

		</div>
	</nav>


	<div class="conteudo">
		<?php echo $__env->yieldContent('conteudo'); ?>

	</div>
	<?php echo e(Html::script ('js/jquery-3.3.1.min.js')); ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<?php echo e(Html::script ('js/bootstrap.min.js')); ?>

</body>
</html>