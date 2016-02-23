<?php if(count($errors) > 0): ?>
	
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button class="close" type="button" data-dismiss="alert" aria-label="close">
			<span aria-hidden="true">&times;</span>
		</button>
		<ul>
			<?php foreach($errors->all() as $error): ?>
				<li><?php echo $error; ?></li>
			<?php endforeach; ?>
		</ul>
	</div>

<?php endif; ?>