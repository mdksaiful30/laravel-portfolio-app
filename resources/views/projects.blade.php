


@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div>
        <h1 class="text-3xl font-semibold mb-4">My Projects</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($projects as $project)
                @include('components.project-card', ['project' => $project])
            @endforeach
        </div>
    </div>

@endsection
