@include('layouts.header')
<body>
    <!-- start updates section -->
    <div class="row py-2">
        <div class="col-2 col-sm-1 col-md-3 col-lg-2 py-1 pe-md-0 mb-md-1">
        <div class="d-inline-block d-md-block bg-primary text-white text-center breaking-caret py-1 px-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" fill="currentColor" class="bi bi-lightning-fill" viewBox="0 0 16 16">
            <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
            </svg>
            <span class="d-none d-md-inline-block">Updates</span>
        </div>
        </div>
        <!--update content-->
        <div class="col-10 col-sm-11 col-md-9 col-lg-10 ps-1 ps-md-2">
        <div class="breaking-box pt-2 pb-1">
            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseleave="this.start();">
              @foreach($data['posts_all'] as $post)
                <a class="h6 fw-normal" href="{{ route('posts.show', ['slug' => $post->slug]) }}" style="text-decoration: none; color: inherit;">
                  <span class="position-relative mx-2 badge bg-primary rounded-0">{{ $post->category->name }}</span>
                  {{ $post->title}}
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
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9" aria-label="Slide 10"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{ asset('images/iser slider carousel1.jpg')}}" class="d-block w-100" alt="...">
            <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="{{ asset('images/iser slider carousel2.jpg')}}" class="d-block w-100" alt="...">
            <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/iser slider carousel3.jpg')}}" class="d-block w-100" alt="...">
            <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/iser slider carousel4.jpg')}}" class="d-block w-100" alt="...">
            <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/iser slider carousel5.jpg')}}" class="d-block w-100" alt="...">
            <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/iser slider carousel6.jpg')}}" class="d-block w-100" alt="...">
            <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/iser slider carousel7.jpg')}}" class="d-block w-100" alt="...">
            <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/iser slider carousel8.jpg')}}" class="d-block w-100" alt="...">
            <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/iser slider carousel9.jpg')}}" class="d-block w-100" alt="...">
            <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/iser slider carousel10.jpg')}}" class="d-block w-100" alt="...">
            <!--
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
            -->
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--slider ended -->
    
    <!-- about us section start -->
    @if ($data['page_about_us'])
      <div class="container text-center bg-light">
        <h4 class="p-3" style="color: #01274c; margin-top: 20px; margin-bottom: 20px;">Improving Human Lives and Environmental Conditions</h2>
        <h2 class="p-3" style="color: #01274c; margin-top: 20px; margin-bottom: 20px;">Institute for Social and Environmental Research – Nepal (ISER-N)</h2>
        <div class="row">
            <div class="col-md-12"> <!-- Increased width to 9 columns -->
                <p class="lead">{!! $data['page_about_us']->excerpt() !!}</p>
            </div>
        </div>
      </div>
    @else
      <p>No page found with the slug 'about-us'.</p>
    @endif  
    <!-- about us section end --> 

    <!-- latest news and announcement section started -->
    <div class="container-fluid">
      <div class="container text-center" style="margin-top: 20px; margin-bottom: 20px;">
          <h2 class="p-3" style="color: #01274c; margin-top: 20px; margin-bottom: 20px;">Latest News and Announcements</h2>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
              @foreach($data['posts_latest_news'] as $post)
                  <div class="col">
                      <div class="card h-100">
                          @if ($post->getFirstMediaUrl())
                              <img src="{{ $posts_latest_news->getFirstMediaUrl() }}" class="card-img-top .img-fluid img-thumbnail" alt="ISER-N">
                          @endif
                          <div class="card-body">
                              <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" style="text-decoration: none; color: inherit;">
                                  <h5 class="card-title">{{ $post->title}}</h5>
                              </a>
                              <p class="card-text">{{ $post->excerpt() }}</p>
                              <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" class="btn btn-primary">Read More</a>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
  <!-- latest news and announcement section ended -->
  
  <!-- timeline section starts -->
  <div id="carouselExampleControls" class="carousel slide text-center" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($data['timeline_slider']->chunk(4) as $index => $chunk)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
            <div class="container-fluid py-5">
                <div class="row">
                    @foreach($chunk as $timeline)
                    <div class="col-lg-3">
                        <div class="horizontal-timeline">
                            <ul class="list-inline items">
                                <li class="list-inline-item items-list">
                                    
                                        <div class="event-date badge bg-info">{{ $timeline->start_date}}</div>
                                        <p class="text-muted">{{ $timeline->title}}</p>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


  <!-- timeline section ends -->  
</body>
@include('layouts.footer')
