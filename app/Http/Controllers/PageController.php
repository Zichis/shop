<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function fitness()
    {
        return view('fitness', [
            'cartCount' => 0
        ]);
    }
}
