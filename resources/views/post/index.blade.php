@foreach($posts as $post)
    <h1>
        <a href="posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </h1>
    <p>
        {{ $post->body }}
    </p>
    <hr>
@endforeach
