	<div class="form-group">
		<?php echo Form::label('nombre','Nombre:'); ?>

		<?php echo Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario']); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('email','Correo:'); ?>

		<?php echo Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario']); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('password','Contraseña:'); ?>

		<?php echo Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario']); ?>

	</div>
