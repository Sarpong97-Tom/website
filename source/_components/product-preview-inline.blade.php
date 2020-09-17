
    <div class=" product mx-4 my-4 px-3 col-12 col-sm-12 col-md-12 col-lg-3">
        <div class="lead-img">
            <img alt="{{ $post->title }} cover image" src="{{ $post->cover_image }}" class="w-full h-64 object-cover mb-6" />
        </div>

        <div class="main-content">
    
            <h2 class="text-xl leading-tight mb-2">{{ $post->title }}</h2>
            <p class="mt-3 mx-auto text-sm leading-normal">{!! $post->getExcerpt(200) !!}</p>
            <a
                href="{{ $post->getUrl() }}"
                title="Read more - {{ $post->title }}"
                class="uppercase font-thin tracking-normal mb-2"
            >read more</a>
        </div>

    </div>
