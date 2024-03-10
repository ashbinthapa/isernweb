@include('layouts.header')
    <div class="container-fluid">
        <div class="container text-center">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            @if ($post->getFirstMediaUrl())
                                <img src="{{ $post->getFirstMediaUrl() }}" class="card-img-top" alt="...">
                            @endif    
                            <div class="card-body">
                                <a href="{{ route('posts.show', ['slug' => $post->slug]) }}">
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
@include('layouts.footer')