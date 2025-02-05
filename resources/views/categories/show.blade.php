

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Categoria') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                <h1>{{ $category->name }}</h1>
                <p>{{ $category->description }}</p>
                <p>Productos: 
                <ul>
                  @foreach($category->products as $product)
                    <li><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a> - {{ $product->price }}€</li>
                  @endforeach
                </ul>
                </p>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>

