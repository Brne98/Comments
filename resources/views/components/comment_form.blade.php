<form method="post" action="/posts/{{ $post->id }}/comments">
    {{csrf_field()}}
    <textarea name="body" cols="30" rows="5"></textarea><br>
    {{ $slot }}
</form>
