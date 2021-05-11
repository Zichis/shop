<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Http\Requests\MakeOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Auth::user()->orders()->where('status', '!=', 'pending')->get();

        return view('customer.order.index', [
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MakeOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MakeOrderRequest $request)
    {
        $product = Product::findOrfail($request->product_id);
        $existingOrder = Order::where(['product_id' => $product->id, 'status' => 'pending'])->first();

        if ($existingOrder) {
            return redirect()->back()->with('error', 'You have this item in your cart.');
        }

        $validated = $request->validated();

        Order::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'product_name' => $product->name,
            'product_price' => $product->price,
            'quantity' => $request->quantity,
            'total' => strval($request->quantity * $product->price)
        ]);

        toast('Order added!','success')->width('20rem')->position('top');

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
