<div>
    <div class="max-w-4xl mx-auto py-20 prose lg:prose-xl">
        <h2>Comments:</h2>
        @foreach(\App\Models\Comment::where('post_id', $post->id)->get() as $comment)
            <h4>{{$comment->updated_at}}</h4>
            <p>{{$comment->content}}</p>
            <hr>
        @endforeach
    </div>
</div>
