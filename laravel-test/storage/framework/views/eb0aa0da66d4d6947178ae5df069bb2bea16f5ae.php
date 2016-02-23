<?php $__env->startSection('content'); ?>
    
    <?php echo Form::open(); ?>

<div class="form-group">
    <?php echo Form::label('genre','Nombre: '); ?>

    <?php echo Form::text('genre', null, ['id' => 'genre', 'class' => 'form-control', 'placeholder' => 'Ingresa el nombre']); ?>

</div>
    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>