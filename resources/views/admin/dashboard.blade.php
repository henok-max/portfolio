@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Dashboard Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Admin Dashboard</h1>
            <p class="mt-2 text-gray-600">Welcome back, {{ Auth::user()->name }}</p>
        </div>

        <!-- Quick Actions Grid -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <!-- Portfolio Management Card -->
            <div class="p-6 transition-shadow duration-200 bg-white rounded-lg shadow-lg hover:shadow-xl">
                <div class="flex items-center mb-4">
                    <div class="p-3 mr-4 bg-blue-100 rounded-lg">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold">Projects Management</h2>
                </div>
                <p class="mb-4 text-gray-600">Manage your projects, Skills, and work samples.</p>
                <div class="space-y-2">
                    <a href="{{ route('admin.portfolio.index') }}" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                        Manage Projects
                    </a>

                </div>
            </div>




            <!-- Certificates Management Card -->
            <div class="p-6 transition-shadow duration-200 bg-white rounded-lg shadow-lg hover:shadow-xl">
                <div class="flex items-center mb-4">
                    <div class="p-3 mr-4 bg-purple-100 rounded-lg">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold">Certificates Management</h2>
                </div>
                <p class="mb-4 text-gray-600">Manage your professional certifications and credentials.</p>
                <div class="space-y-2">
                    <a href="{{ route('admin.certificates.index') }}" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                        Manage Certificates
                    </a>

                </div>
            </div>
        </div>


    </div>
</div>
@endsection