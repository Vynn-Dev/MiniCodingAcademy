@extends('admin.layout')

@section('content')
<h1 class="text-3xl font-bold mb-6">Services</h1>

<a href="{{ route('admin.services.create') }}"
   class="bg-cyan-600 text-white px-4 py-2 rounded mb-6 inline-block">
    + Add New Service
</a>

<table class="w-full bg-white shadow rounded-lg overflow-hidden">
    <thead class="bg-gray-200 text-left">
        <tr>
            <th class="p-3">Emoji</th>
            <th class="p-3">Title</th>
            <th class="p-3">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($services as $service)
        <tr class="border-b">
            <td class="p-3 text-3xl">{{ $service->emoji }}</td>
            <td class="p-3">{{ $service->title }}</td>
            <td class="p-3 space-x-3">
                
                <a href="{{ route('admin.services.edit', $service->id) }}"
                   class="text-blue-500">Edit</a>

                <form action="{{ route('admin.services.destroy', $service->id) }}"
                      method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"
                            onclick="return confirm('Delete this service?')">
                        Delete
                    </button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
