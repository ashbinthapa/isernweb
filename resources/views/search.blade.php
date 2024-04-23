@include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item pt-2">
                <a class="nav-link fw-bold fs-6" style="color: #01274c;">{{ $query }}</a>
            </li>
            <!-- Add more navigation items as needed -->
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="container text-center" style="margin-top: 20px; margin-bottom: 20px;">
        <p class="mb-4 fw-bold fs-4">Search Results for
            "{{ $query }}"</p>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            @if ($searchResults->isEmpty())
                <p>No results found.</p>
            @else
                @foreach ($searchResults as $result)
                    <div class="col p-2">
                        <div class="card h-100">
                            <div class="card-body">
                                @if ($result->parent_slug != null && $result->child_slug != null)
                                    <a href="{{ route('page.single', ['parent_slug' => $result->parent_slug, 'child_slug' => $child_slug]) }}"
                                        style="text-decoration: none; color: inherit;">
                                        <h5 class="card-title fw-bold" style="font-size: 16px;">
                                            {{ $result->title }}</h5>
                                    </a>
                                @elseif($result->research_status != null)
                                    <a href="{{ route('research.single', ['research_status' => $result->research_status, 'slug' => $result->slug]) }}"
                                        style="text-decoration: none; color: inherit;">
                                        <h5 class="card-title fw-bold" style="font-size: 16px;">
                                            {{ $result->title }}</h5>
                                    </a>
                                @else
                                    <a href="{{ route('posts.show', ['slug' => $result->slug]) }}"
                                        style="text-decoration: none; color: inherit;">
                                        <h5 class="card-title fw-bold" style="font-size: 16px;">
                                            {{ $result->title }}</h5>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
</div>
@include('layouts.footer')
