@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<div class="p-6 bg-white rounded-lg shadow-lg" style="max-width: 70%; margin:auto;">
    <h1 class="mb-4 text-2xl font-bold">Contact Me</h1>
    <form action="/contact" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" class="w-full p-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Message</label>
            <textarea name="message" class="w-full p-2 border rounded" rows="4"></textarea>
        </div>
        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Send</button>
    </form>
</div>
@endsection