@extends('layouts.app')


@section('title', 'Categoría')


@section('content')
<h1>{{ $category->name }}</h1>
<p>{{ $category->description }}</p>
<p>Productos: 
<ul>
  @foreach($category->products as $product)
    <li><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a> - {{ $product->price }}€</li>
  @endforeach
</ul>
</p>
@endsection
