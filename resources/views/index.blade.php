@include('layouts.header')
<body>
    <!-- marque breaking -->
    <div class="row py-2">
        <div class="col-2 col-sm-1 col-md-3 col-lg-2 py-1 pe-md-0 mb-md-1">
        <div class="d-inline-block d-md-block bg-primary text-white text-center breaking-caret py-1 px-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" fill="currentColor" class="bi bi-lightning-fill" viewBox="0 0 16 16">
            <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
            </svg>
            <span class="d-none d-md-inline-block">Updates</span>
        </div>
        </div>
    
        <!--Breaking content-->
        <div class="col-10 col-sm-11 col-md-9 col-lg-10 ps-1 ps-md-2">
        <div class="breaking-box pt-2 pb-1">
            <!--marque-->
            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseleave="this.start();">
              @foreach($posts as $post)
                <a class="h6 fw-normal" href="{{ route('posts.show', ['slug' => $post->slug]) }}" style="text-decoration: none; color: inherit;">
                  <span class="position-relative mx-2 badge bg-primary rounded-0">{{ $post->category->name }}</span>
                  {{ $post->title}}
                </a>
              @endforeach  
            </marquee>
        </div>
        </div>
    </div>
    <!-- end marque breaking -->


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
    <!-- latest news and announcement section started -->
    <div class="container-fluid">
      <div class="container text-center" style="margin-top: 20px; margin-bottom: 20px;">
          <h2 class="p-3" style="color: #01274c; margin-top: 20px; margin-bottom: 20px;">Latest News and Announcements</h2>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
              @foreach($posts as $post)
                  <div class="col">
                      <div class="card h-100">
                          @if ($post->getFirstMediaUrl())
                              <img src="{{ $post->getFirstMediaUrl() }}" class="card-img-top .img-fluid img-thumbnail" alt="ISER-N">
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
</body>
@include('layouts.footer')
