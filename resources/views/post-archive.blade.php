@include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Posts</a>
                </li>
                <!-- Add more navigation items as needed -->
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="container text-center" style="margin-top: 20px; margin-bottom: 20px;">
        <h2 class="p-3" style="color: #01274c; margin-top: 20px; margin-bottom: 20px;">Latest News and Announcements
        </h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($posts as $post)
                <div class="col">
                    <div class="card h-100">
                        @if ($post->getFirstMediaUrl())
                            <img src="{{ $post->getFirstMediaUrl() }}" class="card-img-top .img-fluid img-thumbnail"
                                alt="ISER-N">
                        @endif
                        <div class="card-body">
                            <a href="{{ route('posts.show', ['slug' => $post->slug]) }}"
                                style="text-decoration: none; color: inherit;">
                                <h5 class="card-title">{{ $post->title }}</h5>
                            </a>
                            <p class="card-text">{{ $post->excerpt() }}</p>
                            <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" class="btn btn-primary">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('layouts.footer')
