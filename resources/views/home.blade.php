@extends('layouts.app')

@section('title', 'Home - Henok Ayalew')

@section('content')
<div class="px-4 py-12 mx-auto space-y-16 max-w-7xl sm:px-6 lg:px-8">
    <!-- Hero Section -->
    <section class="flex flex-col items-center gap-8 mb-16 md:flex-row md:flex-nowrap md:gap-12">
        <!-- Profile Image Container -->
        <div class="md:flex-shrink-0 md:w-1/3 lg:w-1/4 xl:w-1/5">
            <div class="relative w-64 h-64 transition-all duration-300 transform md:w-72 md:h-72 group hover:scale-105">
                <div class="absolute inset-0 transition-opacity duration-300 rounded-full bg-gradient-to-tr from-blue-200 to-purple-200 blur-lg opacity-30 group-hover:opacity-50"></div>
                <img src="{{ asset('images/profile.png') }}"
                    alt="Henok Ayalew"
                    class="relative object-cover w-full h-full border-4 border-white rounded-full shadow-xl">
            </div>
            <!-- Social Media Links -->
            <div class="flex justify-center gap-4 mt-6">




                <!-- Twitter/X -->
                <a href="https://x.com/henok_ayalew31/" class="p-2 text-gray-600 transition-all duration-300 hover:text-blue-500 hover:scale-110">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" />
                    </svg>
                    <span class="sr-only">Twitter/X</span>
                </a>

                <!-- Instagram -->
                <a href="https://www.instagram.com/henok_ayalew.7/" class="p-2 text-gray-600 transition-all duration-300 hover:text-pink-600 hover:scale-110">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                    </svg>
                    <span class="sr-only">Instagram</span>
                </a>

                <!-- Facebook -->
                <a href="https://facebook.com/henok.ayalew.3956" class="p-2 text-gray-600 transition-all duration-300 hover:text-blue-700 hover:scale-110">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                    <span class="sr-only">Facebook</span>
                </a>
            </div>
        </div>

        <!-- Text Content -->
        <div class="flex flex-col items-center flex-1 text-center md:pl-8 md:items-start md:text-left" style="margin-top: 90px;">
            <h1 class="mb-6 text-4xl font-bold text-transparent md:text-5xl bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text">
                Henok Ayalew
            </h1>

            <div class="max-w-2xl space-y-4 text-lg text-gray-600 md:text-xl">
                <p class="inline-block pr-2 border-r-2 border-gray-400 animate-typing">
                    Hi, I'm Henok – Software Engineering Student & Aspiring Developer
                </p>
                <p class="text-gray-500 md:text-lg">
                    Studying at <span class="font-semibold text-blue-600">Debre Markos University</span>,<br>
                    passionate about creating efficient solutions and learning new technologies.
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap justify-center gap-8 mb-16 md:gap-12" style="margin-top: 90px;">
                <a href="{{ route('projects') }}"
                    class="flex items-center gap-2 px-6 py-3 transition-all duration-300 transform rounded-full shadow-lg bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-gray md:px-8 md:py-4 hover:scale-105 hover:shadow-xl" style="height: 60px;">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    Explore My Projects
                </a>

                <a href="{{ route('contact') }}"
                    class="flex items-center gap-2 px-6 py-3 text-blue-500 transition-all duration-300 transform border-2 border-blue-500 rounded-full hover:bg-blue-50/50 md:px-8 md:py-4 hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <!-- Certifications Section -->
    <section class="py-16" style="margin-bottom: 50px;">
        <div class="container px-4 mx-auto">
            <div class="mb-12 text-center">
                <h2 class="inline-block text-3xl font-bold text-transparent bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text">
                    Recent Accreditations
                </h2>
                <p class="mt-2 text-gray-500">Certifications validating my technical expertise</p>
            </div>

            <!-- Certificate Cards Container -->
            <div class="grid grid-cols-1 gap-8 mx-auto lg:grid-cols-3 max-w-7xl">
                @foreach($recentCertificates->take(3) as $certificate)
                <div class="flex flex-col h-full p-4 transition-all duration-300 transform hover:scale-105">
                    <div class="relative flex flex-col h-full p-6 bg-white shadow-lg rounded-xl hover:shadow-xl">
                        <div class="flex items-start mb-4">
                            <div class="p-3 bg-blue-100 rounded-lg shadow-inner">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div class="flex-1 ml-4">
                                <h3 class="text-xl font-semibold text-gray-800">{{ $certificate->title }}</h3>
                                <div class="mt-2 space-y-2">
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                        {{ $certificate->issuer }}
                                    </div>
                                    <div class="flex items-center text-xs text-gray-500">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        Issued: {{ $certificate->issue_date->format('M Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 mt-auto border-t border-gray-100">
                            <a href="{{ asset('storage/' . $certificate->certificate_url) }}"
                                target="_blank"
                                class="inline-flex items-center font-medium text-blue-600 hover:text-blue-700 group">
                                View Credential
                                <svg class="w-4 h-4 ml-2 transition-transform transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Skills Section -->
    <section class="space-y-12">
        <div class="mb-12 text-center">
            <h2 class="inline-block text-3xl font-bold text-transparent bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text">
                Technical Arsenal
            </h2>
            <p class="mt-2 text-gray-500">Languages, frameworks, and tools I wield with expertise</p>
        </div>

        <div class="flex flex-wrap justify-center gap-4">
            @foreach($skills as $skill)
            <div class="flex items-center gap-2 px-6 py-3 transition-shadow duration-300 bg-white border border-gray-100 rounded-full shadow-sm hover:shadow-md">
                <div class="text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <span class="font-medium text-gray-700">{{ $skill }}</span>
            </div>
            @endforeach
        </div>
    </section>
</div>

<style>
    @keyframes typing {
        from {
            width: 0
        }

        to {
            width: 100%
        }
    }

    .animate-typing {
        overflow: hidden;
        white-space: nowrap;
        animation: typing 3.5s steps(40, end);
    }
</style>
@endsection