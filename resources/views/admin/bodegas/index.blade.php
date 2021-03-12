@extends('adminlte::page')

@section('title', 'Bodegas')

@section('content_header')
    <h1>Listado de Bodegas</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.bodegas.create') }}" class="btn btn-secondary ">Agregar Bodega</a>
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
                     @foreach ($bodegas as $bodega)
                        <tr>
                            <td>{{ $bodega->id }}</td>
                            <td>{{ $bodega->nombre }}</td>
                            <td width='10px'> 
                                <a href="{{ route('admin.bodegas.edit',$bodega) }}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width='10px'>
                                <form action="{{ route('admin.bodegas.destroy', $bodega) }}" method="post">
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

