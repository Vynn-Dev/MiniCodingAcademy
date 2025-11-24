@extends('admin.layout')

@section('content')
<div class="p-6 max-w-2xl mx-auto">

    <h1 class="text-2xl font-bold mb-6">Edit Service</h1>

    <form action="{{ route('admin.services.update', $service->id) }}" 
          method="POST"
          class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="font-semibold">Emoji</label>
            <input type="text" name="emoji"
                   value="{{ $service->emoji }}"
                   class="w-full border rounded px-3 py-2 text-2xl"
                   required maxlength="4">
        </div>

        <div>
            <label class="font-semibold">Title</label>
            <input type="text" name="title"
                   value="{{ $service->title }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div>
            <label class="font-semibold">Description</label>
            <textarea name="description" rows="4"
                class="w-full border rounded px-3 py-2"
                required>{{ $service->description }}</textarea>
        </div>

        <button class="bg-cyan-500 text-white px-5 py-2 rounded hover:bg-cyan-600">
            Update Service
        </button>
    </form>

</div>
@endsection
