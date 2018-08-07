<?php $__env->startSection('titulo','Listagem de empregados'); ?>
<?php $__env->startSection('conteudo'); ?>
<table class="table table-striped">
	<thead>
		<th scope="col"> CPF </th> 
		<th scope="col"> Nome </th> 
		<th scope="col"> Profissão </th> 
		<th scope="col"> Cargo </th> 
		<th scope="col"> Data de nascimento </th> 
	</thead>
	<tbody>
		<?php $__currentLoopData = $empregado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empregados): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($empregados->CPF); ?> </td>
			<td><?php echo e($empregados->NOME); ?> </td>
			<td><?php echo e($empregados->PROFISSAO); ?> </td>
			<td><?php echo e($empregados->CARGO); ?> </td>
			<td><?php echo e($empregados->DATANASC); ?> </td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
	<tfoot>
		<tr>
			<td><a href="<?php echo e(URL::to('/empregado/cadastrar')); ?>"><button class="btn btn-default"type="button">Cadastre</button></a></td>
		</tr>
	</tfoot>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>