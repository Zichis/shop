<x-dashboard-layout>
    <div class="p-5">
        <div class="flex flex-wrap">
            <div class="p-5 w-full md:w-1/2 lg:w-1/3">
                <div class="bg-white border-l-4 border-red-400 p-10 relative shadow-sm">
                    <i class="fas fa-cubes fa-3x absolute text-gray-100 right-5"></i>
                    <p class="text-gray-500">Products</p>
                    <h3 class="text-gray-700 text-xl font-bold">{{ count($products) }}</h3>
                </div>
            </div>
            <div class="p-5 w-full md:w-1/2 lg:w-1/3">
                <div class="bg-white border-l-4 border-yellow-400 p-10 relative shadow-sm">
                    <i class="fas fa-shopping-bag fa-3x absolute text-gray-100 right-5"></i>
                    <p class="text-gray-500">Orders</p>
                    <h3 class="text-gray-700 text-xl font-bold">{{ count($orders) }}</h3>
                </div>
            </div>
            <div class="p-5 w-full md:w-1/2 lg:w-1/3">
                <div class="bg-white border-l-4 border-blue-400 p-10 relative shadow-sm">
                    <i class="fas fa-users fa-3x absolute text-gray-100 right-5"></i>
                    <p class="text-gray-500">Customers</p>
                    <h3 class="text-gray-700 text-xl font-bold">{{ count($customers) }}</h3>
                </div>
            </div>
            <!--<div class="p-5 w-full md:w-1/2 lg:w-1/4">
                <div class="bg-white border-l-4 border-gray-400 p-10 relative shadow-sm">
                    <i class="fas fa-bell fa-3x absolute text-gray-100 right-5"></i>
                    <p class="text-gray-500">Notifications</p>
                    <h3 class="text-gray-700 text-xl font-bold">1</h3>
                </div>
            </div>-->
        </div>
        <!--<ul>
            <li>Work on products model</li>
            <li>Work on user model/roles</li>
            <li>Orders</li>
            <li>Customer display</li>
        </ul>-->
    </div>
</x-dashboard-layout>
