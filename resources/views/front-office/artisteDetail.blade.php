@extends("front-office.layouts.app")


@section("content")

<div class="andro_subheader bg-cover bg-center bg-norepeat" style="background-image: url(front-office-assets/img/subheader-1.jpg)">

</div>

<div class="section md white-bg">
<div class="section md">
    <div class="container">



      <div class="row align-items-start align-items-md-center">
        <div class="col-lg-4 col-sm-4">
          <div class="andro_artist-d-img">
            <img class="andro_img-cover" src="front-office-assets/img/artists/md/afande.jpg" alt="artist">
            <div class="andro_artist-d-img-shadow">
              <img class="andro_img-cover" src="assets/img/artists/details/profile.jpg" alt="artist">
            </div>
          </div>
        </div>
        <div class="col-lg-7 offset-lg-1 col-sm-8">
          <div class="andro_artist-d-content">

            <div class="andro_artist-d-header">
              <div class="andro_artist-d-name">
                <span class="andro_artist-d-designation">{{$artisteDetail->nom}}</span>
                <h2 class="h3">

                
                  @foreach ($artisteDetail as $arti )
                    {{$arti->nom}} {{ $arti->prenom}}
                
                @endforeach </h2> 

              </div>
              <ul class="andro_socials">
                <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-soundcloud"></i> </a> </li>
              </ul>
            </div>

            <div class="andro_artist-d-meta">
              <div class="andro_artist-d-meta-item">
                <b>Date de naissance: </b>
                @foreach ($artisteDetail as $art )
                 
                
                <span>{{$ageArtist = date('d-m-Y', strtotime($art->datenaissance))}} <b class="fw-500 color-primary">( {{$ageArtist}} ans)</b> </span>
              </div>
              <div class="andro_artist-d-meta-item">
                <b>Albums: </b>
                <span>Kwa wale, Taux mubaya, Mauno, Tuta fika kwamiguu</span>
                @endforeach
              </div>
            </div>

            <div class="andro_artist-d-availability">
              <h6>Disponible sur: </h6>
              <a href="#" class="soundcloud"> <i class="fab fa-soundcloud"></i> Soundcloud </a>
              <a href="#" class="youtube"> <i class="fab fa-youtube"></i> Youtube </a>
            </div>

            <div class="andro_artist-d-upcoming">
              <div class="andro_artist-d-loc">
                <h6>Evenements à venir: </h6>
                <span> <i class="fal fa-map-marker"></i> Bukavu, Goma </span>
              </div>
              <div class="andro_artist-d-countdown">
                <div class="andro_countdown-timer" data-countdown="2023/01/01"><span>00 <i>days</i></span> <span>00 <i>hrs</i></span> <span>00 <i>mins</i></span> <span>00 <i>sec</i></span></div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="andro_artist-d-content-wrap">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <nav class="navbar">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#artistDescription"> <i class="far fa-chevron-right"></i> Description</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#artistTracks"> <i class="far fa-chevron-right"></i> Titres</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#artistEvents"> <i class="far fa-chevron-right"></i> Evenement</a>
                </li>

              </ul>
            </nav>
          </div>
          <div class="col-lg-7 offset-lg-1 col-md-8">
            <div class="andro_artist-d-content">

              <div class="andro_artist-d-section" id="artistDescription">
                <h4>Description</h4>
                <div class="andro_artist-d-section-content">
                  <p>
                    @foreach ($artisteDetail as $arti)
                    {{$arti->biography}}
                    @endforeach
                  </p>
                  <p>
                  En 2016, c’est l’année du grand succès dans toute l'Afrique de l'est avec la sortie de la chanson « Taux Mbaya ».  Afande ready continue sa carrière musicale en véhiculant des messages de paix, d’espoir et de résilience.
                  </p>
                </div>
              </div>

              <div class="andro_artist-d-section" id="artistTracks">
                <h4>Titres <a href="#">Tout afficher</a> </h4>
                <div class="andro_artist-d-section-content">

                  <div class="andro_track style-2 andro_audio-track">
                    <audio preload="metadata" src="assets/audio/1.mp3" title="Audio"></audio>
                    <div class="andro_track-img">
                      <img src="assets/img/tracks/md/1.jpg" alt="track">
                      <div class="andro_track-status">
                        <i class="fal fa-compact-disc"></i>
                      </div>
                    </div>
                    <div class="andro_track-content">

                      <h5>Maisha</h5>
                      <div class="andro_track-footer">
                        <div class="andro_track-data">
                          <span>By: Afande Ready</span>
                          <b>October 06, 2015</b>
                        </div>
                        <div class="andro_track-controls">
                          <a data-bs-toggle="tooltip" title="" href="#" class="play andro_music-player-play" data-bs-original-title="Play Track"> <i class="fas fa-play"></i> </a>
                          <a data-bs-toggle="tooltip" title="" class="download" href="#" data-bs-original-title="Download Track"> <i class="fal fa-download"></i> </a>
                        </div>
                      </div>

                    </div>
                  </div>

               
                    </div>
                  </div>

                </div>
              </div>

              <div class="andro_artist-d-section" id="artistEvents">
                <h4>Evenements <a href="#">Tout afficher</a></h4>
                <div class="andro_artist-d-section-content">

                  

                  <div class="andro_event">
                    <div class="andro_event-date">
                      <b>11</b>
                      <span>Nov 2024</span>
                    </div>
                    <div class="andro_event-content">
                      <div class="andro_event-body">
                        <h5>Festi Ras</h5>
                        <div class="andro_event-data">
                          <span>Organisateur: Eric </span>
                          <b> <i class="fal fa-map-marker"></i> Ibanda, Bukavu </b>
                        </div>
                      </div>
                      <div class="andro_event-controls">
                        <a href="#" class="button secondary disabled sm"> Fermé </a>
                        <a href="#" class="button outline sm"> Details </a>
                      </div>

                    </div>
                  </div>

                  

                </div>
              </div>

              

            

            </div>
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
              <span class="text-white">+(123)4567890</span>
              <span class="text-white">+(123)4567890</span>
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
              <span class="text-white">example@example.com</span>
              <span class="text-white">example@example.com</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="andro_infobox">
            <div class="andro_infobox-icon">
              <i class="flaticon-pin"></i>
            </div>
            <div class="andro_infobox-body">
              <h6 class="text-white">Location</h6>
              <span class="text-white">123 New Yourk E Block 12670,</span>
              <span class="text-white">Street 2101 USA</span>
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
