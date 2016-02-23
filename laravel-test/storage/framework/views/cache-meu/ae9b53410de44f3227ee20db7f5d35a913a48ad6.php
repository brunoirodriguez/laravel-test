	<?php $__env->startSection('content'); ?>
	
	<?php echo $__env->make('usuario.alerts.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	
	<?php echo Form::open(['route'=>'usuario.store', 'method'=>'POST']); ?>

        <?php echo $__env->make('usuario.forms.usr', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
	<?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

	<?php echo Form::close(); ?>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>