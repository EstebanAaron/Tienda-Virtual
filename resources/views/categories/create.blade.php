<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Crear Categoria') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                <div class="container">
                  <h1 class="text-2xl font-bold mb-4">Create Category</h1>
                  <form action="{{ route('categories.store') }}" method="POST" class="form">
                    @csrf
                    <div class="form-group mb-4">
                      <label for="name" class="form-label">Category Name</label>
                      <input type="text" class="form-input" id="name" name="name" required>
                    </div>
                    <div class="form-group mb-4">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-textarea" id="description" name="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn">Create Category</button>
                  </form>
                </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>


