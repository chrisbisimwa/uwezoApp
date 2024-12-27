
  <!-- Artist details start -->
  <div class="section md">
    <div class="container">

      <div class="andro_artist-d-content-wrap">

        <div class="andro_artist-d-content">


          <div class="andro_artist-d-section" id="artistEvents">
            <h4>Events ({{$count}}) <a href="#">Voir plus</a></h4>
         
            <div class="andro_artist-d-section-content">
              @forelse ($events as $event)
              
              <div class="andro_event">
                <div class="andro_event-date">
                  <b>{{$event->start_date->format('d')}}</b>
                  <span>{{$event->start_date->format('M y')}}</span>
                </div>
                <div class="andro_event-content">
                  <div class="andro_event-body">
                     
                    <div class="andro_event-data">
                      <span> <a href="{{route('front.event-details', $event->title)}}"> {{$event->title}} </a> </span>
                      <b> <i class="fal fa-map-marker"></i> {{$event->location}} </b>
                    </div>
                    <div class="andro_event">
                    </div>
                    <div class="andro_event">
                      <h6>{!! Str::limit($event->description, 60,'')!!}</h6> 
                    </div>
                  </div>
                  <div class="andro_event-controls">
                    <a href="#" class="button primary sm"> Tickets </a>
                    <a href="#" class="button outline sm"> Details </a>
                  </div>
                </div>
              </div>
              @empty
              <span>
                <h2>Aucun évenement trouvé !</h2>
            </span>
              @endforelse

              

            </div>
          </div>
          {{ $events->links('vendor.livewire.frontend') }}

          {{-- <div class="andro_artist-d-section" id="similarArtists">
            <h4>Similar Artists</h4>
            <div class="andro_artist-d-section-content">
              <div class="row">
                <div class="col-lg-4">
                  <div class="andro_artist style-4">
                    <div class="andro_artist-img">
                      <img class="andro_img-cover" src="../assets/img/artists/md/9.jpg" alt="artist">
                    </div>
                    <div class="justify-content-end andro_artist-content">
                      <h5 class="andro_artist-name family-display"> <a href="artist-details.html">Stacey Gold</a> </h5>
                      <p class="m-0">Drum Artist</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="andro_artist style-4">
                    <div class="andro_artist-img">
                      <img class="andro_img-cover" src="../assets/img/artists/md/10.jpg" alt="artist">
                    </div>
                    <div class="justify-content-end andro_artist-content">
                      <h5 class="andro_artist-name family-display"> <a href="artist-details.html">Stacey Gold</a> </h5>
                      <p class="m-0">Drum Artist</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="andro_artist style-4">
                    <div class="andro_artist-img">
                      <img class="andro_img-cover" src="../assets/img/artists/md/11.jpg" alt="artist">
                    </div>
                    <div class="justify-content-end andro_artist-content">
                      <h5 class="andro_artist-name family-display"> <a href="artist-details.html">Stacey Gold</a> </h5>
                      <p class="m-0">Drum Artist</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
  <!-- Artist details end -->

