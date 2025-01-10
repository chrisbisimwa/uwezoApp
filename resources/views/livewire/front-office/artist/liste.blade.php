<div class="section md white-bg">

    <div class="container">

        <div class="andro_isotope-filter-nav">
            
            <a style="cursor: pointer;" wire:click="loadByCategory(0)" class="andro_isotope-trigger">Toutes les catégories</a>
            @foreach ($categories as $cat)
                <a style="cursor: pointer;" wire:click="loadByCategory({{$cat->id}})" class="andro_isotope-trigger">{{ $cat->name }}</a>
            @endforeach
        </div>

        <div class="row andro_isotope-filter" style="position: relative; height: 2981.42px;">
            @foreach ($artistes as $art)
                <div class="col-lg-3 col-md-4 col-sm-6 andro_isotope-item d1"
                    style="position: absolute; left: 0px; top: 0px;">
                    <div class="andro_artist style-2">

                        <div class="andro_artist-img">
                            <img src="front-office-assets/img/artists/md/afande.jpg" alt="artist">
                            <div class="andro_artist-img-content">
                                <div class="andro_artist-meta">
                                </div>
                                <ul class="andro_socials">
                                    <li> <a class="facebook" href="{{ $art->facebook_link }}" target="_blank"> <i
                                                class="fab fa-facebook-f"></i> </a> </li>
                                    <li> <a class="instagram" href="{{ $art->instagram_link }}" target="_blank"> <i
                                                class="fab fa-instagram"></i> </a> </li>
                                    <li> <a class="soundcloud" href="{{ $art->soundcloud_link }}" target="_blank"> <i
                                                class="fab fa-soundcloud"></i> </a> </li>
                                </ul>
                            </div>
                        </div>


                        <h5 class="andro_artist-name"> <a href="{{ route('front.artisteDetail', $art->id) }}">
                                {{ $art->nom }} {{ $art->prenom }}
                            </a> </h5>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
