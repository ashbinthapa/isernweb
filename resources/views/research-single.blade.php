@include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link fw-bold fs-4" style="color: #01274c;" href="/projects">Research</a>
            </li>
            <li class="nav-item p-3">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li class="nav-item pt-2">
                <a class="nav-link fw-bold fs-6" style="color: #01274c;"
                    href="/projects/{{ $data->first()->research_status }}">{{ $data->first()->research_status }}</a>
            </li>
            <!-- Add more navigation items as needed -->
        </ul>
    </div>
</nav>

<div class="container my-5">
    <p class="mb-4 fw-bold fs-4">{{ $data->title }}</p>
    <div class="row">
        <div class="col-md-12"> <!-- Increased width to 9 columns -->
            <p class="lead">{!! $data->content !!}</p>
        </div>
    </div>
</div>
@include('layouts.footer')
