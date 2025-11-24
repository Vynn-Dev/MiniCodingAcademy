<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $product->title }}</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>

<body class="bg-gray-50">
<div class="max-w-4xl mx-auto py-16 px-6">

<div class="mb-4">
    <a href="{{ route('admin.products.index') }}"
       class="inline-block px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
        ← Back
    </a>
</div>


    <h1 class="text-4xl font-bold text-gray-900 mb-6">
        {{ $product->title }}
    </h1>

    <img src="{{ asset('storage/' . $product->image) }}"
         class="w-full rounded-2xl shadow mb-8">

    <p class="text-lg text-gray-700 leading-relaxed">
        {{ $product->description }}
    </p>

    <a href="{{ route('home') }}"
       class="inline-block mt-10 bg-cyan-500 text-white px-6 py-2 rounded-lg hover:bg-cyan-400 transition">
        ← Kembali
    </a>

</div>
</body>
</html>
