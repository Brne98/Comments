@props(['post'])

    <a href="/posts">Posts</a> | <a href="https://github.com/Brne98" target="_blank">GitHub</a>

    <h1 style="text-align: center">Post #{{$post->id}}</h1>
    <hr>
    <h1>
        {{ $post->title }}
    </h1>
    <p>
        {{ $post->body }}
    </p>
    <hr>
    <h2 style="text-align: center">
        Comments:
    </h2>
