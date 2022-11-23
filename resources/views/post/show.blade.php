<style>
    html{
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
</style>

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
@if(isset($comments['root']))
@foreach($comments['root'] as $comment)
    <article>
        <h4>
            {{ $post->owner->name }}:
        </h4>
        <p>
            {{ $comment->body }}
        </p>
        <form method="post" action="/posts/{{ $post->id }}/comments">
            {{csrf_field()}}
            <input name="parent_id" type="hidden" value="{{$comment->id}}">
            <textarea name="body" cols="20" rows="3"></textarea><br>
            <button type="submit">Reply</button>
        </form>

        @if(isset($comments[$comment->id]))
        <div style="margin-left: 30px;border: 1px solid black; padding: 5px;max-width: 350px">
            <h4 style=" margin-bottom: 50px">Replies:</h4>
            @foreach($comments[$comment->id] as $child)
                    <p style="margin-left: 30px">
                        <strong>{{$child->owner->name}}: </strong>
                        {{ $child->body }}
                    </p>
            @endforeach
        </div>
        @endif
    </article>
    <hr>
@endforeach
@endif
<h4>Comment:</h4>
<form method="post" action="/posts/{{ $post->id }}/comments">
    {{csrf_field()}}
    <textarea name="body" cols="50" rows="8"></textarea><br>
    <button type="submit">Comment</button>
</form>
