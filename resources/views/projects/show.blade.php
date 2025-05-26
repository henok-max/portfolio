@extends('layouts.app')

@section('title', $portfolioItem->title)

@section('content')
<div class="container px-4 py-0 mx-auto">
    <!-- Back Button -->


    <!-- Project Header -->
    <div class="p-6 mb-8 bg-white rounded-lg shadow-md">
        <h1 class="mb-4 text-3xl font-bold text-gray-800">{{ $portfolioItem->title }}</h1>

        @if($portfolioItem->github_url)
        <div class="mb-4">
            <a href="{{ $portfolioItem->github_url }}"
                target="_blank"
                class="inline-flex items-center text-blue-600 hover:text-blue-800">
                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                </svg>
                View on GitHub
            </a>
        </div>
        @endif
    </div>
    <div class="mb-6">
        <a href="{{ route('projects') }}" class="flex items-center text-blue-600 hover:text-blue-800">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Projects
        </a>
    </div>
    <!-- Main Content -->
    <div class="grid grid-cols-1 lg:grid-cols-3">
        <!-- Image Section -->
        <div class="lg:col-span-2">
            @if($portfolioItem->image)
            <img src="{{ asset($item->image) }}"
                alt="{{ $portfolioItem->title }}"
                class="w-full h-auto rounded-lg shadow-md">
            @else
            <div class="flex items-center justify-center h-64 text-gray-500 bg-gray-100 rounded-lg">
                No Image Available
            </div>
            @endif
        </div>


    </div>

    <!-- Project Description -->
    <div class="p-6 mt-8 bg-white rounded-lg shadow-md">
        <h2 class="mb-4 text-xl font-semibold text-gray-800">Project Details</h2>
        <div class="prose text-gray-700 max-w-none">
            {!! nl2br(e($portfolioItem->description)) !!}
        </div>

        <!-- Skills -->
        @if($portfolioItem->skills)
        <div class="mb-6">
            <h3 class="mb-2 text-sm font-medium text-gray-600">Technologies Used</h3>
            <div class="flex flex-wrap gap-2">
                @foreach(explode(',', $portfolioItem->skills) as $skill)
                <span class="px-3 py-1 text-sm text-blue-800 bg-blue-100 rounded-full">
                    {{ trim($skill) }}
                </span>
                @endforeach
            </div>
        </div>
        @endif
    </div>

    <!-- Optional: Related Projects -->
    {{-- <div class="mt-12">
        <h2 class="mb-6 text-2xl font-bold text-gray-800">Other Projects</h2>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($relatedProjects as $project)
                <!-- Project Card (Similar to listing page) -->
            @endforeach
        </div>
    </div> --}}
</div>
@endsection