<x-dashboard-layout>
    <div class="px-5 py-5 md:px-10">
        <div class="bg-white shadow-sm lg:w-3/4">
            <form method="POST" action="{{ route('admin.plans.update', ['plan' => $plan->id]) }}">
                @csrf
                @method('PUT')
                <h3 class="font-bold p-5 text-gray-700">Update Plan</h3>
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
                    <div class="lg:flex lg:gap-5">
                        <div class="material-form-control lg:w-1/2 relative overflow-hidden my-4 h-12">
                            <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('name')){{ old('name') }}@else{{ $plan->name }}@endif" type="text" name="name" id="name" required>
                            <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="name">
                                <span class="label-name text-gray-500">Name</span>
                            </label>
                        </div>
                        <div class="material-form-control lg:w-1/2 relative overflow-hidden my-4 h-12">
                            <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('sub_name')){{ old('sub_name') }}@else{{ $plan->sub_name }}@endif" type="text" name="sub_name" id="sub_name" required>
                            <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="sub_name">
                                <span class="label-name text-gray-500">Sub Name</span>
                            </label>
                        </div>
                    </div>
                    <div class="lg:flex lg:gap-5">
                        <div class="material-form-control lg:w-1/4 relative overflow-hidden my-4 h-12">
                            <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('single_price')){{ old('single_price') }}@else{{ $plan->single_price }}@endif" type="text" name="single_price" id="single_price" required>
                            <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="single_price">
                                <span class="label-name text-gray-500">Single Price</span>
                            </label>
                        </div>
                        <div class="material-form-control lg:w-1/4 relative overflow-hidden my-4 h-12">
                            <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('single_discount')){{ old('single_discount') }}@else{{ $plan->single_discount }}@endif" type="text" name="single_discount" id="single_discount" required>
                            <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="single_discount">
                                <span class="label-name text-gray-500">Single Discount (%)</span>
                            </label>
                        </div>
                    </div>
                    <div class="lg:flex lg:gap-5">
                        <div class="material-form-control lg:w-1/4 relative overflow-hidden my-4 h-12">
                            <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('couple_price')){{ old('couple_price') }}@else{{ $plan->couple_price }}@endif" type="text" name="couple_price" id="couple_price" required>
                            <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="couple_price">
                                <span class="label-name text-gray-500">Couple Price</span>
                            </label>
                        </div>
                        <div class="material-form-control lg:w-1/4 relative overflow-hidden my-4 h-12">
                            <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('couple_discount')){{ old('couple_discount') }}@else{{ $plan->couple_discount }}@endif" type="text" name="couple_discount" id="couple_discount" required>
                            <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="couple_discount">
                                <span class="label-name text-gray-500">Couple Discount (%)</span>
                            </label>
                        </div>
                    </div>
                    <div class="lg:flex lg:gap-5">
                        <div class="material-form-control lg:w-1/4 relative overflow-hidden my-4 h-12">
                            <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('family_price')){{ old('family_price') }}@else{{ $plan->family_price }}@endif" type="text" name="family_price" id="family_price" required>
                            <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="family_price">
                                <span class="label-name text-gray-500">Family Price</span>
                            </label>
                        </div>
                        <div class="material-form-control lg:w-1/4 relative overflow-hidden my-4 h-12">
                            <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('family_discount')){{ old('family_discount') }}@else{{ $plan->family_discount }}@endif" type="text" name="family_discount" id="family_discount" required>
                            <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="family_discount">
                                <span class="label-name text-gray-500">Family Discount (%)</span>
                            </label>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="px-3 py-1 text-white bg-gradient-to-t from-green-400 to-green-500 hover:shadow-md rounded shadow-sm">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>
