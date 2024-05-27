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
@include('layouts.footer')
