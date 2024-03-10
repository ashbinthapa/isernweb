@include('layouts.header')

    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <div class="rounded-sm h-[70px] w-[70px] flex-shrink-0 bg-white p-3">
        @if ($post->getFirstMediaUrl())
            <img src="{{ $post->getFirstMediaUrl() }}" alt=""
                class="object-contain" />
        @endif
    </div>
@include('layouts.footer')
