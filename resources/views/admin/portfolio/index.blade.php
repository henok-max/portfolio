@extends('layouts.app')

@section('title', 'Manage Portfolio Items')

@section('content')
<div class="container px-4 py-8 mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Portfolio Items</h1>
        <a href="{{ route('admin.portfolio.create') }}"
            class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
            Create New Project
        </a>

    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Title</th>
                    <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Skills</th>
                    <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($portfolioItems as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->title }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->skills }}</td>
                    <td class="flex px-6 py-4 space-x-2 whitespace-nowrap">

                        <a href="{{ route('admin.portfolio.edit', $item) }}"
                            class="text-green-500 hover:text-green-600">
                            Edit
                        </a>
                        <form action="{{ route('admin.portfolio.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-500 hover:text-red-600"
                                onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if($portfolioItems->isEmpty())
    <div class="p-4 text-center text-gray-500 rounded-lg bg-gray-50">
        No portfolio items found.
    </div>
    @endif
</div>
@endsection