
@extends('layouts.app')

@section('title', 'About')


@section('content')
    <div class="container mx-auto p-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-3xl font-semibold mb-4">About Me</h1>

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Introduction</h2>
                <p>
                    Hi, I'm [Your Name], a passionate [Your Profession].
                    Describe yourself and your passion here.
                </p>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Education</h2>
                <p>
                    [Your Degree], [University], [Year of Graduation]
                </p>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Work Experience</h2>
                <p>
                    [Your Job Title], [Company Name], [Start Date] - [End Date]
                    <br>
                    [Description of your role and responsibilities.]
                </p>

                <p>
                    [Your Job Title], [Company Name], [Start Date] - [End Date]
                    <br>
                    [Description of your role and responsibilities.]
                </p>


            </div>

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Certifications</h2>
                <ul>
                    <li>[Certification Name], [Issuing Organization], [Year]</li>

                    <!-- Add more certifications as needed -->
                </ul>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Skills</h2>
                <ul>
                    <li>[Skill Name]</li>
                    <!-- Add more skills as needed -->
                </ul>
            </div>



            <!-- Add more sections as needed (Skills, Hobbies, etc.) -->

        </div>
    </div>
@endsection



