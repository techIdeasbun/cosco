@extends('adminlte::page')

@section('title', 'Editar Actividad')

@section('Editar Actividad')
    <h1>Cosco</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($actividade, ['route'=>['admin.actividades.update',$actividade], 'method'=>'put']) !!}

            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese El Nombre De La Actividad']) !!}
            
                @error('nombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::submit('Actualizar Actividad', ['class'=>'btn btn-primary']) !!}
            </div>
            

        {!! Form::close() !!}
    </div>
</div>
@stop
