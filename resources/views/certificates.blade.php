@extends('layouts.app')

@section('title', 'Certifications - Henok Ayalew')

@section('content')
<div class="px-4 py-0 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <!-- Header Section -->
    <div class="mb-12 text-center">
        <h1 class="text-4xl font-bold text-transparent bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text">
            Professional Accreditations
        </h1>
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
            Validating my technical expertise and continuous learning
        </p>
    </div>

    <!-- Certificates Grid -->
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach($certificates as $certificate)
        <div class="relative overflow-hidden transition-all duration-300 bg-white rounded-xl group hover:shadow-xl hover:-translate-y-2">
            <!-- Decorative Gradient Bar -->
            <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 to-purple-600"></div>

            <div class="p-6">
                <!-- Certificate Header -->
                <div class="flex items-start mb-4">
                    <div class="flex-shrink-0 p-3 bg-blue-100 rounded-lg">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">{{ $certificate->title }}</h3>
                        <p class="mt-1 text-sm font-medium text-purple-600">{{ $certificate->issuer }}</p>
                    </div>
                </div>

                <!-- Certificate Details -->
                <div class="mt-4 space-y-2">
                    <div class="flex items-center text-sm text-gray-600">
                        <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>Issued: {{ $certificate->issue_date->format('M Y') }}</span>
                    </div>
                </div>

                <!-- View Button -->
                <div class="mt-6">
                    <a href="{{ asset('storage/' . $certificate->certificate_url) }}"
                        target="_blank"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-200 border border-transparent rounded-md text-blue-50 bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        View Credential
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Empty State -->
    @if($certificates->isEmpty())
    <div class="py-12 text-center">
        <div class="max-w-md mx-auto">
            <svg class="w-24 h-24 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            <h3 class="mt-4 text-xl font-medium text-gray-900">No certifications yet</h3>
            <p class="mt-2 text-gray-600">Currently working on new accreditations</p>
        </div>
    </div>
    @endif
</div>
@endsection