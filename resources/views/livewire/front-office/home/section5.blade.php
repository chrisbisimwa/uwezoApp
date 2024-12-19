<div class="section p-0 white-bg">
    <div class="row gx-0">

        <div class="col-lg-6">
            <div class="gallery-spacing container">
                <h3 class="h1">À la rencontre des<span class="fw-400 color-primary">Talents</span> africain</h3>
                <p class="mb-0">Découvrez les artistes récemment ajoutés sur UWEZO AFRIKA, une communauté vibrante et
                    dynamique où chaque talent raconte une histoire unique. Ces créateurs, issus de différents horizons,
                    incarnent la richesse et la diversité de l’art africain. </p>
                <a href="#" class="button primary">Tous les artistes</a>
            </div>

        </div>
        @forelse ($artists as $artist)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{ asset('front-office-assets/img/gallery/1.jpg') }}" class="andro_img-popup andro_gallery">
                    <img class="andro_img-cover" src="{{ asset('front-office-assets/img/gallery/1.jpg') }}"
                        alt="gallery">
                    <div class="andro_gallery-content">
                        <i class="far fa-search"></i>
                        <h6 class="h3">{{ $artist->nom }} {{ $artist->prenom }}</h6>

                        <p>
                            @foreach ($artist->categories->pluck('name')->toArray() as $item)
                                {{ $item }}@if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </p>


                    </div>
                </a>
            </div>

            @empty
            <div class="col-lg-6 col-md-8">
                <h3>Aucun artiste disponible pour le moment !</h3>
            </div>
            

            @endforelse
            
            
            
            
            

        </div>
    </div>
