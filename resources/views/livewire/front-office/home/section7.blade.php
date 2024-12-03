<div class="section md white-bg">

    <div class="container">

        <div class="section-title text-center">
            <p class="subtitle">Restez à jour</p>
            <h3>Articles récents</h3>
            <div class="section-title-icon icon-music">
                <span></span><span></span><span></span><span></span>
                <span></span><span></span><span></span><span></span><span></span>
            </div>
        </div>

        <div class="row">
            @forelse ($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="andro_post">
                        <div class="andro_post-thumb">
                            <a href="{{ route('front.blog-post', $post->slug) }}">
                                @if ($post->featured_image)
                                    <img src="{{ asset('storage/uploads/' . $post->featured_image) }}" alt="blog post">
                                @else
                                    <img src="{{ asset('front-office-assets/img/no-image.jpg') }}" alt="blog post">
                                @endif

                                <span class="andro_post-date">{{ $post->created_at->format('M Y') }}</span>
                            </a>
                        </div>
                        <div class="andro_post-body">
                            <h5> <a href="{{ route('front.blog-post', $post->slug) }}">{!! Str::limit($post->title, 50, ' ...') !!}</a> </h5>
                            <p>{!! Str::limit($post->shord_content(), 150, ' ...') !!}</p>
                            <div class="andro_post-author">
                                <div class="andro_post-author-thumb">
                                    @if ($post->author->profile_image)
                                        <img src="{{ asset('storage/uploads/' . $post->author->profile_image) }}"
                                            alt="post author">
                                    @else
                                        <img src="{{ asset('front-office-assets/img/no-image.jpg') }}"
                                            alt="post author">
                                    @endif

                                </div>
                                <div class="andro_post-author-body">
                                    <span>Publié par: </span>
                                    <b>{{ $post->author->name }}</b>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <h2>Aucun article trouvé !</h2>
            @endforelse







        </div>

        @if ($posts->count() > 0)
            <div class="container text-center">


                <a href="{{ route('front.blog') }}" class="button primary icon-after">Afficher plus <i
                        class="fal fa-arrow-right"></i> </a>

            </div>
        @endif

    </div>

</div>
