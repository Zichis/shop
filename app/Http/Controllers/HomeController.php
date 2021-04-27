<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['images'])->get();
        $cartCount = 0;
        if (Auth::check()) {
            $cartCount = Auth::user()->orders()->where('status', 'incomplete')->count();
        }

        return view('index', [
            'products' => $products,
            'cartCount' => $cartCount
        ]);
    }
}
