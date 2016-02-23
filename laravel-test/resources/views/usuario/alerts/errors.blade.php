@if(Session::has('message-error'))
<div class="row col-sm-12">
    <div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
  <span class="sr-only">Sucesso:</span>
    <strong>Ops,</strong> {{Session::get('message-error')}}
  </div>
</div>      
@endif