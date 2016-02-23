
@extends('layouts.admin')
   
    @section('content')
    
    {{-- Incluimos as validacoes do formulario --}}
    @include('usuario.alerts.request')
    
	{!!Form::model($user, ['route'=>['usuario.update',$user->id], 'method'=>'PUT'])!!}
        @include('usuario.forms.usr');
    <div class="row text-center">
        <div class="col-sm-5"></div>
        <div class="col-sm-1">
        	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
        	{!!Form::close()!!}
        </div>
        <div class="col-sm-1">
        	{!!Form::open(['route'=>['usuario.destroy',$user->id], 'method'=>'DELETE'])!!}
        	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
    	</div>
    	<div class="col-sm-5"></div>
	</div>

	{!!Form::close()!!}

        
	
	
       
   

	

	
	@endsection