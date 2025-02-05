<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">Nuevo Producto</h1>
                    <form action="{{ route('products.store') }}" method="POST" class="form">
                        @csrf
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" id="name" required class="form-input">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea name="description" id="description" required class="form-textarea"></textarea>
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" name="price" id="price" step="0.01" required class="form-input">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" name="stock" id="stock" required class="form-input">
                        
                        <label for="category" class="form-label">Categoría</label>
                        <select name="category_id" id="category" required class="form-select">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

