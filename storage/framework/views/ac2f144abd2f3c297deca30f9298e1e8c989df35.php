public function create()
<h1>Adicionando novo empregado</h1>
<form method="POST" action="<?php echo e(route ('empregado.store')); ?>">
	<?php echo csrf_field(); ?>

	<input type="text" name="CPF" value="" placeholder="CPF">


	<input type="text" name="NOME" value="" placeholder="NOME">
	
	<input type="text" name="PROFISSAO" value="" placeholder="PROFISSAO">

	<input type="text" name="CARGO" value="" placeholder="CARGO">
	
	<input type="text" name="DATAADMISAO" value="" placeholder="DATAADMISAO">
	
	<input type="submit" name="name" value="Salvar">


</form>