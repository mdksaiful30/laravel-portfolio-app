
<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" src="{{ $project['image'] }}" alt="{{ $project['title'] }}">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $project['title'] }}</div>
        <p class="text-gray-700 text-base">{{ $project['description'] }}</p>
    </div>
    <div class="px-6 py-4">
        @if($project['tags'])
        @foreach($project['tags'] as $tag)
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $tag }}</span>
        @endforeach
        @endif
    </div>
</div>
