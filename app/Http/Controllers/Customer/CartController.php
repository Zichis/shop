<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->orders()->where('status', 'incomplete')->get();
        $sum = Auth::user()->orders()->where('status', 'incomplete')->sum('total');

        return view('customer.cart.index', [
            'orders' => $orders,
            'total' => $sum
        ]);
    }

    public function checkout()
    {
        $orders = Auth::user()->orders()->where('status', 'incomplete')->count();
        $sum = Auth::user()->orders()->where('status', 'incomplete')->sum('total');

        return view('customer.cart.checkout', [
            'total' => $sum,
            'orders' => $orders
        ]);
    }
}
