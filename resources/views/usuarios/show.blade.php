@extends('layouts.app')

@section('content')

<h1>Detalle del Usuario</h1>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Nombre:</h5>
        <p class="card-text">{{ $usuario->nombre }}</p>

        <h5 class="card-title">Email:</h5>
        <p class="card-text">{{ $usuario->email }}</p>

        <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver</a>
    </div>
</div>

@endsection