   
    <?php $__env->startSection('content'); ?>
    
    <?php /* Incluimos as validacoes do formulario */ ?>
    <?php echo $__env->make('usuario.alerts.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
	<?php echo Form::model($user, ['route'=>['usuario.update',$user->id], 'method'=>'PUT']); ?>

        <?php echo $__env->make('usuario.forms.usr', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    <div class="row text-center">
        <div class="col-sm-5"></div>
        <div class="col-sm-1">
        	<?php echo Form::submit('Actualizar',['class'=>'btn btn-primary']); ?>

        	<?php echo Form::close(); ?>

        </div>
        <div class="col-sm-1">
        	<?php echo Form::open(['route'=>['usuario.destroy',$user->id], 'method'=>'DELETE']); ?>

        	<?php echo Form::submit('Eliminar',['class'=>'btn btn-danger']); ?>

    	</div>
    	<div class="col-sm-5"></div>
	</div>

	<?php echo Form::close(); ?>


        
	
	
       
   

	

	
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>