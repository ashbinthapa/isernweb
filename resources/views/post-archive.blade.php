@include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fw-bold fs-4" style="color: #01274c;" href="/posts">Posts</a>
                </li>
                <!-- Add more navigation items as needed -->
            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid py-4">
    <div class="container text-center" style="margin-top: 20px; margin-bottom: 20px;">
        <p class="fw-bold fs-1" style="color: #01274c;">Latest News and
            Announcements</p>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($posts as $post)
                <div class="col p-2">
                    <div class="card h-100">
                        @if ($post->getFirstMediaUrl())
                            <img src="{{ $posts->getFirstMediaUrl() }}" class="card-img-top .img-fluid img-thumbnail"
                                alt="ISER-N">
                        @endif
                        <div class="card-body">
                            <p class="fs-6">{{ date('F j, Y', strtotime($post->updated_at)) }}
                            </p>
                            <span class="position-relative badge rounded-0 font-weight-bold"
                                style="background-color: #05264b;">{{ $post->category->name }}</span>

                            <a href="{{ route('posts.show', ['slug' => $post->slug]) }}"
                                style="text-decoration: none; color: inherit;">
                                <p class="card-title fw-bold fs-5">{{ $post->title }}</p>
                            </a>
                            <p class="card-text">{{ Str::limit(strip_tags($post->content), 250) }}</p>
                            <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" class="btn"><button
                                    class="custom-button fw-bold">Read More</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('layouts.footer')
