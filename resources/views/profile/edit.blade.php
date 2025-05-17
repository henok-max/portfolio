@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
        <!-- Flex Container for Profile Info and Password -->
        <div class="flex flex-col gap-6 md:flex-row">
            <!-- Profile Information (Left Side) -->
            <div class="w-full md:w-1/2">
                <div class="h-full p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <!-- Password Update (Right Side) -->
            <div class="w-full md:w-1/2">
                <div class="h-full p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
        </div>

        <!-- Account Deletion (Full Width Below) -->
        <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection