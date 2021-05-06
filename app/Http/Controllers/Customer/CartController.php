<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->orders()->where('status', 'pending')->get();
        $sum = Auth::user()->orders()->where('status', 'pending')->sum('total');

        return view('customer.cart.index', [
            'orders' => $orders,
            'total' => $sum
        ]);
    }

    public function checkout()
    {
        $orders = Auth::user()->orders()->where('status', 'pending')->count();
        $sum = Auth::user()->orders()->where('status', 'pending')->sum('total');

        return view('customer.cart.checkout', [
            'total' => $sum,
            'orders' => $orders
        ]);
    }

    public function confirm()
    {
        $orders = Auth::user()->orders()->where('status', 'pending')->get();

        foreach ($orders as $order) {
            $order->update([
                'status' => 'processing'
            ]);
        }

        return redirect()->route('customer.cart.index')->with('success','Order sent successfully!');
    }
}
