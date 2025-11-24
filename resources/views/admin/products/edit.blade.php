@extends('admin.layout')

@section('content')
<div class="p-6 max-w-2xl mx-auto">

    <h1 class="text-2xl font-bold mb-6">Edit Product</h1>

    <form action="{{ route('admin.products.update', $product->id) }}" 
          method="POST" enctype="multipart/form-data"
          class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="font-semibold">Title</label>
            <input type="text" name="title"
                   value="{{ $product->title }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div>
            <label class="font-semibold">Description</label>
            <textarea name="description" rows="4"
                class="w-full border rounded px-3 py-2"
                required>{{ $product->description }}</textarea>
        </div>

        <div>
            <label class="font-semibold">Current Image</label><br>
            <img src="{{ asset('storage/' . $product->image) }}"
                 class="w-32 h-32 rounded object-cover mb-3">
        </div>

        <div>
            <label class="font-semibold">Replace Image</label>
            <input type="file" name="image"
                   class="w-full border rounded px-3 py-2">
            <p class="text-sm text-gray-500">Kosongkan jika tidak ingin mengganti gambar.</p>
        </div>

        <button class="bg-cyan-500 text-white px-5 py-2 rounded hover:bg-cyan-600">
            Update Product
        </button>
    </form>

</div>
@endsection
