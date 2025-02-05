@extends('layouts.app')

@section('title', 'Editar Producto')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endpush

@section('content')
<h1>Editar Producto</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
  @csrf
  @method('PUT')
  <label for="name">Nombre</label>
  <input type="text" name="name" id="name" value="{{ $product->name }}" required>
  <label for="description">Descripción</label>
  <textarea name="description" id="description" required>{{ $product->description }}</textarea>
  <label for="price">Precio</label>
  <input type="number" name="price" id="price" step="0.01" value="{{ $product->price }}" required>
  <label for="stock">Stock</label>
  <input type="number" name="stock" id="stock" value="{{ $product->stock }}" required>
  <label for="category">Categoría</label>
<select name="category_id" id="category" required>
  @foreach($categories as $category)
    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
      {{ $category->name }}
    </option>
  @endforeach
</select>
  <button type="submit">Actualizar</button>
</form>
@endsection
