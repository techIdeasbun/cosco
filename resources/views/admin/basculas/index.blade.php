@extends('adminlte::page')

@section('title', 'Basculas')

@section('content_header')
    <h1>Listado de Basculas</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.basculas.create') }}" class="btn btn-secondary ">Agregar Basculas</a>
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
                     @foreach ($basculas as $bascula)
                        <tr>
                            <td>{{ $bascula->id }}</td>
                            <td>{{ $bascula->nombre }}</td>
                            <td width='10px'> 
                                <a href="{{ route('admin.basculas.edit',$bascula) }}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width='10px'>
                                <form action="{{ route('admin.basculas.destroy', $bascula) }}" method="post">
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

