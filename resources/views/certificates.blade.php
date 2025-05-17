@extends('layouts.app')

@section('title', 'Certificates')

@section('content')
<div class="px-4 py-1 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <h1 class="mb-8 text-3xl font-bold text-gray-900">My Certificates</h1>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        @foreach($certificates as $certificate)
        <div class="p-6 transition-shadow bg-white rounded-lg shadow-md hover:shadow-lg">
            <h3 class="mb-2 text-xl font-semibold">{{ $certificate->title }}</h3>
            <p class="mb-2 text-gray-600">{{ $certificate->issuer }}</p>
            <p class="mb-4 text-sm text-gray-500">
                Issued: {{ $certificate->issue_date->format('M Y') }}
            </p>
            <a href="{{ asset('storage/' . $certificate->certificate_url) }}"
                target="_blank"
                class="font-medium text-blue-500 hover:text-blue-600">
                View Certificate →
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection