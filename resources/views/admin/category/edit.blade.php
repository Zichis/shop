<x-dashboard-layout>
    <div class="px-5 py-5 md:px-10">
        <div class="bg-white shadow-sm lg:w-1/2">
            <form method="POST" action="{{ route('admin.categories.update', ['category' => $category->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3 class="font-bold p-5 text-gray-700">Update Category</h3>
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
                        <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('name')){{ old('name') }}@else{{ $category->name }}@endif" type="text" name="name" id="name" required>
                        <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="name">
                            <span class="label-name text-gray-500">Name</span>
                        </label>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="px-3 py-1 text-white bg-gradient-to-t from-green-400 to-green-500 hover:shadow-md rounded shadow-sm">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>
