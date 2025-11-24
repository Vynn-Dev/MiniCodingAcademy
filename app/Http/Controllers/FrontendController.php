<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Product;

class FrontendController extends Controller
{
    public function home()
    {
        $services = Service::all();
        $products = Product::latest()->limit(6)->get();

        return view('home', compact('services', 'products'));
    }
}
