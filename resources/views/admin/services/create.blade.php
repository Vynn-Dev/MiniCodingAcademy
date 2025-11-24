@extends('admin.layout')

@section('content')
<div class="p-6 max-w-2xl mx-auto">

    <h1 class="text-2xl font-bold mb-6">Add New Service</h1>

    <form action="{{ route('admin.services.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="font-semibold">Emoji (contoh: 🚀)</label>
            <input type="text" name="emoji"
                   class="w-full border rounded px-3 py-2 text-2xl"
                   required maxlength="4">
        </div>

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

        <button class="bg-cyan-500 text-white px-5 py-2 rounded hover:bg-cyan-600">
            Save Service
        </button>
    </form>

</div>
@endsection
