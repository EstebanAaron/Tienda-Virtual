


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
                
                
                
                <h1>Lista de Productos</h1>
                <a href="{{ route('products.create') }}"><button>Nuevo Producto</button></a>
                
                <table>
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
                        <a href="{{ route('products.show', $product) }}"><button>Ver</button></a>
                        <form action="{{ route('products.destroy', $product) }}"
                          method="POST" style="display: inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit">Eliminar</button>
                        </form>
                        <a href="{{ route('products.edit', $product) }}">
                          <button>Editar</button>
                        </a>
                
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