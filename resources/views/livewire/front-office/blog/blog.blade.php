<div class="section">
    <div class="container">
        <div class="row">
            @forelse ($blogPosts as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="andro_post">
                        <div class="andro_post-thumb">

                            <a href="{{ route('front.blog-post', $blog->slug) }}">
                                @if ($blog->featured_image)
                                    <img src="{{ asset('storage/uploads/' . $blog->featured_image) }}" alt="blog post">
                                @else
                                    <img src="{{ asset('front-office-assets/img/blog/slider/1.jpg') }}" alt="blog post">
                                @endif

                            </a>
                            <span class="andro_post-date">{{ $blog->created_at->format('d M, Y') }}</span>
                        </div>
                        <div class="andro_post-body">
                            <h5> <a href="{{ route('front.blog-post', $blog->slug) }}"> {!! Str::limit($blog->title, 60, ' ...') !!}</a>
                            </h5>
                            <p>{!! Str::limit($blog->short_content(), 150, ' ...') !!}</p>
                            <div class="andro_post-author">
                                <div class="andro_post-author-thumb">
                                    @if ($blog->author->profile_image)
                                        <img src="{{ asset('storage/uploads/' . $blog->author->profile_image) }}"
                                            alt="post author">
                                    @else
                                        <img src="{{ asset('front-office-assets/img/no-image.jpg') }}"
                                            alt="post author">
                                    @endif
                                </div>
                                <div class="andro_post-author-body">
                                    <span>Publié par: </span>
                                    <b>{{ $blog->author->name }}</b>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <span>
                    <h2>Aucun article trouvé !</h2>
                </span>
            @endforelse






        </div>


        {{ $blogPosts->links('vendor.livewire.frontend') }}

    </div>
</div>


