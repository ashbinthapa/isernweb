@include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link fw-bold fs-4" style="color: #01274c;" href="/posts">Posts</a>
            </li>
            <li class="nav-item p-3">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li class="nav-item pt-2">
                <a class="nav-link fw-bold fs-6" style="color: #01274c;"
                    href="/posts/category/{{ $post->category->name }}">{{ $post->category->name }}</a>
            </li>
            <!-- Add more navigation items as needed -->
        </ul>
    </div>
</nav>


<div class="container my-5">
    <h2 class="mb-4 fw-bold fs-4">{{ $post->title }}</h2>

    <div class="row">
        <div class="col-md-12"> <!-- Increased width to 9 columns -->
            <p class="fs-6">{{ date('F j, Y', strtotime($post->published_at)) }}
            </p>
        </div>
        <div class="col-md-12"> <!-- Increased width to 9 columns -->
            <p class="lead" style="font-size: 14px">{!! $post->content !!}</p>
        </div>

        <div class="col-md-3"> <!-- Decreased width to 3 columns -->
            <div class="rounded-sm h-[200px] bg-white p-3 mb-4">
                @if ($post->getFirstMediaUrl())
                    <img src="{{ $post->getFirstMediaUrl() }}" alt="" class="img-fluid rounded" />
                @endif
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
