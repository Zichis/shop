<x-dashboard-layout>
    <div class="px-5 py-5 md:px-10">
        <div class="bg-white shadow-sm lg:w-1/2">
            <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                @csrf
                <h3 class="font-bold p-5 text-gray-700">Add Product</h3>
                <hr>
                <div class="p-5">
                    @if (count($errors) > 0)
                        <div class="error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-400">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="material-form-control relative overflow-hidden my-4 h-12">
                        <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="{{ old('name') }}" type="text" name="name" id="name" required>
                        <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="name">
                            <span class="label-name text-gray-500">Name</span>
                        </label>
                    </div>
                    <div class="material-form-control relative overflow-hidden my-4 h-12">
                        <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="{{ old('description') }}" type="text" name="description" id="description" required>
                        <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="description">
                            <span class="label-name text-gray-500">Description</span>
                        </label>
                    </div>
                    <div class="material-form-control relative overflow-hidden my-4 h-12">
                        <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="{{ old('quantity') }}" type="number" name="quantity" id="quantiy" required>
                        <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="quantity">
                            <span class="label-name text-gray-500">Quantity</span>
                        </label>
                    </div>
                    <div class="material-form-control relative overflow-hidden my-4 h-12">
                        <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="{{ old('price') }}" type="text" name="price" id="price" required>
                        <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="price">
                            <span class="label-name text-gray-500">Price</span>
                        </label>
                    </div>
                    <div class="material-form-control relative overflow-hidden my-4 h-12">
                        <select name="category_id" id="category_id">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="file" name="image" id="image">
                    <div class="text-right">
                        <button type="submit" class="px-3 py-1 text-white bg-gradient-to-t from-green-400 to-green-500 hover:shadow-md rounded shadow-sm">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>
