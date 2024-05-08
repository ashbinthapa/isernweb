@include('layouts.header')

<body>
    {{-- move to tp button started --}}
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i>
    </button>
    {{-- move to top button end --}}

    <!-- start updates section -->
    <div class="row breaking-updates">
        <div class="col-1">
            <div class="d-inline-block d-md-block bg-danger text-white text-center breaking-caret fw-bold">
                UPDATES
            </div>
        </div>
        <!--update content-->
        <div class="col-10">
            <div class="breaking-box">
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseleave="this.start();">
                    @foreach ($data['posts_all'] as $post)
                        <a class="h6 fw-bold" href="{{ route('posts.show', ['slug' => $post->slug]) }}"
                            style="text-decoration: none;">
                            <span class="position-relative mx-2 badge rounded-0 font-weight-bold"
                                style="background-color: #05264b;">{{ $post->category->name }}</span>
                            {{ $post->title }}
                        </a>
                    @endforeach
                </marquee>
            </div>
        </div>
    </div>
    <!-- end update section -->


    <!--Slider started-->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"
                aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6"
                aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7"
                aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8"
                aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9"
                aria-label="Slide 10"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="{{ asset('images/iser slider carousel1.jpg') }}" class="d-block w-100" alt="...">
                <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/iser slider carousel2.jpg') }}" class="d-block w-100" alt="...">
                <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/iser slider carousel3.jpg') }}" class="d-block w-100" alt="...">
                <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/iser slider carousel4.jpg') }}" class="d-block w-100" alt="...">
                <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/iser slider carousel5.jpg') }}" class="d-block w-100" alt="...">
                <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/iser slider carousel6.jpg') }}" class="d-block w-100" alt="...">
                <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/iser slider carousel7.jpg') }}" class="d-block w-100" alt="...">
                <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/iser slider carousel8.jpg') }}" class="d-block w-100" alt="...">
                <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/iser slider carousel9.jpg') }}" class="d-block w-100" alt="...">
                <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/iser slider carousel10.jpg') }}" class="d-block w-100" alt="...">
                <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--slider ended -->

    <!-- about us section start -->
    @if ($data['page_about_us'])
        <div class="container-fluid text-center bg-light">
            <h4 class="pt-5 pb-2 fw-bold" style="color: #01274c; font-size: 21px;">Improving Human Lives
                and Environmental Conditions</h4>
            <h2 class="fw-bold" style="color: #01274c; font-size: 36px;">Institute for
                Social
                and Environmental Research – Nepal (ISER-N)</h2>
            <div class="row m-3 justify-content-md-center">
                <div class="col-md-9">
                    <p style="font-size: 14px;">ISER-N is a premier research and
                        development
                        institute.
                        ISER-N’s work focuses
                        on
                        evidence-based decision-making processes that build on high quality scientific research carried
                        out by employing state-of-the-art, cutting-edge research methods for promoting informed policy
                        decisions, identifying effective sustainable development initiatives, and strengthening
                        democratic values. The institute adopts a three-pronged working approach that interlinks
                        research, capacity building, and policy and program interventions as part of its effort to turn
                        knowledge into practice.</p>
                </div>
                <div class="col-md-12 p-4">
                    <a href="/about-us"><button class="custom-button fw-bold">Find
                            More...</button></a>
                </div>
            </div>
        </div>
    @else
        <p>No page found with the slug 'about-us'.</p>
    @endif
    <!-- about us section end -->

    <!-- timeline section starts -->
    <div id="carouselExampleControls" class="carousel slide text-center" data-bs-ride="carousel">
        <div class="row">
            <div class="col-md-12 py-5">
                <p class="fw-bold fs-1" style="color: #01274c;">History</p>
            </div>
        </div>
        <div class="carousel-inner">
            @foreach ($data['timeline_slider']->chunk(4) as $index => $chunk)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <div class="container-fluid py-5">
                        <div class="row">
                            @foreach ($chunk as $timeline)
                                <div class="col-lg-3">
                                    <div class="horizontal-timeline">
                                        <ul class="list-inline items">
                                            <li class="list-inline-item items-list px-3">

                                                <div class="event-date badge" style="background-color: #01274c;">
                                                    {{ $timeline->start_date }}
                                                </div>

                                                <div class="row card pb-2 pt-2">
                                                    <div>
                                                        <p class="fs-6">{{ $timeline->title }}</p>
                                                    </div>
                                                    <div>

                                                        <a href="{{ route('timeline.single', ['slug' => $timeline->slug]) }}"
                                                            class="btn btn-sm"
                                                            style="background-color: #01274c; color:white;">Read
                                                            more</a>

                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- timeline section ends -->

    <!-- latest news and announcement section started -->
    <div class="container-fluid bg-light py-4">
        <div class="container text-center" style="margin-top: 20px; margin-bottom: 20px;">
            <p class="fw-bold fs-1" style="color: #01274c;">Latest News and
                Announcements</p>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($data['posts_latest_news'] as $post)
                    <div class="col p-2">
                        <div class="card h-100">
                            @if ($post->getFirstMediaUrl())
                                <img src="{{ $posts_latest_news->getFirstMediaUrl() }}"
                                    class="card-img-top .img-fluid img-thumbnail" alt="ISER-N">
                            @endif
                            <div class="card-body">
                                <p class="fs-6">{{ date('F j, Y', strtotime($post->updated_at)) }}
                                </p>

                                <a href="{{ route('posts.show', ['slug' => $post->slug]) }}"
                                    style="text-decoration: none; color: inherit;">
                                    <p class="card-title fw-bold fs-5">{{ $post->title }}</p>
                                </a>
                                <p class="card-text">{{ $post->excerpt() }}</p>
                                <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" class="btn"
                                    style="background-color: #01274c; color:white;">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- latest news and announcement section ended -->

    <!-- latest research section start -->

    <div class="container-fluid text-center">
        <p class="fw-bold fs-1 py-4" style="color: #01274c;">Latest Research</p>
        <div class="row px-5 mx-5">
            <div class="col-md-12 p-3">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    @php $i = 1; @endphp
                    @foreach ($data['latest_research'] as $research)
                        <div class="col p-2">
                            <div class="card h-100">

                                @if ($i == 1)
                                    <img src="{{ asset('images/iser slider carousel1.jpg') }}"
                                        class="card-img-top img-fluid img-thumbnail" alt="{{ $research->title }}">
                                @elseif ($i == 2)
                                    <img src="{{ asset('images/iser slider carousel8.jpg') }}"
                                        class="card-img-top img-fluid img-thumbnail" alt="{{ $research->title }}">
                                @elseif ($i == 3)
                                    <img src="{{ asset('images/research1.jpg') }}"
                                        class="card-img-top img-fluid img-thumbnail" alt="{{ $research->title }}">
                                @elseif ($i == 4)
                                    <img src="{{ asset('images/research2.jpg') }}"
                                        class="card-img-top img-fluid img-thumbnail" alt="{{ $research->title }}">
                                @endif
                                @php $i++; @endphp
                                <div class="card-body">

                                    <a href="{{ route('research.single', ['research_status' => $research->research_status, 'slug' => $research->slug]) }}"
                                        style="text-decoration: none; color: inherit;">
                                        <p class="card-title fw-bold fs-5">{{ $research->title }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="p-4">
                <a href="/projects" class="btn p-3" style="background-color: #01274c; color:white;">All
                    Researches</a>
            </div>
        </div>
    </div>
    <!-- latest research section ends -->

    <!-- data section start -->

    <div class="container-fluid text-center bg-light">
        <p class="fw-bold fs-1 py-4" style="color: #01274c;">Data</p>
        <div class="row px-5 mx-5">
            <div class="col-md-12 p-3">
                <p class="fs-6" style="padding: 0px 200px 0px 200px">ISER-N in collaboration with universities and
                    research organizations in Nepal and abroad has collected a large number of longitudinal panel and
                    cross-sectional data on various topics. ISER-N has collected a wide range of data on population
                    health (psychological and physical health), environment, population dynamics, family change,
                    migration, education and social change. Moreover, most of the data are available for students,
                    teachers, professors, and scholars in Nepal and throughout the world. The measurements themselves
                    included survey data, ethnographic data, anthropometric, biomarkers, botanical counts, land use
                    measures, and geographic information system data collection. The data are available in ISER-N office
                    at Fulbari, Chitwan while one can also electronically access them from Inter-university Consortium
                    for Political and Social Research (ICPSR) at the University for Michigan and UK Data Bank through
                    the following link listed below.</p>
            </div>
            <div class="p-4">
                <a href="/data" class="btn p-3" style="background-color: #01274c; color:white;">Find More</a>
            </div>
        </div>
    </div>
    <!-- data section ends -->



    <!-- publication section started -->

    <div class="container py-4">
        <p class="fw-bold fs-1 py-4 text-center" style="color: #01274c;">Publications</p>

        <div class="row">

            <!-- Replace dropdown with checkboxes -->
            @foreach ($data['publications_data'] as $type)
                <div class="col-md-3 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $type->publicationcategory->id }}"
                            id="checkboxPublicationType{{ $type->publicationcategory->id }}">
                        <label class="form-check-label fw-bold fs-6" style="color: #01274c;"
                            for="checkboxPublicationType{{ $type->publicationcategory->id }}">
                            {{ $type->publicationcategory->name }}
                        </label>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="card table-responsive mt-4 text-center">
            <table id="example" class="table table-striped table-borderless">
                <thead class="fw-bold custom-table-header">
                    <tr>
                        <th scope="col" data-column="0" class="col-3 sortable">Publication Type <i
                                class="fa fa-sort"></i></th>
                        <th scope="col" data-column="1" class="col-6 sortable">Publication <i
                                class="fa fa-sort"></i>
                        </th>
                        <th scope="col" data-column="2" class="col-1 sortable">Link <i class="fa fa-sort"></i>
                        </th>
                        <th scope="col" data-column="3" class="col-2 sortable">Year <i class="fa fa-sort"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['publications_data'] as $publication)
                        <tr data-type="{{ $publication->publicationcategory->id }}"
                            data-date="{{ $publication->year }}">
                            <td class="align-middle">{{ $publication->publicationcategory->name }}</td>
                            <td class="align-middle">{{ $publication->title }}</td>
                            <td class="align-middle"><a href="{{ $publication->link }}" target="_blank"
                                    class="fw-bold" style="text-decoration: none; color: #01274c;">DOI</a></td>
                            <td class="align-middle">{{ $publication->year }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul id="pagination_links" class="pagination">
                    <!-- Pagination links will be dynamically populated here -->
                </ul>
            </nav>
        </div>
        <div class="p-4 text-center">
            <a href="/publications" class="btn p-3" style="background-color: #01274c; color:white;">All
                Publications</a>
        </div>
    </div>
    <!-- publication ends here -->


    <!-- policy and interventions section start -->

    <div class="container-fluid text-center bg-light">
        <p class="fw-bold fs-1 py-4" style="color: #01274c;">Policy & Interventions</p>
        <div class="row px-5 mx-5">
            <div class="col-md-12 p-3">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <div class="col p-2">
                        <div class="card h-100">

                            <img src="{{ asset('images/iser slider carousel1.jpg') }}"
                                class="card-img-top img-fluid img-thumbnail" alt="">


                            <div class="card-body">

                                <a href="/policy-and-interventions/Intervention"
                                    style="text-decoration: none; color: inherit;">
                                    <p class="card-title fw-bold fs-5">Program Achievement</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col p-2">
                        <div class="card h-100">

                            <img src="{{ asset('images/iser slider carousel8.jpg') }}"
                                class="card-img-top img-fluid img-thumbnail" alt="">

                            <div class="card-body">

                                <a href="/policy-and-interventions/policy-feedback/"
                                    style="text-decoration: none; color: inherit;">
                                    <p class="card-title fw-bold fs-5">Policy Feedback</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col p-2">
                        <div class="card h-100">

                            <img src="{{ asset('images/research1.jpg') }}"
                                class="card-img-top img-fluid img-thumbnail" alt="">

                            <div class="card-body">

                                <a href="/dissemination" style="text-decoration: none; color: inherit;">
                                    <p class="card-title fw-bold fs-5">Dissemination</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col p-2">
                        <div class="card h-100">

                            <img src="{{ asset('images/research2.jpg') }}"
                                class="card-img-top img-fluid img-thumbnail" alt="">

                            <div class="card-body">

                                <a href="/policy-and-interventions/interaction-program-with-respondents"
                                    style="text-decoration: none; color: inherit;">
                                    <p class="card-title fw-bold fs-5">Respondent Interaction</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <a href="/projects" class="btn p-3" style="background-color: #01274c; color:white;">All
                    Researches</a>
            </div>
        </div>
    </div>
    <!-- policy and interventions research section ends -->

    <!-- work with us section start -->

    <div class="container-fluid text-center">
        <p class="fw-bold fs-1 py-4" style="color: #01274c;">Work With Us</p>
        <div class="row px-5 mx-5">
            <div class="col-md-12 p-3">
                <p class="fs-6" style="padding: 0px 200px 0px 200px">ISER-N is a premier research and
                    In decades, ISER-N has successfully maintained partnerships with various universities, research
                    organizations, and researchers, both in Nepal and abroad. ISER-N is also connected to the
                    respondents who share their thoughts and experiences in response to the questionnaire. It has
                    collected a wide range of data on population health (psychological and physical health),
                    environment, population dynamics, family change, migration, education, and social change for
                    decades. ISER-N has always been open to various levels of collaboration and has been able to
                    maintain a data repository helpful for many researchers. One may get involved in ISER-N in many
                    ways. We also provide valuable training and support to researchers and scholars willing to
                    conduct research in Chitwan Valley or Nepal.</p>
            </div>
            <div class="row fw-bold fs-5" style="padding: 60px">
                <div class="col-md-4 p-4" style="color: #01274c;">
                    <a href="/collaboration/collaborate-with-us" style="text-decoration: none"><i
                            class="fa fa-handshake-o pb-4" style="font-size: 50px; color: #01274c;"
                            aria-hidden="true"></i><br>
                        <p style="color: #01274c;">Collaborate with us</p>
                    </a>
                </div>
                <div class="col-md-4 p-4">
                    <a href="/work-with-us/career-at-isern" style="text-decoration: none;"><i
                            class="fa fa-briefcase pb-4" style="font-size: 50px; color: #01274c;"
                            aria-hidden="true"></i><br>
                        <p style="color: #01274c;">Career</p>
                    </a>
                </div>
                <div class="col-md-4 p-4">
                    <a href="/#" style="text-decoration: none;"><i class="fa fa-graduation-cap pb-4"
                            style="font-size: 50px; color: #01274c;" aria-hidden="true"></i><br>
                        <p style="color: #01274c;">Internship</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- work with us section ends here -->

    <!-- contact us starts here -->
    <div class="container-fluid py-5 bg-light">
        <div class="row justify-content-center"> <!-- Centering the row -->
            <div class="col-md-8"> <!-- Adjust the column width as needed -->
                <div class="mb-3 text-center"> <!-- Centering the content -->
                    <p class="fw-bold fs-1 py-4" style="color: #01274c;">Get the latest ISER-N Research &
                        Publications</p>
                </div>
                <div class="col-mb-3 text-center"> <!-- Centering the content -->
                    @if (session('success'))
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary d-none" id="successModalButton"
                            data-bs-toggle="modal" data-bs-target="#successModal">
                            Success Modal
                        </button>
                    @endif
                </div>

                <form action="{{ route('contact') }}" method="POST" class="text-center">
                    <!-- Centering the form -->
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label"> Your Name</label>
                        <div class="col-sm-4 mx-auto"> <!-- Centering the input field -->
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <div class="col-sm-4 mx-auto"> <!-- Centering the input field -->
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <div class="col-sm-4 mx-auto"> <!-- Centering the input field -->
                            <textarea name="message" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"> <!-- Centering the modal -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (session('success'))
                        {{ session('success') }}
                    @endif
                </div>
                <div class="modal-footer justify-content-center"> <!-- Centering the modal footer buttons -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us ends here -->


</body>
@include('layouts.footer')
