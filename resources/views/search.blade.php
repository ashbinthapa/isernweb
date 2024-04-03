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
                    <a class="nav-link" href="#">Search Results</a>
                </li>
                <!-- Add more navigation items as needed -->
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="container text-center" style="margin-top: 20px; margin-bottom: 20px;">
        <h2 class="p-3" style="color: #01274c; margin-top: 20px; margin-bottom: 20px;">Search Results for
            "{{ $query }}"</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            @if ($searchResults->isEmpty())
                <p>No results found.</p>
            @else
                @foreach ($searchResults as $result)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                @if ($result->research_status != null)
                                    <a href="{{ route('research.single', ['research_status' => $result->research_status, 'slug' => $result->slug]) }}"
                                        style="text-decoration: none; color: inherit;">
                                        <h5 class="card-title">{{ $result->title }}</h5>
                                    </a>
                                @else
                                    <a href="{{ route('posts.show', ['slug' => $result->slug]) }}"
                                        style="text-decoration: none; color: inherit;">
                                        <h5 class="card-title">{{ $result->title }}</h5>
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
