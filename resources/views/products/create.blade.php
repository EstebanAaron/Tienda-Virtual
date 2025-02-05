@extends('layouts.app')


@section('title', 'Nuevo Producto')


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endpush


@section('content')
<h1>Nuevo Producto</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" required>
    <label for="description">Descripción</label>
    <textarea name="description" id="description" required></textarea>
    <label for="price">Precio</label>
    <input type="number" name="price" id="price" step="0.01" required>
    <label for="stock">Stock</label>
    <input type="number" name="stock" id="stock" required>
    
    <label for="category">Categoría</label>
    <select name="category_id" id="category" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <button type="submit">Guardar</button>
</form>
@endsection
