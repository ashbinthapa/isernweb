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
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <h1>Search Results for "{{ $query }}"</h1>

            @if ($searchResults->isEmpty())
                <p>No results found.</p>
            @else
                <ul>
                    @foreach ($searchResults as $result)
                        <li>{{ $result->title }}</li>
                        <!-- Assuming title is a common attribute among all searchable models -->
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@include('layouts.footer')
