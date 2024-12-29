@extends("front-office.layouts.app")

@section("content")
<div class="andro_subheader bg-cover bg-center bg-norepeat" style="background-image: url(front-office-assets/img/subheader-1.jpg)">
  <div class="container">

    <h1>A propos</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">A propos</li>
      </ol>
    </nav>

  </div>
</div>





<div class="section">
  <div class="container">
    <div class="row">

      <div class="col-lg-6">
        <div class="section-title mb-0">
          <h3> A new kind of American <span class="family-display color-primary">Saint Band</span> </h3>
          <p>
            Lorem ipsum dolor sit amet concateur non tropp sit namo, all
            bravo pensare, chicco milo naturoel spresso concateur non a
            roel spresso concateur non value maro troppo Lorem ipsum d
            troppo Lorem ipsum dolorel spres strata. es strata.
          </p>
          <img src="{{ asset('front-office-assets/img/sig.png') }}" alt="Signature">
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
        <div class="andro_countdown-timer andro_event-countdown-timer dark style-3" data-countdown="2023/01/01"><span>00 <i>days</i></span> <span>00 <i>hrs</i></span> <span>00 <i>mins</i></span> <span>00 <i>sec</i></span></div>
        <div class="row">
          <div class="col-sm-6">
            <div class="andro_countdown-timer-data">
              <h6 class="text-uppercase mb-0">Date &amp; Time: </h6>
              <p class="mb-1">Sunday to Wednesday</p>
              <p class="mb-1">July 23 to 26 2022</p>
            </div>
          </div>
          <div class="col-sm-6 mt-3 mt-sm-0">
            <div class="andro_countdown-timer-data">
              <h6 class="text-uppercase mb-0">Location: </h6>
              <p class="mb-1">Fort Mason Center</p>
              <p class="mb-1">San Fancisco, CA</p>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <a href="#" class="button secondary">Buy Tickets Now</a>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="section md pt-0">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-6">
        <div class="andro_counter-wrap">
          <b data-from="0" data-to="1244" class="andro_counter">1244</b>
          <h6>International Awards</h6>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="andro_counter-wrap">
          <b data-from="0" data-to="1275" class="andro_counter">1275</b>
          <h6>Event Performances</h6>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="andro_counter-wrap">
          <b data-from="0" data-to="180" class="andro_counter">180</b>
          <h6>Music Albums</h6>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="andro_counter-wrap">
          <b data-from="0" data-to="2100" class="andro_counter">2100</b>
          <h6>Show Festivals</h6>
        </div>
      </div>

    </div>
  </div>
</div><div class="section md pt-0">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-6">
        <div class="andro_counter-wrap">
          <b data-from="0" data-to="1244" class="andro_counter">1244</b>
          <h6>International Awards</h6>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="andro_counter-wrap">
          <b data-from="0" data-to="1275" class="andro_counter">1275</b>
          <h6>Event Performances</h6>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="andro_counter-wrap">
          <b data-from="0" data-to="180" class="andro_counter">180</b>
          <h6>Music Albums</h6>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="andro_counter-wrap">
          <b data-from="0" data-to="2100" class="andro_counter">2100</b>
          <h6>Show Festivals</h6>
        </div>
      </div>

    </div>
  </div>
</div>



<div class="section bg-cover" style="background-image: url(../front-office-assets/img/banner-12.jpg)">
  <div class="container text-center">

    <div class="section-title text-center">
      <h3 class="text-white family-display fw-400">If You Like My Band</h3>
      <p class="text-white">Coming the Musical Entertainment Festival</p>
    </div>
    <a href="#" class="button secondary">Start Booking</a>

  </div>
</div>



