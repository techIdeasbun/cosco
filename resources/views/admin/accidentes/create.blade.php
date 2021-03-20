@extends('adminlte::page')

@section('title', 'Calificar Accidente')

@section('content_header')
    <h1>Calificar Accidente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.accidentes.store']) !!}

                <div class="form-group">
                    {!! Form::label('valoracion', 'Valoracion') !!}
                    {!! Form::text('valoracion', null, ['class'=>'form-control','placeholder'=>'Ingrese la Valoracion']) !!}
                
                    @error('valoracion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('ciudade_id', 'Ciudad') !!}
                    {!! Form::select('ciudade_id', $ciudades, null, ['class'=>'form-control']) !!}
                
                    @error('ciudade_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('transporte_id', 'Transporte') !!}
                    {!! Form::select('transporte_id', $transportes, null, ['class'=>'form-control']) !!}
                
                    @error('transporte_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                </div>
                

            {!! Form::close() !!}
        </div>
    </div>
@stop


