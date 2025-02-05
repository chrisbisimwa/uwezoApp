
  <!-- Event details start -->
  <div class="section md">
    <div class="row">
      <div class="col-lg-8">
          <div class="andro_sidebar andro_artist-d-content-wrap">
  
            <div class="widget widget-albums">
              {{-- <h5 class="widget-title">Evenements recents <a href="#">Voir plus</a></h5> --}}
              <div class="andro_artist-d-section">
                <h4>Events ({{$count}}) <a href="#">Voir plus</a></h4>
                <div class="andro_artist-d-section-content">
                  @forelse ($events as $event)
                 
                  <div class="andro_event">
                    <div class="andro_album-img" style="margin-right: 10px;">
                      <img src="{{ asset('storage/uploads/'.$event->image_path) }} " width="100" height="60" alt="album">
                    </div>
                    <div class="andro_event-content">
                      <div class="andro_event-body">
                         <div class="andro_event-data">
                          <span></span>
                          <span> <a href="{{route('front.event-details', $event->title)}}"> <b>{{$event->title}}</b> </a> </span>
                          <b> <i class="fal fa-map-marker"></i> {{$event->location}} </b>
                            Du {{$event->start_date->format('d M Y')}} Au {{$event->end_date->format('M y')}}  
                        </div>
                      </div>
                      <div class="andro_event-controls">
                        <a href="{{route('front.event-details', $event->title)}}" class="button outline sm"> Details </a>
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
              
            </div>
            {{ $events->links('vendor.livewire.frontend') }}
          </div>
      </div>
      <div class="col-lg-4">
        <div class="andro_sidebar andro_artist-d-content-wrap">

          <div class="widget widget-albums">
           <h5 class="widget-title">Top artiste </h5> 
            <div class="andro_artist-d-section">
              <div class="andro_artist-d-section-content">
                @forelse ($topartist as $topartist) 
                <div class="andro_event">
                  <div class="andro_album-img" style="margin-right: 6px;">
                    <img src="{{\Storage::url('uploads/'.$topartist->photo)}}" alt="album" style="width: 120px;">
                  </div>
                  <div class="andro_event-content">
                    <div class="andro_event-body">
                       <div class="andro_event-data">
                        <span> <a href="{{route('front.artisteDetail', $topartist->slug)}}"> {{$topartist->nom}} {{$topartist->prenom}} </a> </span>
                        <span> </span>
                         
                      </div>
                    </div>
                  </div>
                </div>
                @empty
                <span>
                  <h6>Aucun artist trouvé !</h6>
              </span>
                @endforelse 
              </div>
            </div>
            
          </div>
          {{-- widget mois d'évènement --}}
          {{-- <div class="widget widget-recent-posts">
            <h5 class="widget-title">Periode de l'évenement</h5>
            @forelse ( $mouthYearEvent as $mouthYear )
            <div class="andro_recent-post">
              <a href="#" >{{DateTime::createFromFormat('!m', $mouthYear)->Format('F')}}</a>
              
            </div>
            @empty
            <span>
              <h6>Aucune catégorie trouvée !</h6>
          </span>
            @endforelse
          </div> --}}
          {{-- fin widget mois de l'evenement --}}
          {{-- widget catégories d'évènement --}}
         {{--  <div class="widget widget-recent-posts">
            <h5 class="widget-title">Catégories d'évènement</h5>
            @forelse ( $eventcats as $eventcat )
            <div class="andro_recent-post">
              <a href="#" >{{$eventcat->name}}</a>
              
            </div>
            @empty
            <span>
              <h6>Aucune catégorie trouvée !</h6>
          </span>
            @endforelse
          </div> --}}
          {{-- fin widget catégories d'évènement --}}
        </div>
      </div>
    </div>
  </div>
  <!-- Vent details end -->

