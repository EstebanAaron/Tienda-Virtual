
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
                <h1 class="text-2xl font-bold mb-4">Editar Categoría</h1>
                <form action="{{ route('categories.update', $category->id) }}" method="POST" class="form">
                  @csrf
                  @method('PUT')
                  <label for="name" class="form-label">Nombre</label>
                  <input type="text" name="name" id="name" value="{{ $category->name }}" required class="form-input">
                  <label for="description" class="form-label">Descripción</label>
                  <textarea name="description" id="description" required class="form-textarea">{{ $category->description }}</textarea>
                  <button type="submit" class="btn">Actualizar</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>

