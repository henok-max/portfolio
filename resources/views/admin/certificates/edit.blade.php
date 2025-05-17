@extends('layouts.app')

@section('title', 'Edit Certificate')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Edit Certificate</h1>

    <form action="{{ route('admin.certificates.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Title</label>
            <input type="text" name="title"
                class="w-full p-2 border rounded @error('title') border-red-500 @enderror"
                value="{{ old('title', $certificate->title) }}" required>
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Issuer</label>
            <input type="text" name="issuer"
                class="w-full p-2 border rounded @error('issuer') border-red-500 @enderror"
                value="{{ old('issuer', $certificate->issuer) }}" required>
            @error('issuer') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Issue Date</label>
            <input type="date" name="issue_date"
                class="w-full p-2 border rounded @error('issue_date') border-red-500 @enderror"
                value="{{ old('issue_date', $certificate->issue_date->format('Y-m-d')) }}" required>
            @error('issue_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Current Certificate</label>
            <a href="{{ asset('storage/' . $certificate->certificate_url) }}"
                target="_blank"
                class="text-blue-500 hover:underline">
                View Current Certificate
            </a>
            <input type="file" name="certificate_file"
                class="w-full p-2 border rounded mt-2 @error('certificate_file') border-red-500 @enderror"
                accept=".pdf,.jpg,.png">
            @error('certificate_file') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            Update Certificate
        </button>
    </form>
</div>
@endsection