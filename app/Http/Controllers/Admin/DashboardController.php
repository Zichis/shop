<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index()
    {
        // TODO: Where quantity is more than 0
        $products = Product::all();
        $customers = Role::findByName('ROLE_CUSTOMER')->users;
        $orders = Order::where('status', 'complete')->get();

        return view('admin.dashboard.index', [
            'products' => $products,
            'customers' => $customers,
            'orders' => $orders
        ]);
    }
}
