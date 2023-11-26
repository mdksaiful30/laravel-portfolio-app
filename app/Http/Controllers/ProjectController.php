<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
//    public function index(Request $request)
//    {
//        return view('projects');
//    }

    public function index(Request $request)
    {
        $projects = [
            [
                'title' => 'Project 1',
                'image' => 'https://picsum.photos/seed/project1/500/300',
                'description' => 'Description of Project 1...',
                'tags' => ['Web', 'Laravel', 'Tailwind CSS'],
            ],
            [
                'title' => 'Project 2',
                'image' => 'https://picsum.photos/seed/project2/500/300',
                'description' => 'Description of Project 2...',
                'tags' => ['Web', 'Laravel', 'Tailwind CSS'],
            ],
            [
                'title' => 'Project 3',
                'image' => 'https://picsum.photos/seed/project3/500/300',
                'description' => 'Description of Project 3...',
                'tags' => ['Web', 'Laravel', 'Tailwind CSS'],
            ],
            [
                'title' => 'Project 4',
                'image' => 'https://picsum.photos/seed/project4/500/300',
                'description' => 'Description of Project 4...',
                'tags' => ['Web', 'Laravel', 'Tailwind CSS'],
            ],
            [
                'title' => 'Project 5',
                'image' => 'https://picsum.photos/seed/project5/500/300',
                'description' => 'Description of Project 5...',
                'tags' => ['Web', 'Laravel', 'Tailwind CSS'],
            ],
            [
                'title' => 'Project 6',
                'image' => 'https://picsum.photos/seed/project6/500/300',
                'description' => 'Description of Project 6...',
                'tags' => ['Web', 'Laravel', 'Tailwind CSS'],
            ],
        ];

        return view('projects', compact('projects'));
    }

}
