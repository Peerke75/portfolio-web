@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Neem contact met ons op</h2>
    <form action="/contact" method="POST" id="contact-form">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Naam</label>
            <input type="text" id="name" name="name" required class="w-full mt-2 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" name="email" required class="w-full mt-2 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="subject" class="block text-gray-700">Onderwerp</label>
            <input type="text" id="subject" name="subject" required class="w-full mt-2 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mb-6">
            <label for="message" class="block text-gray-700">Bericht</label>
            <textarea id="message" name="message" rows="5" required class="w-full mt-2 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white p-2 rounded-md hover:bg-indigo-700">Verstuur bericht</button>
    </form>
</div>

@endsection