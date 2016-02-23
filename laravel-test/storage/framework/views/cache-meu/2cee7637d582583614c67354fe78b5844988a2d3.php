<?php $__env->startSection('content'); ?>

<?php echo $__env->make('usuario.alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Operacion</th>
        </thead>
        <?php foreach($users as $user): ?>
        <tbody>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo link_to_route('usuario.edit', $title='Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']); ?></td>
        </tbody>
        <?php endforeach; ?>
    </table>
	<div class="row text-center">
        <?php echo $users->links(); ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>