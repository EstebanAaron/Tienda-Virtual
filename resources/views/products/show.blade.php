@extends('layouts.app');


@section('title', 'Producto');


@section('content');
<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Precio: {{ number_format($product->price, 2) }}€</p>
<p>Stock: {{ $product->stock }}</p>
@endsection;
