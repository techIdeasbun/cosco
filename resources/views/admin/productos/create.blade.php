@extends('adminlte::page')

@section('title', 'Crear Nuevo Producto')

@section('content_header')
    <h1>Crear Producto'</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.productos.store']) !!}

                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese El Nombre Del Producto']) !!}
                
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class'=>'form-control', 'readonly']) !!}
                
                    @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> 

                <div class="form-group">
                    {!! Form::label('calidad', 'Calidad') !!}
                    {!! Form::text('calidad', null, ['class'=>'form-control','placeholder'=>'Ingrese El Nombre De La Calidad']) !!}
                
                    @error('calidad')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::submit('Crear Producto', ['class'=>'btn btn-primary']) !!}
                </div>
                

            {!! Form::close() !!}
        </div>
    </div>
@stop
@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection

