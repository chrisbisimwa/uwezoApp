 <!-- Event Start -->
 <div class="section bg-cover"  style="background-image: url(../front-office-assets/img/banner-11.jpg)"> 
    <div class="container">
      <div class="row">
        <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
          @foreach ($events as $event)
          
          <div class="swiper-wrapper" id="swiper-wrapper-11a118ccff3e1c5c" aria-live="polite"
              style="transform: translate3d(0px, 0px, 0px);">
          <div class="col-lg-6">
            <div class="section-title mb-0">
              <h3 class="text-white"> {{$event->title}}  </h3>
              <p class="text-white">
                {{substr($event->description,0, 200)}}
              </p>
              @if ($event->organizer==='NULL')
              @foreach ($artists as $artist)
              <p>
                {{$artist->nom}} {{$artist->prenom}} 
              </p>
              @endforeach
              @else
              <p>
                {{$event->organizer}} 
              </p>
              @endif
              
              <a href="{{route('front.event-details', $event->title)}}" class="button primary">En savoir plus</a>
            </div>
          </div>
          @if ($event->isUpComing())
          {{-- <div id="countdown">
            <p>L'événement commence dans :</p>
            <div id="timer"></div>
        </div> --}}
          <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0" id="countdown">
            <div class="andro_countdown-timer andro_event-countdown-timer style-3" data-countdown="{{ $event->start_date}}"></div>
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
          <script>
            const timerDisplay = document.getElementById('timer');
            const countdown = document.getElementById('countdown');
           
            // Utilisation de la méthode du modèle pour obtenir la date au format ISO 8601
            let endTime = new Date("{{ $event->getStartDateForJs() }}").getTime();
            function updateCountdown() {
                let now = new Date().getTime();
                let distance = endTime - now;
                

                if (distance < 0) {
                    clearInterval(timerInterval);
                    countdown.innerHTML = "<p>L'événement est en cours !</p>";
                    return;
                }

                let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                timerDisplay.innerHTML = `${days}j ${hours}h ${minutes}m ${seconds}s`;
            }

            updateCountdown();
            let timerInterval = setInterval(updateCountdown, 1000);
        </script>
        
         @elseif ($event->isOngoing())
         <p>L'événement est en cours !</p>
     @else
         <p>L'événement est terminé.</p>
     @endif
          
        </div>
          @endforeach
        </div>
       
      </div>
    </div>
  </div>
  <!-- Event End -->