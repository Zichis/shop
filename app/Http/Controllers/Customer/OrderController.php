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
        $existingOrder = Order::where([
            'product_id' => $product->id,
            'status' => 'pending',
            'user_id' => Auth::user()->id
        ])->first();

        if ($existingOrder) {
            toast('You have this item in your cart!','error')->width('20rem')->position('top');
            return redirect()->back();
        }

        if ($product->quantity == 0) {
            toast('Item out of stock!','error')->width('20rem')->position('top');
            return redirect()->back();
        }

        if ($request->quantity > $product->quantity) {
            toast('Items in stock less than quantity','error')->width('20rem')->position('top');
            return redirect()->back();
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

        //toast('Order added!','success')->width('20rem')->position('top');
        $cartRoute = "customers.cart.index";
        alert()->html(
            "<h2 class='font-bold text-xl'>Item Added</h2>",
            '<a href="" class="bg-yellow-500 text-white py-2 px-3 rounded">Continue Shopping</a>&nbsp;<a href="/customer/cart" class="bg-green-500 text-white py-2 px-3 rounded">Proceed to Cart</a>',
            'success'
        )->autoClose(30000)->persistent(false, false);

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
        $product = Product::findOrFail($order->product_id);

        return view('customer.order.edit', [
            'order' => $order,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MakeOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(MakeOrderRequest $request, Order $order)
    {
        $product = Product::findOrfail($request->product_id);

        if ($product->quantity == 0) {
            toast('Item out of stock!','error')->width('20rem')->position('top');
            return redirect()->back();
        }

        if ($request->quantity > $product->quantity) {
            toast('Items in stock less than quantity','error')->width('20rem')->position('top');
            return redirect()->back();
        }

        $validated = $request->validated();

        $order->update([
            'quantity' => $request->quantity,
            'total' => strval($request->quantity * $product->price)
        ]);

        toast('Order Updated!','success')->width('20rem')->position('top');

        return redirect()->route('customer.cart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        toast('Order deleted successfully!','success')->width('20rem')->position('top');

        return redirect()->route('customer.orders.index');
    }

    public function confirm(Request $request, Order $order)
    {
        $product = Product::findOrfail($order->product_id);

        if ($product->quantity == 0) {
            toast('Item out of stock!','error')->width('20rem')->position('top');
            return redirect()->back();
        }

        if ($order->quantity > $product->quantity) {
            toast('Items in stock less than quantity','error')->width('20rem')->position('top');
            return redirect()->back();
        }

        $order->update([
            'status' => 'processing'
        ]);

        $product->update([
            'quantity' => intval($product->quantity - $order->quantity)
        ]);

        toast('Order sent successfully!','success')->width('20rem')->position('top');

        return redirect()->route('customer.orders.index');
    }
}
