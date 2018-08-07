<?php $__env->startSection('titulo','Adicionando novo empregado'); ?>
<?php $__env->startSection('conteudo'); ?>
<h1>Adicionando novo empregado</h1>
<form method="POST" action="create">
	<input type="text" name="CPF"  class="form-control" required name=CPF placeholder="CPF">
	<input type="text" name="NOME"class="form-control" required name=NOME placeholder="NOME">
	<input type="text" name="PROFISSAO" class="form-control" placeholder="PROFISSAO">
	<input type="text" name="CARGO" class="form-control" placeholder="CARGO">
	<input type="date" name="DATANASC" class="form-control" placeholder="DATA DE NASCIMENTO">
	<input type="hidden" name="_token"  value="<?php echo e(csrf_token()); ?>">
	<input type="submit" class="btn btn-default" value="Salvar">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>