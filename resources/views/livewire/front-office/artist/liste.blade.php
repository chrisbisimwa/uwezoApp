<div>
    <div class="section md white-bg">
        <div class="container">
            <div class="row andro_isotope-filter">
                @forelse ($artistes as $art)
                    <div class="col-lg-4 col-md-4 col-sm-6 andro_isotope-item d1">
                        <div class="andro_artist style-2">

                            <div class="andro_artist-img">
                                <div class="artist-img-wrapper" style="position:relative;">
                                    <div class="artist-img-loading">
                                        <i class="fa fa-spinner fa-spin fa-2x text-muted"></i>
                                    </div>
                                    <img src="{{ \Storage::url('uploads/' . $art->photo) }}" alt="{{ $art->prenom }}"
                                        loading="lazy" width="300" height="300"
                                        onload="this.style.opacity=1; this.parentNode.querySelector('.artist-img-loading').style.display='none';"
                                        onerror="this.src='{{ asset('front-office-assets/img/avatar-placeholder.png') }}'; this.style.opacity=1; this.parentNode.querySelector('.artist-img-loading').style.display='none';"
                                        style="opacity:0;transition:opacity 0.3s;">
                                </div>
                                <div class="andro_artist-img-content">
                                    <div class="andro_artist-meta">
                                    </div>
                                    <ul class="andro_socials">
                                        @if ($art->facebook_link)
                                            <li> <a class="facebook" href="{{ $art->facebook_link }}" target="_blank">
                                                    <i class="fab fa-facebook-f"></i> </a> </li>
                                        @endif
                                        @if ($art->twitter_link)
                                            <li> <a class="twitter" href="{{ $art->twitter_link }}" target="_blank"> <i
                                                        class="fab fa-twitter"></i> </a> </li>
                                        @endif
                                        @if ($art->instagram_link)
                                            <li> <a class="instagram" href="{{ $art->instagram_link }}" target="_blank">
                                                    <i class="fab fa-instagram"></i> </a> </li>
                                        @endif
                                        @if ($art->soundcloud_link)
                                            <li> <a class="spotify" href="{{ $art->soundcloud_link }}" target="_blank">
                                                    <i class="fab fa-spotify"></i> </a> </li>
                                        @endif
                                        @if ($art->youtube_link)
                                            <li> <a class="youtube" href="{{ $art->youtube_link }}" target="_blank"> <i
                                                        class="fab fa-youtube"></i> </a> </li>
                                        @endif
                                        @if ($art->tiktok_link)
                                            <li> <a class="tiktok" href="{{ $art->tiktok_link }}" target="_blank"> <i
                                                        class="fab fa-tiktok"></i> </a> </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            <h5 class="andro_artist-name">
                                <a href="{{ route('front.artisteDetail', $art->slug) }}">{{ $art->nom }}
                                    {{ $art->prenom }} </a>
                            </h5>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12">
                        <center>
                            <div class="alert alert-warning" role="alert">
                                Aucun artiste trouvé
                            </div>
                        </center>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <div style="margin-top: 10%;">
        {{ $artistes->links('vendor.livewire.frontend') }}
    </div>
</div>
