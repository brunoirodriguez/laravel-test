
@extends('layouts.admin')

@section('content')

@include('usuario.alerts.success')

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
	<div class="row text-center">
        {!!$users->links()!!}
    </div>

@endsection