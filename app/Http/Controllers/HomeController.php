<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $products = Product::with(['images'])->orderBy('created_at','DESC')->take(5)->get();
        $categories = Category::take(10)->get();
        $cartCount = 0;
        if (Auth::check()) {
            $cartCount = Auth::user()->orders()->where('status', 'pending')->count();
        }

        return view('index', [
            'products' => $products,
            'categories' => $categories,
            'cartCount' => $cartCount
        ]);
    }
}
