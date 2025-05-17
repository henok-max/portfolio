@extends('layouts.app')

@section('title', 'Add New Project')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Add New Project</h1>

    <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700">Title</label>
            <input type="text" name="title" class="w-full p-2 border rounded" value="{{ old('title') }}" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="w-full p-2 border rounded" rows="4" required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Project Image</label>
            <input type="file" name="image" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">GitHub URL</label>
            <input type="url" name="github_url" class="w-full p-2 border rounded" value="{{ old('github_url') }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Skills Used (comma separated)</label>
            <input type="text" name="skills" class="w-full p-2 border rounded" value="{{ old('skills') }}">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Project</button>
    </form>
</div>
@endsection