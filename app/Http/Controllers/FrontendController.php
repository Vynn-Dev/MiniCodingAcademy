<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Product;

class FrontendController extends Controller
{
    public function home()
    {
        $products = Product::latest()->limit(6)->get();
        $services = Service::all();

        return view('home', compact('products', 'services'));
    }
}
