<x-dashboard-layout>
    <div class="px-10 py-5">
        <div class="p-5 bg-white shadow-lg rounded border border-gray-300">
            <div class="flex justify-between items-center mb-3">
                <h2 class="text-2xl font-bold text-gray-700">Products</h2>
                <a href="{{ route('admin.products.create') }}" class=" bg-gray-800 text-gray-100 px-3 py-1 rounded shadow-md font-semibold hover:bg-gray-700">
                    Add
                </a>
            </div>
            <table class="table-auto w-full text-left whitespace-no-wrap">
                <thead class="p-5 shadow-lg bg-yellow-600 text-white">
                    <tr>
                        <th class="p-2 rounded-tl rounded-bl">Name</th>
                        <th class="p-2">Price</th>
                        <th class="p-2">Quantity</th>
                        <th class="p-2 rounded-tr rounded-br">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="@if($loop->iteration % 2 == 0) bg-gray-100 @endif">
                            <td class="p-2">{{ $product->name }}</td>
                            <td class="p-2">{{ $product->price }}</td>
                            <td class="p-2">{{ $product->quantity }}</td>
                            <td class="p-2">
                                <a class="mx-2 text-gray-600 hover:text-gray-800" href="{{ route('admin.products.edit', ['product' => $product->id]) }}"><i class="fas fa-edit"></i></a>
                                <a class="mx-2 text-red-600 hover:text-red-800" href="#"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-dashboard-layout>
