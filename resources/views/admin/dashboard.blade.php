@extends('admin.layout')

@section('content')
<h1 class="text-3xl font-bold mb-6">Dashboard</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="p-6 bg-white shadow rounded-xl">
        <h3 class="text-gray-600">Total Services</h3>
        <p class="text-3xl font-bold mt-2">{{ $services_count ?? 0 }}</p>
    </div>

    <div class="p-6 bg-white shadow rounded-xl">
        <h3 class="text-gray-600">Total Products</h3>
        <p class="text-3xl font-bold mt-2">{{ $products_count ?? 0 }}</p>
    </div>

    <div class="p-6 bg-white shadow rounded-xl">
        <h3 class="text-gray-600">Admin Logged In</h3>
        <p class="text-xl font-semibold mt-2">{{ session('admin_name') }}</p>
    </div>

</div>
@endsection
