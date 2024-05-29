@include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <ul class="navbar-nav">
            @if (isset($parentPage))
                <!-- Check if parent page exists -->
                <li class="nav-item">
                    <a class="nav-link fw-bold fs-4" style="color: #01274c;"
                        href="/{{ $parentPage->slug }}">{{ $parentPage->title }}</a>
                </li>
                <li class="nav-item p-3">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </li>
            @endif
            <li class="nav-item pt-2">
                <a class="nav-link fw-bold fs-6" style="color: #01274c;">{{ $page->title }}</a>
            </li>
            <!-- Add more navigation items as needed -->
        </ul>
    </div>
</nav>

<div class="container my-5">
    <p class="mb-4 fw-bold fs-4">{{ $page->title }}</p>

    <div class="row">
        <div class="col-md-12"> <!-- Increased width to 9 columns -->
            <p class="lead">{!! $page->content !!}</p>
        </div>

        <div class="col-md-3"> <!-- Decreased width to 3 columns -->
            <div class="rounded-sm h-[200px] bg-white p-3 mb-4">
                @if ($page->getFirstMediaUrl())
                    <img src="{{ $page->getFirstMediaUrl() }}" alt="" class="img-fluid rounded" />
                @endif
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
