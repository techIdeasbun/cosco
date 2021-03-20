@extends('adminlte::page')

@section('title', 'Calificar Accidentes ')

@section('content_header')
    <h1>Listado de Transportes y Calificacion de Accidentes Por Ciudad</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        
        <div class="card-body">
            <table class="table table-stiped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Empresa</th>
                        <th>Ciudad</th>
                        <th>Valoracion</th>                        
                    </tr>                    
                </thead>
                <tbody>
                     @foreach ($accidentes as $accidente)
                        <tr>
                            <td>{{ $accidente->id }}</td>
                            <td>{{ $accidente->transporte_id }}</td>
                            <td>{{ $accidente->ciudade_id }}</td>
                            <td>{{ $accidente->valoracion }}</td>                            
                        </tr>
                     @endforeach   
                </tbody>
            </table>
        </div>
    </div>
@stop

