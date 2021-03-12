@extends('adminlte::page')

@section('title', 'Crear Nueva Ciudades')

@section('content_header')
    <h1>Crear Ciudades</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.ciudades.store']) !!}

                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese El Nombre De La Ciudad']) !!}
                
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
                    {!! Form::submit('Crear Ciudad', ['class'=>'btn btn-primary']) !!}
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

