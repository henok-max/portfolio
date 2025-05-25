@extends('layouts.app')

@section('title', 'About - Henok Ayalew')

@section('content')
<section class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-transparent bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text">
                Behind the Code
            </h2>
            <p class="mt-2 text-gray-500 dark:text-gray-400">My journey in software engineering</p>
        </div>

        <div class="grid gap-8 mt-12 md:grid-cols-2">
            <!-- Text Content -->
            <div class="space-y-6 text-gray-800 dark:text-gray-600"> <!-- Changed from text-gray-600 -->
                <p class="text-lg">
                    Born and raised in Ethiopia, I discovered my passion for programming during my first year at
                    <span class="font-semibold text-blue-600">Debre Markos University</span>, where I'm currently pursuing
                    my degree in Software Engineering.
                </p>
                <p class="text-lg">
                    I specialize in full-stack development with Laravel, focusing on creating efficient solutions for
                    real-world problems. When I'm not coding, you'll find me contributing to open-source projects or
                    exploring new technologies.
                </p>
                <div class="flex items-center gap-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-800 dark:text-gray-800">Currently learning: DevOps practices</span> <!-- Darkened this text too -->
                </div>
            </div>
            <!-- Skills Visualization -->
            <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">My Technical Focus</h3>
                <div class="mt-4 space-y-3">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                        <span class="text-gray-600 dark:text-gray-300">Backend Development (Laravel/PHP)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 bg-purple-600 rounded-full"></div>
                        <span class="text-gray-600 dark:text-gray-300">Frontend (Tailwind CSS/Alpine.js)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 bg-green-600 rounded-full"></div>
                        <span class="text-gray-600 dark:text-gray-300">Database Design (MySQL/SQLite)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection