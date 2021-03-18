@extends('adminlte::page')

@section('title', 'Transportes')

@section('content_header')
    <h1>Listado de Transportes</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.transportes.create') }}" class="btn btn-secondary ">Agregar Transportes</a>
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
                     @foreach ($transportes as $transporte)
                        <tr>
                            <td>{{ $transporte->id }}</td>
                            <td>{{ $transporte->nombre }}</td>
                            <td width='10px'> 
                                <a href="{{ route('admin.transportes.edit',$transporte) }}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width='10px'>
                                <form action="{{ route('admin.transportes.destroy', $transporte) }}" method="post">
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

