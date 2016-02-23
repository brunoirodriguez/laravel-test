<?php if(Session::has('message')): ?>
<div class="row col-sm-12">
    <div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
  <span class="sr-only">Sucesso:</span>
    <strong>Parabéns,</strong> <?php echo e(Session::get('message')); ?>

  </div>
</div>      
<?php endif; ?>