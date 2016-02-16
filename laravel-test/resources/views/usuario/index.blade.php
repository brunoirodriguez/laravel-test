
@extends('layouts.admin')

@section('content')




@if(Session::has('message'))
<div class="row col-sm-12">
    <div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
  <span class="sr-only">Sucesso:</span>
    <strong>Parabéns,</strong> {{Session::get('message')}}
  </div>
</div>      
@endif

    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Operacion</th>
        </thead>
        @foreach($users as $user)
        <tbody>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{!!link_to_route('usuario.edit', $title='Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
        </tbody>
        @endforeach
    </table>


@endsection