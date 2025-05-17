@extends('layouts.app')

@section('title', 'Add New Certificate')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Add New Certificate</h1>

    <form action="{{ route('admin.certificates.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Title</label>
            <input type="text" name="title" class="w-full p-2 border rounded @error('title') border-red-500 @enderror"
                value="{{ old('title') }}" required>
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Issuer (e.g., AWS)</label>
            <input type="text" name="issuer" class="w-full p-2 border rounded @error('issuer') border-red-500 @enderror"
                value="{{ old('issuer') }}" required>
            @error('issuer') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Issue Date</label>
            <input type="date" name="issue_date" class="w-full p-2 border rounded @error('issue_date') border-red-500 @enderror"
                value="{{ old('issue_date') }}" required>
            @error('issue_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Certificate File (PDF/Image)</label>
            <input type="file" name="certificate_file"
                class="w-full p-2 border rounded @error('certificate_file') border-red-500 @enderror"
                accept=".pdf,.jpg,.png" required>
            @error('certificate_file') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            Save Certificate
        </button>
    </form>
</div>
@endsection