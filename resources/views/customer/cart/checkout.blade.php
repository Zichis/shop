<x-dashboard-layout>
    <div class="p-5">
        <div class="p-5 bg-white rounded shadow-sm border border-blue-300 lg:w-1/2">
            <h3 class="text-gray-600 mb-5 font-bold">Pay with Paystack</h3>
            <p class="text-sm font-bold text-gray-400">Total Amount</p>
            <p class="text-2xl text-gray-800">&#8358;{{ $total }}</p>

            <form class="mt-5" method="POST" action="{{ route('customer.pay') }}">
                @csrf
                <input type="hidden" name="name" value="{{ Auth::user()->fullName() }}">
                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                <input type="hidden" name="amount" value="{{ $total . '00' }}">
                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                <button class="bg-yellow-500 text-white font-bold px-3 py-1 rounded hover:bg-yellow-600 focus:outline-none" type="submit">Pay</button>
            </form>
        </div>
    </div>
</x-dashboard-layout>
