<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::with(['images'])->get();
        $searchWord = '';

        if ($request->has('productName')) {
            $searchWord = $request->productName;
            $products = Product::where('name', 'LIKE', "%{$request->productName}%")->get();
        }

        $cartCount = 0;
        if (Auth::check()) {
            $cartCount = Auth::user()->orders()->where('status', 'pending')->count();
        }

        return view('product.index', [
            'products' => $products,
            'cartCount' => $cartCount,
            'searchWord' => $searchWord
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $cartCount = 0;
        if (Auth::check()) {
            $cartCount = Auth::user()->orders()->where('status', 'pending')->count();
        }

        return view('product.show', [
            'product' => $product,
            'cartCount' => $cartCount
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
