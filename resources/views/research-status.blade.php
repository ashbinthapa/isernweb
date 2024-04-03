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
                    <a class="nav-link" href="/projects">Research</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="/projects/{{ $data->first()->research_status }}">{{ $data->first()->research_status }}</a>
                </li>
                <!-- Add more navigation items as needed -->
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="container text-center" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($data as $data)
                <div class="col p-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <a href="{{ route('single', ['research_status' => $data->research_status, 'slug' => $data->slug]) }}"
                                style="text-decoration: none; color: inherit;">
                                <h5 class="card-title">{{ $data->title }}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('layouts.footer')
