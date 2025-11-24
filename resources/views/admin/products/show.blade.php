<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $product->title }} | MiniCoding Academy</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
</head>

<body class="bg-gray-50">

    <div class="max-w-5xl mx-auto px-4 py-6">
        <a href="/" class="text-cyan-600 font-semibold hover:underline flex items-center gap-1">
            <span>←</span> Kembali ke Beranda
        </a>
    </div>

    <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-2xl overflow-hidden p-6 md:p-10"
         data-aos="fade-up">

        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            {{ $product->title }}
        </h1>

        <div class="w-full flex justify-center mb-8">
            <img 
                src="{{ asset('storage/' . $product->image) }}" 
                class="rounded-xl shadow-lg max-h-[400px] object-cover"
                alt="{{ $product->title }}"
            />
        </div>

        <div class="text-gray-700 leading-relaxed text-lg whitespace-pre-line">
            {{ $product->description }}
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>AOS.init({ duration: 900, once: true });</script>

</body>
</html>
