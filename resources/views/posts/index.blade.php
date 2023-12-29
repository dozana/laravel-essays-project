<x-app-layout>
    @if($posts->count())
        <ul class="list-unstyled">
            @foreach($posts as $post)
                <li>
                    <div class="mb-4">
                        <h4 class="mb-3"><a href="/posts/{{ $post->slug }}">{{ $post->slug }}</a></h4>
                        <div>{{ $post->excerpt }}</div>
                        <div class="text-sm">Posted {{ $post->date->diffForHumans() }} by {{ $post->author }}</div>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</x-app-layout>
