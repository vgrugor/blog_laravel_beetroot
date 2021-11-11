<div>
    <div class="max-w-4xl mx-auto py-20 prose lg:prose-xl">
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
    </div>
</div>

<livewire:create-comment :post="$post"/>

<livewire:show-comments :post="$post" />
