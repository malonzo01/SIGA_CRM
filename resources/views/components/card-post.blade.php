@props(['post'])
<div class="col-lg-6">
    <div class="position-relative mb-3">
        <div class="card h-100 mb-5 shadow-sm">
            @if ($post->image)
                <img class="card-img-top" src="{{ Storage::url($post->image->url) }}" alt="">
            @else
                <img class="card-img-top" src="https://cdn.pixabay.com/photo/2022/06/20/12/59/hard-hat-7273716_640.jpg"
                    alt="">
            @endif
            <div class="card-body">
                <div class="card-title">
                    <h3>
                        <a href="{{ route('posts.show', $post) }}">
                            {{ $post->name }}
                        </a>
                    </h3>
                </div>
                <div class="card-text">
                    <p>{{ $post->extract }}</p>
                </div>
                <!--
                <div class="card-header-elements">
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('posts.tag', $tag) }}"
                            class="badge bg-{{ $tag->color }} rounded-pill ">{{ $tag->name }}</a>
                    @endforeach
                </div>
                -->
            </div>
        </div>
    </div>
</div>
