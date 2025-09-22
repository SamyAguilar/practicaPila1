@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>{{ $producto->nombre }}</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Descripción:</strong></p>
                        <p>{{ $producto->descripcion ?? 'Sin descripción' }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
                        <p><strong>Stock:</strong> {{ $producto->stock }}</p>
                        <p><strong>Categoría:</strong> {{ $producto->categoria }}</p>
                        <p><strong>Estado:</strong> 
                            <span class="badge {{ $producto->activo ? 'bg-success' : 'bg-danger' }}">
                                {{ $producto->activo ? 'Activo' : 'Inactivo' }}
                            </span>
                        </p>
                        <p><strong>Creado:</strong> {{ $producto->created_at->format('d/m/Y H:i') }}</p>
                        <p><strong>Actualizado:</strong> {{ $producto->updated_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>

                <div class="mt-3">
                    <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
                    
                    <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection