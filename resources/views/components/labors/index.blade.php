@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>Listado de Labores</h1>
        <a href="{{ route('labors.create') }}" class="btn btn-primary">Registrar Nueva Labor</a>

        @if(session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
        @endif

        @if(isset($labors) && $labors->count() > 0)
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Labor</th>
                    <th>Fecha</th>
                    <th>Cantidad</th>
                    <th>Tarifa</th>
                    <th>Empleado</th>
                    <th>Lote</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($labors as $labor)
                    <tr>
                        <td>{{ $labor->id }}</td>
                        <td>{{ $labor->labor_realizada }}</td>
                        <td>{{ $labor->fecha }}</td>
                        <td>{{ $labor->cantidad }}</td>
                        <td>{{ $labor->tarifa }}</td>
                        <td>{{ $labor->empleado }}</td>
                        <td>{{ $labor->lote }}</td>
                        <td>
                            <a href="{{ route('labors.edit', $labor) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('labors.destroy', $labor) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p class="mt-3">No hay labores registradas.</p>
        @endif
    </div>
@endsection


