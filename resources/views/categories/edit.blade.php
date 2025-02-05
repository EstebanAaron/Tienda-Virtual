
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Editar Categoria') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                <h1>Editar Categoría</h1>
                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <label for="name">Nombre</label>
                  <input type="text" name="name" id="name" value="{{ $category->name }}" required>
                  <label for="description">Descripción</label>
                  <textarea name="description" id="description" required>{{ $category->description }}</textarea>
                  <button type="submit">Actualizar</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>

