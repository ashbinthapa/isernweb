@include('layouts.header')
    <h1>Posts</h1>

    @foreach($posts as $post)
        <div>
            <a href={{ route('posts.show', ['slug' => $post->slug]) }}><h2>{{ $post->title }}</h2> </a>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach

@include('layouts.footer')