@extends('admin.layout')

@section('content')
<div class="p-6 max-w-2xl mx-auto">

    <h1 class="text-2xl font-bold mb-6">Add New Product</h1>

    <div class="mb-4">
    <a href="{{ route('admin.products.index') }}"
       class="inline-block px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
        ← Back
    </a>
</div>


    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <div>
            <label class="font-semibold">Title</label>
            <input type="text" name="title"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div>
            <label class="font-semibold">Description</label>
            <textarea name="description" rows="4"
                class="w-full border rounded px-3 py-2"
                required></textarea>
        </div>

        <div>
            <label class="font-semibold">Image</label>
            <input type="file" name="image"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <button class="bg-cyan-500 text-white px-5 py-2 rounded hover:bg-cyan-600">
            Save Product
        </button>
    </form>

</div>
@endsection
