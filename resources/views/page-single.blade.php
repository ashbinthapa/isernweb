@include('layouts.header')

    <h2>{{ $page->title }}</h2>
    <p>{{ $page->content }}</p>
    <div class="rounded-sm h-[70px] w-[70px] flex-shrink-0 bg-white p-3">
        @if ($page->getFirstMediaUrl())
            <img src="{{ $page->getFirstMediaUrl() }}" alt=""
                class="object-contain" />
        @endif
    </div>
@include('layouts.footer')
