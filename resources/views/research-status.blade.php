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
<div class="container py-4">
    @if ($data->first()->research_status === 'ongoing')
        <P>ISER-N carefully chooses research programs in various areas and ensures an explicit focus on Improving Human
            Lives and Environmental Conditions. Since the establishment of ISER-N, have been successfully completed
            several projects. The organization is currently undergoing six projects. ISER-N carefully chooses research
            programs in various areas and ensures an explicit focus on Improving Human Lives and Environmental
            Conditions. Since the establishment of ISER-N, have been successfully completed several projects. The
            organization is currently undergoing Ten Projects. These projects include:</P>
    @else
        <p>Since the date of establishment, ISER-N has completed following Projects in different topics.
        </p>
    @endif
</div>
<div class="container-fluid">
    <div class="container text-left" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($data as $data)
                <div class="col p-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <a href="{{ route('research.single', ['research_status' => $data->research_status, 'slug' => $data->slug]) }}"
                                style="text-decoration: none; color: inherit;">
                                <h5 class="card-title fw-bold" style="font-size: 16px;">{{ $data->title }}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('layouts.footer')
