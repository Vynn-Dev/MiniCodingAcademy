<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Product;

class AdminController extends Controller
{
    // show login form
    public function showLogin()
    {
        return view('admin.login');
    }

    // handle login (simple: compare env vars or hardcoded)
    public function login(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');

        // contoh sederhana — ubah sesuai kebutuhan
        if ($username === env('ADMIN_USER','admin') && $password === env('ADMIN_PASS','admin123')) {
            session(['is_admin' => true]);
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error','Username atau password salah.');
    }

    public function logout()
    {
        session()->forget('is_admin');
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        if (!session('is_admin')) return redirect()->route('admin.login');
        $serviceCount = Service::count();
        $productCount = Product::count();
        return view('admin.dashboard', compact('serviceCount','productCount'));
    }
}
