@extends('layouts.app')

@section('title', 'My Projects')

@section('content')
<div class="container px-4 py-1 mx-auto" style="margin: auto;">
    <h1 class="mb-8 text-3xl font-bold text-gray-800">My Projects</h1>

    @if($portfolioItems->isEmpty())
    <div class="p-4 text-blue-800 rounded-lg bg-blue-50">
        No projects found. Start creating some amazing work!
    </div>
    @else
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach($portfolioItems as $item)
        <div class="overflow-hidden transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-lg">
            @if($item->image)
            <img src="{{ asset('storage/' . $item->image) }}"
                alt="{{ $item->title }}"
                class="object-cover w-full h-48">
            @endif

            <div class="p-6">
                <h2 class="mb-2 text-xl font-semibold text-gray-800">{{ $item->title }}</h2>

                <p class="mb-4 text-gray-600">
                    {{ Str::limit($item->description, 120) }}
                </p>

                @if($item->skills)
                <div class="flex flex-wrap gap-2 mb-4">
                    @foreach(explode(',', $item->skills) as $skill)
                    <span class="px-3 py-1 text-sm text-blue-800 bg-blue-100 rounded-full">
                        {{ trim($skill) }}
                    </span>
                    @endforeach
                </div>
                @endif

                <div class="flex items-center justify-between">
                    @if($item->github_url)
                    <a href="{{ $item->github_url }}"
                        target="_blank"
                        class="flex items-center text-blue-600 hover:text-blue-800">
                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                        GitHub
                    </a>
                    @endif

                    <a href="{{ route('projects.show', $item) }}"
                        class="ml-auto text-gray-600 hover:text-gray-800">
                        View Details →
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection