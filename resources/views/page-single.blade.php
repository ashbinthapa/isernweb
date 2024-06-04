@include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <p class="fw-bold fs-4 mt-4">{{ $page->title }}</p>
        <ul class="navbar-nav d-flex flex-row flex-wrap align-items-center">
            <li class="nav-item">
                <a class="nav-link fw-bold fs-4 fs-lg-4" style="color: #01274c;" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <i class="fa fa-angle-right mx-2" aria-hidden="true"></i>
            </li>
            @if (isset($parentPage))
                <!-- Check if parent page exists -->
                <li class="nav-item">
                    <a class="nav-link fw-bold fs-4 fs-lg-4" style="color: #01274c;"
                        href="/{{ $parentPage->slug }}">{{ $parentPage->title }}</a>
                </li>
                <li class="nav-item">
                    <i class="fa fa-angle-right mx-2" aria-hidden="true"></i>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link fw-bold fs-6 fs-lg-6" style="color: #01274c;">{{ $page->title }}</a>
            </li>
            <!-- Add more navigation items as needed -->
        </ul>
    </div>
</nav>



<div class="container my-5">
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

<!-- gallery page start -->

<div class="container-fluid">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="custom-card">

                    <div class="custom-card-body p-3">
                        <a class="ashbin-text-b" href="/policy-and-interventions/Intervention">
                            <p class="custom-card-text">Program Achievement</p>
                            <img src="/images/child education/ChildEducation.jpg" class="custom-card-img-top"
                                alt="Image 1">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="custom-card">
                    <img src="/images/policy-feedback.jpg" class="custom-card-img-top" alt="Image 2">
                    <div class="custom-card-body p-3">
                        <a class="ashbin-text-b" href="/policy-and-interventions/policy-feedback/">
                            <p class="custom-card-text">Policy Feedback</p>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="custom-card">
                    <img src="/images/dissemination.jpg" class="custom-card-img-top" alt="Image 4">
                    <div class="custom-card-body p-3">
                        <a class="ashbin-text-b" href="/dissemination">
                            <p class="custom-card-text">Dissemination</p>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="custom-card">
                    <img src="/images/respondent-interaction.jpg" class="custom-card-img-top" alt="Image 3">
                    <div class="custom-card-body p-3">
                        <a class="ashbin-text-b" href="/policy-and-interventions/interaction-program-with-respondents">
                            <p class="custom-card-text">Respondent Interaction</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- gallery page ends -->
@include('layouts.footer')
