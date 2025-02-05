@extends('front-office.layouts.app')

@section('scripts')
    <script>
        var popupSize = {
            width: 780,
            height: 550
        };

        $(document).on('click', '.social-button', function(e) {
            var verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
                horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

            var popup = window.open($(this).prop('href'), 'social',
                'width=' + popupSize.width + ',height=' + popupSize.height +
                ',left=' + verticalPos + ',top=' + horisontalPos +
                ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

            if (popup) {
                popup.focus();
                e.preventDefault();
            }
        });
    </script>
@endsection
@section('content')

    <div class="andro_subheader style-4 bg-cover bg-center bg-norepeat dark-overlay dark-overlay-2"
        style="background-image: url(../front-office-assets/img/subheader-7.jpg)">
        <div class="container">

            <h1>Détails de l'actualité</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('front.blog') }}">Actualités</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Détails de l'actualité</li>
                </ol>
            </nav>

        </div>
    </div>
    @php
        $shareComponent = '<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-instagram"></i></a></li>';
    @endphp


    <div class="section andro_post-d style-3">
        <div class="container">

            <div class="andro_post-d-img">
                @if ($blogPost->featured_image)
                    <img src="{{ asset('storage/uploads/' . $blogPost->featured_image) }}" alt="blog" alt="artist" style="max-height: 580px">
                @else
                    <img src="{{ asset('front-office-assets/img/blog/details/11.jpg') }}" alt="blog">
                @endif

                <span class="andro_post-d-date">{{ $blogPost->created_at->format('d/m/Y') }}</span>
            </div>

            <div class="entry-content">

                <h2 class="h3 entry-title">{{ $blogPost->title }}</h2>
                <div class="andro_post-author">
                    <div class="andro_post-author-thumb">
                        @if ($blogPost->author->profile_image)
                            <img src="{{ asset('storage/uploads/' . $blogPost->author->profile_image) }}" alt="post author">
                        @else
                            <img src="{{ asset('front-office-assets/img/no-image.jpg') }}" alt="post author">
                        @endif

                    </div>
                    <div class="andro_post-author-body">
                        <span>Publié par: </span>
                        <b>{{ $blogPost->author->name }}</b>
                    </div>
                </div>

                {!! $blogPost->post_body_output() !!}

            </div>

            <div class="andro_post-d-footer">

                @if ($blogPost->categories)
                    <div class="andro_post-d-tags">
                        <b>Catégories: </b>
                        @foreach ($blogPost->categories->pluck('name')->toArray() as $item)
                            <a href="#">{{ $item }}</a>
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </div>
                @endif

                <ul class="andro_socials share-buttons">
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                            target="_blank" class="social-button">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blogPost->title) }}"
                            target="_blank" class="social-button">
                            <i class="fab fa-twitter"></i>
                        </a></li>

                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($blogPost->title) }}&summary={{ urlencode($blogPost->short_content()) }}&source={{ urlencode('Votre source ici') }}"
                            target="_blank" class="social-button">
                            <i class="fab fa-linkedin"></i>
                        </a></li>

                    <li>
                        <a href="whatsapp://send?text={{ urlencode($blogPost->title.' => '. url()->current()) }}"
                            data-action="share/whatsapp/share" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>

            </div>



            @livewire('front-office.blog.comment', ['blogPost' => $blogPost])

        </div>
    </div>

@endsection
