@props(['comments', 'comment'])
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
