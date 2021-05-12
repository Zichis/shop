<x-dashboard-layout>
    <div class="p-5">
        <div class="bg-white shadow-sm lg:w-1/2">
            <form method="POST" action="{{ route('admin.information.update', ['information' => $information]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3 class="font-bold p-5 text-gray-700">Information</h3>
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
                    <div class="my-4">
                        <label class="text-gray-500 text-sm font-bold" for="shop_banner">Shop Banner</label>
                        <textarea class="w-full resize-none border-2 border-gray-400 focus:border-yellow-500 focus:ring-0" rows="5" name="shop_banner">{{ $information->shop_banner }}</textarea>
                    </div>
                    <div class="my-4">
                        <label class="text-gray-500 text-sm font-bold" for="fitness_banner">Fitness Banner</label>
                        <textarea class="w-full resize-none border-2 border-gray-400 focus:border-yellow-500 focus:ring-0" rows="5" name="fitness_banner">{{ $information->fitness_banner }}</textarea>
                    </div>
                    <button type="submit" class="px-3 py-1 text-white bg-gradient-to-t from-green-400 to-green-500 hover:shadow-md rounded shadow-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>
