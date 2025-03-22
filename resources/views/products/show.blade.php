@extends('layout.app')

@section('title', 'Mostrar Producto')

@section('content')
    <div class="container py-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h1 class="h4 mb-0">Detalles del Producto</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>ID:</strong> {{ $product->id }}</p>
                        <p><strong>Nombre:</strong> {{ $product->name }}</p>
                        <p><strong>Descripción:</strong> {{ $product->description }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
                        <p><strong>Fecha de creación:</strong> {{ $product->created_at->format('d/m/Y H:i') }}</p>
                        <p><strong>Fecha de actualización:</strong> {{ $product->updated_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">
                    <i class="bi bi-pencil"></i> Editar
                </a>
            </div>
        </div>
    </div>
@endsection
