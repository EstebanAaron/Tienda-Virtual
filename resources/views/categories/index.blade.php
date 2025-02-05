<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Categorias') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                <h1>Lista de Categorías</h1>
                <a href="{{ route('categories.create') }}"><button>Nueva Categoría</button></a>
                <table>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                    <tr>
                      <td>{{ $category->id }}</td>
                      <td>{{ $category->name }}</td>
                      <td>{{ $category->description }}</td>
                      <td>
                        <a href="{{ route('categories.show', $category) }}"><button>Ver</button></a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit">Eliminar</button>
                        </form>
                        <a href="{{ route('categories.edit', $category) }}"><button>Editar</button></a>
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
