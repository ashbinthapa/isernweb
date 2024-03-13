@foreach($data['posts_latest_news'] as $happy)
    <h5 class="card-title">{{ $happy->title }}</h5>
    <!-- Other post details -->
@endforeach
@if ($data['page_about_us'])
    <h5 class="card-title">{{ $data['page_about_us']->title }}</h5>
    <p>{{ $data['page_about_us']->content }}</p>
@else
    <p>No page found with the slug 'about-us'.</p>
@endif