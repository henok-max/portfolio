@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
<div class="container p-6 mx-auto">
    <h1 class="mb-4 text-2xl font-bold">Edit Project</h1>

    <form action="{{ route('admin.portfolio.update', $portfolioItem) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Title</label>
            <input type="text" name="title" class="w-full p-2 border rounded" value="{{ old('title', $portfolioItem->title) }}" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="w-full p-2 border rounded" rows="4" required>{{ old('description', $portfolioItem->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Current Image</label>
            @if($portfolioItem->image)
            <img src="{{ asset('storage/' . $portfolioItem->image) }}" class="object-cover w-32 h-32 mb-2">
            @else
            <p class="text-gray-500">No image uploaded</p>
            @endif
            <input type="file" name="image" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">GitHub URL</label>
            <input type="url" name="github_url" class="w-full p-2 border rounded" value="{{ old('github_url', $portfolioItem->github_url) }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Skills Used (comma separated)</label>
            <input type="text" name="skills" class="w-full p-2 border rounded" value="{{ old('skills', $portfolioItem->skills) }}">
        </div>

        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Update Project</button>
    </form>
</div>
@endsection