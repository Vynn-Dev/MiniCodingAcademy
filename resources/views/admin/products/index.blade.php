@extends('admin.layout')

@section('content')
<h1 class="text-3xl font-bold mb-6">Products</h1>

<a href="{{ route('admin.products.create') }}"
   class="bg-cyan-600 text-white px-4 py-2 rounded mb-6 inline-block">
    + Add New Product
</a>

<table class="w-full bg-white shadow rounded-lg overflow-hidden">
    <thead class="bg-gray-200 text-left">
        <tr>
            <th class="p-3">Title</th>
            <th class="p-3">Media</th>
            <th class="p-3">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr class="border-b">
            <td class="p-3">{{ $product->title }}</td>

            <td class="p-3">
                @if($product->image)
                    <img src="{{ asset('storage/products/'.$product->image) }}" class="w-20 rounded shadow">
                @endif
            </td>

            <td class="p-3 space-x-3">

                <a href="{{ route('admin.products.edit', $product->id) }}"
                   class="bg-cyan-400 text-white px-3 py-1 rounded">Edit</a>

                <form action="{{ route('admin.products.destroy', $product->id) }}"
                      method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-3 py-1 rounded"
                            onclick="return confirm('Delete this product?')">
                        Delete
                    </button>
                </form>
<a href="{{ route('product.show', $product->id) }}" 
   class="bg-blue-500 text-white px-3 py-1 rounded">
   Detail
</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
