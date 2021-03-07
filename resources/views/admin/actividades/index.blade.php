@extends('adminlte::page')

@section('title', 'Actividades')

@section('content_header')
    <h1>Listado de Actividades</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.actividades.create') }}" class="btn btn-secondary ">Agregar Actividades</a>
        </div>
        <div class="card-body">
            <table class="table table-stiped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>                    
                </thead>
                <tbody>
                     @foreach ($actividades as $actividade)
                        <tr>
                            <td>{{ $actividade->id }}</td>
                            <td>{{ $actividade->nombre }}</td>
                            <td width='10px'> 
                                <a href="{{ route('admin.actividades.edit',$actividade) }}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width='10px'>
                                <form action="{{ route('admin.actividades.destroy', $actividade) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                     @endforeach   
                </tbody>
            </table>
        </div>
    </div>
@stop

