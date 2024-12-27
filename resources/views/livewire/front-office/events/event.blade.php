 <!-- Event Start -->
 <div class="section bg-cover" style="background-image: url(front-office-assets/img/banner-11.jpg)">
    <div class="container">
      <div class="row">
        <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
          @foreach ($events as $event)
          <div class="swiper-wrapper" id="swiper-wrapper-11a118ccff3e1c5c" aria-live="polite"
              style="transform: translate3d(0px, 0px, 0px);">
          <div class="col-lg-6">
            <div class="section-title mb-0">
              <h3 class="text-white"> {{$event->title}} {{-- <span class="family-display color-primary">{{$event->title}} </span> --}} </h3>
              <p class="text-white">
                {{$event->description}}
              </p>
              <img src="front-office-assets/img/sig2.png" alt="Signature">
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
            <div class="andro_countdown-timer andro_event-countdown-timer style-3" data-countdown="2024/12/24"></div>
            <div class="row">
              <div class="col-sm-6">
                <div class="andro_countdown-timer-data">
                  <h6 class="text-white text-uppercase mb-0">Date & Heure: </h6>
                  <p class="mb-1 color-body-light-2">{{$event->start_date->format('D')}} au {{$event->end_date->format('D')}}</p>
                  <p class="mb-1 color-body-light-2">Du {{$event->start_date->format('j M Y')}} 
                    au {{$event->end_date->format('j M Y')}}</p>
                </div>
              </div>
              <div class="col-sm-6 mt-3 mt-sm-0">
                <div class="andro_countdown-timer-data">
                  <h6 class="text-white text-uppercase mb-0">Lieu de l'évènement: </h6>
                  <p class="mb-1 color-body-light-2">{{$event->location}}</p>
                </div>
              </div>
            </div>
            <div class="mt-4">
              <a href="#" class="button primary">Contacter l'organisateur</a>
            </div>
          </div>
        </div>
          @endforeach
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
       
        {{-- <div class="col-lg-1">
          <div class="vertical-slider-controls">
              <div class="vertical-slider-controls-inner">
                  <span> <b class="color-primary vertical-slider-current">1</b> / <em
                          class="vertical-slider-count">3</em> </span>
                  <i class="fal fa-arrow-left swiper-button-prev swiper-button-disabled" tabindex="-1"
                      role="button" aria-label="Previous slide"
                      aria-controls="swiper-wrapper-11a118ccff3e1c5c" aria-disabled="true"></i>
                  <i class="fal fa-arrow-right swiper-button-next" tabindex="0" role="button"
                      aria-label="Next slide" aria-controls="swiper-wrapper-11a118ccff3e1c5c"
                      aria-disabled="false"></i>
              </div>
          </div>
      </div> --}}
      </div>
    </div>
  </div>
  <!-- Event End -->
