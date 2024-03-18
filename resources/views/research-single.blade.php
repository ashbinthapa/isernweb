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
                    <a class="nav-link" href="/projects/{{ $data->first()->research_status }}">{{ $data->first()->research_status }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projects/{{ $data->slug }}">{{ $data->title }}</a>
                </li>
                <!-- Add more navigation items as needed -->
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">
    <h2 class="mb-4">{{ $data->title }}</h2>

    <div class="row">
        <div class="col-md-12"> <!-- Increased width to 9 columns -->
            <p class="lead">{!! $data->content !!}</p>
        </div>
    </div>
</div>
@include('layouts.footer')

