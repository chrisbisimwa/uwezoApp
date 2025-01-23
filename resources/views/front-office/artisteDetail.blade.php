@extends("front-office.layouts.app")

@section("content")
<div class="andro_subheader bg-cover bg-center bg-norepeat" style="background-image: url(../front-office-assets/img/subheader-7.jpg)">
 <div class="container">
 <h1>Les Artistes</h1>
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
    <li class="breadcrumb-item active" aria-current="page">Artistes</li>
  </ol>
</nav>

</div>
</div>

<div class="section md white-bg">
  <div class="section md">
    <div class="container">

      <div class="row align-items-start align-items-md-center">
        <div class="col-lg-4 col-sm-4">
          <div class="andro_artist-d-img">
            <img class="andro_img-cover" src="{{ asset('storage/uploads/' . $artisteDetail->photo) }}" alt="artist">
            <div class="andro_artist-d-img-shadow">
              <img class="andro_img-cover" src="{{ asset('storage/uploads/' . $artisteDetail->photo) }}" alt="artist">
            </div>
          </div>
        </div>
        <div class="col-lg-7 offset-lg-1 col-sm-8">
          <div class="andro_artist-d-content">

            <div class="andro_artist-d-header">
              <div class="andro_artist-d-name">
                <span class="andro_artist-d-designation"></span>
                <h2 class="h3">

                    {{$artisteDetail->nom}} {{ $artisteDetail->prenom}}
                
                 </h2> 

              </div>
              <ul class="andro_socials">
                <li> <a href="{{$artisteDetail->facebook_link}}" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </li>
                <li> <a href="{{$artisteDetail->twitter_link}}" target="_blank"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="{{$artisteDetail->instagram_link}}" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
                <li> <a href="{{$artisteDetail->soundcloud}}" target="_blank"> <i class="fab fa-soundcloud"></i> </a> </li>
              </ul>
            </div>

            <div class="andro_artist-d-meta">
              <div class="andro_artist-d-meta-item">
                <b>Date de naissance: </b>
                <span>{{$datenaissance = date('d-m-Y', strtotime($artisteDetail->datenaissance))}} <b class="fw-500 color-primary">( {{$age}} ans)</b> </span>
              </div>
              <div class="andro_artist-d-meta-item">
                <b>Oeuvres: </b>
                @foreach ($oeuvre as $oeuvreArtiste )
                <span><a href="{{$oeuvreArtiste->lieu_oeuvre}}" target="_blank">{{$oeuvreArtiste->nom}},</a></span>
                @endforeach
              </div>
            </div>

            <div class="andro_artist-d-availability">
              <h6>Disponible sur: </h6>
              <a href="{{$artisteDetail->soundcloud_link}}" class="soundcloud" target="_blank"> <i class="fab fa-spotify"></i> Spotify </a>
              <a href="{{$artisteDetail->youtube_link}}" class="youtube" target="_blank" target="_blank"> <i class="fab fa-youtube"></i> Youtube </a>
            </div>
            <div class="andro_artist-d-upcoming">
           
            
            
            </div>
          </div>
        </div>
      </div>

      <div class="andro_artist-d-content-wrap">
        
          
            <nav class="navbar">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#artistDescription"> <i class="far fa-chevron-right"></i> Description</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#artistTracks"> <i class="far fa-chevron-right"></i> Oeuvres</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#artistEvents"> <i class="far fa-chevron-right"></i> Evenement</a>
                </li>

              </ul>
            </nav>
          
          
            <div class="andro_artist-d-content">

              <div class="andro_artist-d-section" id="artistDescription">
                <h4>Description</h4>
                <div class="andro_artist-d-section-content">
                  <p>
                    
                    {{$artisteDetail->biography}}
                    
                  </p>
                  
                </div>
              </div>

              <div class="andro_artist-d-section" id="artistTracks">
                <h4>Oeuvres <a href="#">Afficher tout</a> </h4>

                
                <div class="andro_artist-d-section-content">
                @foreach ($oeuvre as $oeuvreArti)
                  <div class="andro_track style-2 andro_audio-track">
                    <audio preload="metadata" src="assets/audio/1.mp3" title="Audio"></audio>
                    <div class="andro_track-img">
                      <img src="assets/img/tracks/md/1.jpg" alt="track">
                      <div class="andro_track-status">
                        <i class="fal fa-compact-disc"></i>
                      </div>
                    </div>
                    <div class="andro_track-content">
                      <h5><a href="{{$oeuvreArti->lieu_oeuvre}}" target="_blank">{{$oeuvreArti->nom}}</a></h5>
                      <div class="andro_track-footer">
                        <div class="andro_track-data">
                          <span>{{$artisteDetail->nom}} {{ $artisteDetail->prenom}}</span>
                          <b>{{$dateOeuvreArti= date('d - m - Y', strtotime($oeuvreArti->date))}}</b>
                        </div>
                        
                      </div>

                    </div>
                  </div>
                  @endforeach
                </div>
                
              </div>

              <div class="andro_artist-d-section" id="artistEvents">
                <h4>Evenements <a href="#">Afficher tout</a></h4>
                @foreach ($event as $evt)
                <div class="andro_artist-d-section-content">
                  <div class="andro_event">
                    <div class="andro_event-date">
                      <b>{{$date_day= date('d', strtotime($evt->start_date))}}</b>
                      <span>{{$date_my= date('m-y', strtotime($evt->start_date))}}</span>
                    </div>
                    <div class="andro_event-content">
                      <div class="andro_event-body">
                        <h5>{{$evt->title}}</h5>
                        <div class="andro_event-data">
                          <span>Organisateur: {{$evt->organisateur}} </span>
                          <b> <i class="fal fa-map-marker"></i> {{$evt->location}} </b>
                        </div>
                      </div>
                      <div class="andro_event-controls">
                        <a href="#" class="button secondary disabled sm"> Fermé </a>
                        <a href="#" class="button outline sm"> Details </a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                
              </div>

              

            

            </div>
          
        
      </div>

    </div>
  </div>
  
    

    
  </div>
  <div class="section lg blue-bg" style="background-image: url(assets/img/texture-2.png)">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-4 col-md-6">
          <div class="andro_infobox">
            <div class="andro_infobox-icon">
              <i class="flaticon-call"></i>
            </div>
            <div class="andro_infobox-body">
              <h6 class="text-white">Phone</h6>
              <span class="text-white">+(243)998 564 037</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="andro_infobox">
            <div class="andro_infobox-icon">
              <i class="flaticon-mail"></i>
            </div>
            <div class="andro_infobox-body">
              <h6 class="text-white">Email</h6>
              <span class="text-white">info@sanaayetu.art</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="andro_infobox">
            <div class="andro_infobox-icon">
              <i class="flaticon-pin"></i>
            </div>
            <div class="andro_infobox-body">
              <h6 class="text-white">Localisation</h6>
              <span class="text-white">N°3, Av. FIZI, IBANDA,</span>
              <span class="text-white">Bukavu, RDC</span>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="andro_instagram d-none d-lg-block container mb-negative lg">
      <a href="#"> <i class="fab fa-instagram"></i> </a>
      <div class="row gx-0">
        <div class="col-lg-2 col-md-3 col-sm-6">
          <a href="#"><img src="assets/img/instagram/1.jpg" alt="instagram"></a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <a href="#"><img src="assets/img/instagram/2.jpg" alt="instagram"></a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <a href="#"><img src="assets/img/instagram/3.jpg" alt="instagram"></a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <a href="#"><img src="assets/img/instagram/4.jpg" alt="instagram"></a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <a href="#"><img src="assets/img/instagram/5.jpg" alt="instagram"></a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <a href="#"><img src="assets/img/instagram/6.jpg" alt="instagram"></a>
        </div>
      </div>
    </div>
  </div>
@endsection
