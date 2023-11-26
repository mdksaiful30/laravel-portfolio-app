


@extends('layouts.app')

@section('title', 'Contact')


@section('content')
    <div class="container mx-auto p-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-3xl font-semibold mb-4">Contact Me</h1>

            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full border-2 border-gray-300 p-2 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full border-2 border-gray-300 p-2 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full border-2 border-gray-300 p-2 rounded-md" required></textarea>
                </div>

                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Submit</button>
            </form>
        </div>
    </div>
@endsection

