@extends('layouts.app')

@section('title', 'Certificates')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Certificates</h1>
        <a href="{{ route('admin.certificates.create') }}"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            Add New Certificate
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Issuer</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Issue Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($certificates as $certificate)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $certificate->title }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $certificate->issuer }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $certificate->issue_date->format('M d, Y') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('admin.certificates.edit', $certificate->id) }}"
                            class="text-blue-500 hover:text-blue-600 mr-4">Edit</a>
                        <form action="{{ route('admin.certificates.destroy', $certificate->id) }}"
                            method="POST"
                            class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-500 hover:text-red-600"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection