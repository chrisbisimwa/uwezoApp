<div class="section">
    <div class="container">

        <div class="row">

            <div class="col-lg-8">
                @forelse ($blogPosts as $blog)
                    <div class="andro_post sm style-3">
                        <div class="andro_post-thumb">
                            <a href="{{route('front.blog-post', $blog->slug)}}">
                                @if ($blog->featured_image)
                                    <img src="{{ asset('storage/uploads/' . $blog->featured_image) }}" alt="blog post">
                                @else
                                    <img src="{{ asset('front-office-assets/img/blog/slider/1.jpg') }}" alt="blog post">
                                @endif

                            </a>
                        </div>
                        <div class="andro_post-body">
                            <div class="andro_post-author">
                                <div class="andro_post-author-thumb">
                                    <img src="{{ asset('front-office-assets/img/blog/author/1.jpg') }}"
                                        alt="post author">
                                </div>
                                <div class="andro_post-author-body">
                                    <span>Publié par: </span>
                                    <b>{{ $blog->author->name }}</b>
                                </div>
                            </div>
                            <h5> <a href="{{route('front.blog-post', $blog->slug)}}">{{ $blog->title }}</a> </h5>
                            <p>
                                {{ $blog->shord_content() }}
                            </p>
                            <a href="{{route('front.blog-post', $blog->slug)}}" class="button secondary">Lire la suite</a>
                        </div>
                    </div>
                @empty
                    <span>
                        <h2>Aucun article trouvé !</h2>
                    </span>
                @endforelse



                {{ $blogPosts->links('vendor.livewire.frontend') }}

            </div>

            <div class="col-lg-4">
                <div class="andro_sidebar">

                    <div class="widget widget-albums">
                        <h5 class="widget-title">Top Albums</h5>
                        <div class="andro_album">
                            <div class="andro_album-img">
                                <img src="{{ asset('front-office-assets/img/albums/sm/2.jpg') }}" alt="album">
                            </div>
                            <div class="andro_album-body">
                                <div class="andro_album-categories">
                                    <a href="#">Hip Hop</a>
                                </div>
                                <h6> <a href="#"> Tsapa Music </a> </h6>
                                <span> <i class="fas fa-music"></i> 2,341 </span>
                            </div>
                        </div>
                        <div class="andro_album">
                            <div class="andro_album-img">
                                <img src="{{ asset('front-office-assets/img/albums/sm/4.jpg') }}" alt="album">
                            </div>
                            <div class="andro_album-body">
                                <div class="andro_album-categories">
                                    <a href="#">Jazz</a>, <a href="#">Samba</a>
                                </div>
                                <h6> <a href="#"> Girlfiend Beauty </a> </h6>
                                <span> <i class="fas fa-music"></i> 15,523 </span>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget-recent-posts">
                        <h5 class="widget-title">Recent News</h5>
                        <div class="andro_recent-post">
                            <a href="blog-details.html" class="andro_recent-post-date">10 Jan 2022</a>
                            <a href="blog-details.html" class="andro_recent-post-title">Musika Live Show</a>
                        </div>
                        <div class="andro_recent-post">
                            <a href="blog-details.html" class="andro_recent-post-date">12 Feb 2022</a>
                            <a href="blog-details.html" class="andro_recent-post-title">Incredible &amp; Successful</a>
                        </div>
                        <div class="andro_recent-post">
                            <a href="blog-details.html" class="andro_recent-post-date">22 Mar 2022</a>
                            <a href="blog-details.html" class="andro_recent-post-title">Else You Need to Know</a>
                        </div>
                    </div>

                    <div class="widget widget-twitter-feed">
                        <h5 class="widget-title">Twitter Feed</h5>
                        <div class="swiper-container single-slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                            style="cursor: grab;">
                            <div class="swiper-wrapper" id="swiper-wrapper-a2046742e3b721e5" aria-live="off"
                                style="transition-duration: 0ms; transform: translate3d(-276px, 0px, 0px);">

                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 3"
                                    style="width: 276px;">
                                    <p>
                                        Aenean sollicitudin, lorem quis biben
                                        consequat ipsum, nec sagittis sem ni
                                        Morbi
                                    </p>
                                    <span>18 Hours Ago</span>
                                </div>
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 3"
                                    style="width: 276px;">
                                    <p>
                                        Aenean sollicitudin, lorem quis biben
                                        consequat ipsum, nec sagittis sem ni
                                        Morbi
                                    </p>
                                    <span>18 Hours Ago</span>
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 3"
                                    style="width: 276px;">
                                    <p>
                                        Aenean sollicitudin, lorem quis biben
                                        consequat ipsum, nec sagittis sem ni
                                        Morbi
                                    </p>
                                    <span>18 Hours Ago</span>
                                </div>

                            </div>
                            <div class="swiper-pagination swiper-pagination-bullets"><span
                                    class="swiper-pagination-bullet"></span><span
                                    class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                                    class="swiper-pagination-bullet"></span></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <i class="fab fa-twitter"></i>
                    </div>

                </div>
            </div>

        </div>



    </div>
</div>
