@include('layouts.header')
<div class="container-fluid">
    <div class="container text-center" style="margin-top: 20px; margin-bottom: 20px;">
        <h2 class="p-3" style="color: #01274c; margin-top: 20px; margin-bottom: 20px;">Research</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($datas as $data)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <a href="{{ route('data.show', ['slug' => $data->slug]) }}" style="text-decoration: none; color: inherit;">
                                <h5 class="card-title">{{ $post->title}}</h5>
                            </a>
                            <p class="card-text">{{ $data->excerpt() }}</p>
                            <a href="{{ route('research.show', ['slug' => $data->slug]) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('layouts.footer')
