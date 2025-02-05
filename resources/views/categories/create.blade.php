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
                  <h1>Create Category</h1>
                  <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">Category Name</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Category</button>
                  </form>
                </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
