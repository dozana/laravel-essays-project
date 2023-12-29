<x-app-layout>
    <div>
        <h4>{{ $post->title }}</h4>
        <div class="mb-3">Posted {{ $post->date->diffForHumans() }} by {{ $post->author }}</div>
        <div>{{ $post->contents }}</div>
    </div>
</x-app-layout>
