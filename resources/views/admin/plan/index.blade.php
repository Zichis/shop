<x-dashboard-layout>
    <div class="p-5">
        <div class="p-5 bg-white shadow-lg rounded border border-gray-300">
            <div class="flex justify-between items-center mb-3">
                <h2 class="text-2xl font-bold text-gray-700">Fitness Plans</h2>
                {{--<a href="{{ route('admin.plans.create') }}" class=" bg-gray-800 text-gray-100 px-3 py-1 rounded shadow-md font-semibold hover:bg-gray-700">
                    Add
                </a>--}}
            </div>
            <div class="overflow-x-scroll">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead class="p-5 shadow-lg bg-yellow-600 text-white">
                        <tr>
                            <th class="p-2 rounded-tl rounded-bl">Name</th>
                            <th class="p-2 hidden lg:table-cell">Single</th>
                            <th class="p-2 hidden lg:table-cell">Couple</th>
                            <th class="p-2 hidden lg:table-cell">Family</th>
                            <th class="p-2 rounded-tr rounded-br">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plans as $plan)
                            <tr class="{{ $loop->even ?'bg-gray-100':'' }}">
                                <td class="p-2">{{ $plan->name }}</td>
                                <td class="p-2 hidden lg:table-cell">&#8358;{{ $plan->single_price }}</td>
                                <td class="p-2 hidden lg:table-cell">&#8358;{{ $plan->couple_price }}</td>
                                <td class="p-2 hidden lg:table-cell">&#8358;{{ $plan->family_price }}</td>
                                <td class="p-2">
                                    <a class="mx-2 text-gray-600 hover:text-gray-800" href="{{ route('admin.plans.edit', ['plan' => $plan->id]) }}"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-dashboard-layout>
