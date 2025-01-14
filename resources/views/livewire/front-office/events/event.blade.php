 <!-- Event Start -->
 <div class="section bg-cover"  style="background-image: url(../front-office-assets/img/banner-11.jpg)"> 
    <div class="container">
      <div class="row">
        <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
          @foreach ($events as $event)
          <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Récupérer la date depuis l'attribut data-date
                const eventDateTime = document.getElementById('countdown-timer').dataset.datetime;
    
                // Convertir la date en millisecondes pour JavaScript
                const eventDate = new Date(eventDateTime).getTime();
    
                // Démarrer le compte à rebours
                const countdownInterval = setInterval(function () {
                    const now = new Date().getTime();
                    const timeLeft = eventDate - now;
    
                    // Calcul des jours, heures, minutes, secondes
                    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
    
                    // Mettre à jour le contenu HTML
                    if (timeLeft > 0) {
                        document.getElementById('countdown-timer').innerHTML = `
                            ${days}d ${hours}h ${minutes}m ${seconds}s
                        `;
                    } else {
                        // Arrêter le timer et afficher "Terminé"
                        clearInterval(countdownInterval);
                        document.getElementById('countdown-timer').innerHTML = 'Événement terminé';
                    }
                }, 1000); // Mise à jour toutes les secondes
            });
        </script>
          <div class="swiper-wrapper" id="swiper-wrapper-11a118ccff3e1c5c" aria-live="polite"
              style="transform: translate3d(0px, 0px, 0px);">
          <div class="col-lg-6">
            <div class="section-title mb-0">
              <h3 class="text-white"> {{$event->title}} {{-- <span class="family-display color-primary">{{$event->title}} </span> --}} </h3>
              <p class="text-white">
                {{substr($event->description,0, 200)}}
              </p>
              <a href="#" class="button primary">Contacter l'organisateur</a>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
            <div class="andro_countdown-timer andro_event-countdown-timer style-3" data-countdown="{{ $event->end_date }}"></div>
            <div class="row">
              <div class="col-sm-6">
                <div class="andro_countdown-timer-data">
                  <h6 class="text-white  mb-0">Date & Heure: </h6>
                  <p class="mb-1 color-body-light-2">{{$event->start_date->format('j M Y')}} 
                    à {{$event->end_date->format('H:i')}}</p>
                </div>
              </div>
              <div class="col-sm-6 mt-3 mt-sm-0">
                <div class="andro_countdown-timer-data">
                  <h6 class="text-white mb-0">Lieu de l'évènement: </h6>
                  <p class="mb-1 color-body-light-2">{{$event->location}}</p>
                </div>
              </div>
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
