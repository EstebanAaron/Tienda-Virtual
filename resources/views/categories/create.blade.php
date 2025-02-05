<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva Categoría') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="{{ route('categories.store') }}" method="POST" class="form">
                    @csrf
                    <p>
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" required>
                    </p>
                    <p>
                        <label for="description">Descripción</label>
                    </p>
                    <p>
                        <textarea name="description" id="description" required></textarea>
                    </p>
                    <p>
                        <button type="submit" class="btn">Guardar</button>
                    </p>
                </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>



