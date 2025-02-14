@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('content')
    <div class="container">
        @include('components.forms.form', [
            'action' => route('labors.update', $labor),
            'method' => 'PUT',
            'labor' => $labor,
            'buttonText' => 'Actualizar',
            'buttonClass' => 'primary'
        ])
    </div>
@endsection
