@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <h1>Editar Producto</h1>

        <form action="{{ route('productos.update', $producto) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $producto->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcion" id="descripcion" rows="3">{{ $producto->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" name="precio" id="precio" value="{{ $producto->precio }}" required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" name="stock" id="stock" value="{{ $producto->stock }}" required>
            </div>

            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría</label>
                <select class="form-control" name="categoria" id="categoria" required>
                    <option value="">Seleccionar categoría</option>
                    <option value="Electrónicos" {{ $producto->categoria == 'Electrónicos' ? 'selected' : '' }}>Electrónicos</option>
                    <option value="Ropa" {{ $producto->categoria == 'Ropa' ? 'selected' : '' }}>Ropa</option>
                    <option value="Hogar" {{ $producto->categoria == 'Hogar' ? 'selected' : '' }}>Hogar</option>
                    <option value="Deportes" {{ $producto->categoria == 'Deportes' ? 'selected' : '' }}>Deportes</option>
                    <option value="Libros" {{ $producto->categoria == 'Libros' ? 'selected' : '' }}>Libros</option>
                </select>
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="activo" id="activo" value="1" {{ $producto->activo ? 'checked' : '' }}>
                    <label class="form-check-label" for="activo">
                        Activo
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection