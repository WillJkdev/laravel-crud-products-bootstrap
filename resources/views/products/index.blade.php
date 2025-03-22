@extends('layout.app')

@section('title', 'Products List')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Lista de Productos</h1>
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="text-end">
                    <a href="{{ route('products.create') }}" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Crear
                        Producto</a>
                </div>

                <table class="table">
                    <thead class="border-black">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="align-middle">
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td class="d-flex gap-2 justify-content-end">
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary"><i
                                            class="bi bi-eye"></i> Ver</a>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success"><i
                                            class="bi bi-pencil"></i> Editar</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('¿Desea eliminar el producto?')">
                                            <i class="bi bi-trash"></i>
                                            Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
