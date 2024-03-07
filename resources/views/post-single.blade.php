@include('layouts.header')

    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
@include('layouts.footer')
