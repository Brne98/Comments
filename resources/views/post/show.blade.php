<x-layout>
    <x-post_body :post="$post" />
    @if(isset($comments['root']))
    @foreach($comments['root'] as $comment)
        <article>
            <h4>
                {{ $post->owner->name }}:
            </h4>

            <p>
                {{ $comment->body }}
            </p>

            <x-comment_form :post="$post" :comment="$comment">
                <input name="parent_id" type="hidden" value="{{$comment->id}}">
                <button type="submit">Reply</button>
            </x-comment_form>

            <x-replies :comments="$comments" :comment="$comment"/>

        </article>
        <hr>
    @endforeach
    @endif

    <h3>Comment:</h3>

    <x-comment_form :post="$post">
        <button type="submit">Comment</button>
    </x-comment_form>

</x-layout>