<div class="section md">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6">

        <div class="section-title">
          <h3 class="family-display fw-400">My Favorite Collection</h3>
        </div>

        <div class="andro_track-list style-4">

          <div class="andro_track-list-body">

            <div class="andro_track andro_audio-track andro_track-list-item">
              <audio preload="metadata" src="../front-office-assets/audio/1.mp3" title="Audio"></audio>
              <div class="andro_track-controls">
                <a href="#" class="play andro_music-player-play"> <i class="fas fa-play"></i> </a>
                <div class="andro_track-name">
                  <span>Listen to Duke Dumont</span>
                  <span class="color-primary">By James Duke</span>
                </div>
              </div>
              <div class="andro_music-player-timing andro_track-list-item-timing">
                <span class="andro_music-player-duration andro_track-list-item-duration">01:44</span>
                <span class="andro_music-player-time andro_track-list-item-time">00:00</span>
              </div>
            </div>

            <div class="andro_track andro_audio-track andro_track-list-item">
              <audio preload="metadata" src="../front-office-assets/audio/1.mp3" title="Audio"></audio>
              <div class="andro_track-controls">
                <a href="#" class="play andro_music-player-play"> <i class="fas fa-play"></i> </a>
                <div class="andro_track-name">
                  <span>Hear Me Out</span>
                  <span class="color-primary">By James Duke</span>
                </div>
              </div>
              <div class="andro_music-player-timing andro_track-list-item-timing">
                <span class="andro_music-player-duration andro_track-list-item-duration">01:44</span>
                <span class="andro_music-player-time andro_track-list-item-time">00:00</span>
              </div>
            </div>

            <div class="andro_track andro_audio-track andro_track-list-item">
              <audio preload="metadata" src="../front-office-assets/audio/1.mp3" title="Audio"></audio>
              <div class="andro_track-controls">
                <a href="#" class="play andro_music-player-play"> <i class="fas fa-play"></i> </a>
                <div class="andro_track-name">
                  <span>Just Dance Tonight</span>
                  <span class="color-primary">By James Duke</span>
                </div>
              </div>
              <div class="andro_music-player-timing andro_track-list-item-timing">
                <span class="andro_music-player-duration andro_track-list-item-duration">01:44</span>
                <span class="andro_music-player-time andro_track-list-item-time">00:00</span>
              </div>
            </div>

            <div class="andro_track andro_audio-track andro_track-list-item">
              <audio preload="metadata" src="../front-office-assets/audio/1.mp3" title="Audio"></audio>
              <div class="andro_track-controls">
                <a href="#" class="play andro_music-player-play"> <i class="fas fa-play"></i> </a>
                <div class="andro_track-name">
                  <span>Frank X</span>
                  <span class="color-primary">By James Duke</span>
                </div>
              </div>
              <div class="andro_music-player-timing andro_track-list-item-timing">
                <span class="andro_music-player-duration andro_track-list-item-duration">01:44</span>
                <span class="andro_music-player-time andro_track-list-item-time">00:00</span>
              </div>
            </div>

            <div class="andro_track andro_audio-track andro_track-list-item">
              <audio preload="metadata" src="../front-office-assets/audio/1.mp3" title="Audio"></audio>
              <div class="andro_track-controls">
                <a href="#" class="play andro_music-player-play"> <i class="fas fa-play"></i> </a>
                <div class="andro_track-name">
                  <span>Juicy Crowns</span>
                  <span class="color-primary">By James Duke</span>
                </div>
              </div>
              <div class="andro_music-player-timing andro_track-list-item-timing">
                <span class="andro_music-player-duration andro_track-list-item-duration">01:44</span>
                <span class="andro_music-player-time andro_track-list-item-time">00:00</span>
              </div>
            </div>

          </div>

        </div>

      </div>

      <div class="col-lg-6">
        <div class="andro_album style-4">
          <div class="andro_album-img">
            <img class="andro_img-cover" src="../front-office-assets/img/albums/16.jpg" alt="album">
          </div>
          <div class="andro_album-content">

            <span class="andro_album-type spotify"> <i class="fab fa-spotify"></i> Spotify </span>

            <div class="andro_album-header">
              <span class="andro_album-artist">James Duke</span>
              <h5 class="andro_album-name"> <a href="album-details.html">Cowly Crown</a> </h5>
            </div>

            <div class="andro_album-footer">
              <a class="andro_album-date" href="album-details.html"> March 28, 2022 </a>
              <a href="#" class="andro_album-atc"> <i class="far fa-shopping-basket"></i> Add To Basket</a>
            </div>

            <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="center-absolute andro_video-icon pulse andro_video-popup"> <i class="fas fa-play"></i> </a>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="position-relative h-100">
          <img class="andro_img-cover" src="../front-office-assets/img/videos/10.jpg" alt="Video">
          <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="center-absolute andro_video-icon pulse andro_video-popup"> <i class="fas fa-play"></i> </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="andro_testimonial-body">

          <h3 class="andro_testimonial-title family-display fw-400"> Testimonials </h3>

          <div class="swiper-container single-slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" style="cursor: grab;">
            <div class="swiper-wrapper" id="swiper-wrapper-69e940ddfa69ed18" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">

              <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 2" style="width: 393px;">
                <p>Lorem ipsum dolor sit amet conlim
                  bravo pensare, chicco milo natuas
                  roel spresso concateur non.
                </p>
                <h6 class="h5 andro_testimonial-author">Brain Walker</h6>
                <p class="andro_testimonial-designation">Artist, Singer</p>
              </div>

              <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2" style="width: 393px;">
                <p>Lorem ipsum dolor sit amet conlim
                  bravo pensare, chicco milo natuas
                  roel spresso concateur non.
                </p>
                <h6 class="h5 andro_testimonial-author">Josh Flaning</h6>
                <p class="andro_testimonial-designation">Artist, Drummer</p>
              </div>

            </div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
      </div>
    </div>
  </div>
</div>





@endsection