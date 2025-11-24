<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
{
    $services = Service::all(); 
    $products = Product::all();
    
    return view('home', compact('services', 'products'));
}
}