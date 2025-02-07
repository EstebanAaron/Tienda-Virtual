<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Carrito') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                  <table class="table-auto w-full">
                    <thead>
                      <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                      $Total = 0;
                      @endphp
                      @foreach ($items as $item)
                      @php
                      
                      $Total += $item['price'] * $item['amount'];
                      @endphp
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['amount'] }}</td>
                            <td>{{ $item['price'] }}</td>
                            <td>{{ $item['price'] * $item['amount'] }}</td>
                            <td>
                            <form action="{{ route('cart.decrement', $item['id']) }}" method="POST">
                              @csrf
                              <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                      <tr>
                        <td colspan="3">Total</td>
                        <td>{{ $Total }}</td>
                      </tr>
                    </tbody>
                  </table>
                  @auth
                  <form action="{{ route('orders.store') }}" method="POST" class="inline-block">
                    @csrf
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Realizar Pedido</button>
                  </form>
                  @else
                  <a href="{{ route('login') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Inicia sesión para realizar el pedido</a>

                  @endauth


              </div>
          </div>
      </div>
  </div>
</x-app-layout>