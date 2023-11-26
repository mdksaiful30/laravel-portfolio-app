

@extends('layouts.app')

@section('title', 'Home')


@section('content')
    <div class="container mx-auto p-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-3xl font-semibold mb-4">Welcome to My Portfolio</h1>
            <p>Hi, I'm [Your Name], a passionate [Your Profession]. Here, you can explore my projects, learn more about me, and get in touch.</p>

            <!-- Projects Section -->
            <section class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">My Projects</h2>
                <!-- Add your project cards or sections here -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Example Project Card -->
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://picsum.photos/seed/project2/500/300" alt="Project 1">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Project 1</div>
                            <p class="text-gray-700 text-base">Description of Project 1...</p>
                        </div>
                    </div><!-- Example Project Card -->
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://picsum.photos/seed/project2/500/300" alt="Project 1">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Project 1</div>
                            <p class="text-gray-700 text-base">Description of Project 1...</p>
                        </div>
                    </div><!-- Example Project Card -->
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://picsum.photos/seed/project2/500/300" alt="Project 1">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Project 1</div>
                            <p class="text-gray-700 text-base">Description of Project 1...</p>
                        </div>
                    </div><!-- Example Project Card -->
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://picsum.photos/seed/project2/500/300" alt="Project 1">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Project 1</div>
                            <p class="text-gray-700 text-base">Description of Project 1...</p>
                        </div>
                    </div><!-- Example Project Card -->
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://picsum.photos/seed/project2/500/300" alt="Project 1">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Project 1</div>
                            <p class="text-gray-700 text-base">Description of Project 1...</p>
                        </div>
                    </div>



                    <!-- Add more project cards as needed -->
                </div>
            </section>

            <!-- Contact Section -->
            <section class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">Contact Me</h2>
                <p>Feel free to reach out to me. I'm open to collaborations, discussions, and more.</p>
                <!-- Add your contact form or contact details here -->
                <div class="mt-4">
                    <p>Email: example@example.com</p>
                    <p>LinkedIn: linkedin.com/in/example</p>
                    <!-- Add more contact details as needed -->
                </div>
            </section>
        </div>
    </div>
@endsection
