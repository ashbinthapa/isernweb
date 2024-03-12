@foreach($data['posts_latest_news'] as $post)
    <h5 class="card-title">{{ $post->title }}</h5>
    <!-- Other post details -->
@endforeach