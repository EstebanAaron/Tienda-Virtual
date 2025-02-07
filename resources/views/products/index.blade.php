


<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Productos') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                
                <h1 class="text-2xl font-bold mb-4">Lista de Productos</h1>
                @if (Auth::check()&& Auth::user()->is_admin)
                <a href="{{ route('products.create') }}"><button class="btn">Nuevo Producto</button></a>
                @endif
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Categoría</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Precio</th>
                      <th>Stock</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                    <tr>
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->category->name }}</td>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->description }}</td>
                      <td>{{ number_format($product->price, 2) }}€</td>
                      <td>{{ $product->stock }}</td>
                      <td>
                        <a href="{{ route('products.show', $product) }}"><button class="btn">Ver</button></a>
                        <form action='{{ route("cart.addToCart", $product)}}' method="post" class="inline">
                          @csrf
                          <button type="submit" class="btn">Añadir al carrito</button>
                        </form>
                        
                        @if (Auth::check()&& Auth::user()->is_admin)
                        <form action="{{ route('products.destroy', $product) }}"
                          method="POST" style="display: inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn danger">Eliminar</button>
                        </form>
                        <a href="{{ route('products.edit', $product) }}">
                          <button class="btn warning">Editar</button>
                        </a>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                
              </div>
          </div>
      </div>
  </div>
</x-app-layout>

