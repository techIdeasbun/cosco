@extends('adminlte::page')

@section('title', 'Editar Supervision')

@section('content_header')
    <h1>Editar Supervision</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($supervisione, ['route'=>['admin.supervisiones.update',$supervisione], 'method'=>'put']) !!}

            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese El Nombre De La Supervision']) !!}
            
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
                {!! Form::submit('Actualizar Supervision', ['class'=>'btn btn-primary']) !!}
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
