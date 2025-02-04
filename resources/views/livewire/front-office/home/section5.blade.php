<div class="section p-0 white-bg">
    <div class="row gx-0">

        <div class="col-lg-6">
            <div class="gallery-spacing container">
                <h3 class="h1">À la rencontre des<span class="fw-400 color-primary">Talents</span> congolais</h3>
                <p class="mb-0">Découvrez les artistes récemment ajoutés sur SANAA YETU, une communauté vibrante et
                    dynamique où chaque talent raconte une histoire unique. Ces créateurs, issus de différents horizons,
                    incarnent la richesse et la diversité de l’art congolais. </p>
                <a href="{{route('front.artistes')}}" class="button primary">Tous les artistes</a>
            </div>

        </div>
        @forelse ($artists as $artist)
        <div class="col-lg-3 col-md-4 col-sm-6">
            @if ($artist->photo)
            <a href="{{\Storage::url('uploads/'.$artist->photo)}}" class="andro_img-popup andro_gallery">

                <img class="andro_img-cover" src="{{\Storage::url('uploads/'.$artist->photo)}}"
                    alt="gallery">


                <div class="andro_gallery-content">
                    <i class="far fa-search"></i>
                    <h6 class="h3" style="cursor: pointer;" wire:click="goToArtist()">{{ $artist->nom }} {{ $artist->prenom }}</h6>

                    <p>
                        {{ $artist->category->name }}

                    </p>


                </div>
            </a>

            @else
            <a href="{{ asset('front-office-assets/img/gallery/1.jpg') }}" class="andro_img-popup andro_gallery">

                <img class="andro_img-cover" src="{{ asset('front-office-assets/img/gallery/1.jpg') }}"
                    alt="gallery">


                <div class="andro_gallery-content">
                    <i class="far fa-search"></i>
                    <h6 class="h3">{{ $artist->nom }} {{ $artist->prenom }}</h6>

                    <p>
                        {{ $artist->category->name }}

                    </p>


                </div>
            </a>
            @endif



        </div>

        @empty
        <div class="col-lg-6 col-md-8">
            <h5>Aucun artiste disponible pour le moment !</h5>
        </div>


        @endforelse






    </div>
</div>