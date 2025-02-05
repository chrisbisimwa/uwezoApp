@extends("front-office.layouts.app")
<div class="andro_subheader style-4 bg-cover bg-center bg-norepeat dark-overlay dark-overlay-2" style="background-image: url(front-office-assets/img/subheader-1.jpg)">
  <div class="container">
    <h1>Détails Evenement</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('front.evenements')}}">Evenement</a></li>
        <li class="active" aria-current="page"> &nbsp;/ Détails de l'évèvenements</li>
      </ol>
    </nav>

  </div>
</div>
@section("content")
   <!-- Events details start -->
 <div class="section andro_post-d style-3">
  <div class="container">
    <div class="row align-items-start align-items-md-center">
      <div class="col-lg-4 col-sm-4">
        <div class="andro_artist-d-img">
          <img class="andro_img-cover"  src="{{ asset('storage/uploads/'.$eventDetails->image_path) }} " width="100" height="60" alt="image event">
        </div>
      </div>
      <div class="col-lg-7 offset-lg-1 col-sm-8">
        <div class="andro_artist-d-content">

          <div class="andro_artist-d-header">
            <div class="andro_artist-d-name">
              {{-- <span class="andro_artist-d-designation">Categorie d'evenement</span> --}}
              <h2 class="h3">{{$eventDetails->title}}</h2>
            </div>
            <ul class="andro_socials">
              <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
              <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
              <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
              <li> <a href="#"> <i class="fab fa-soundcloud"></i> </a> </li>
            </ul>
          </div>

          <div class="andro_artist-d-meta">
            @if ($eventDetails->organizer == null)
            <div class="andro_artist-d-meta-item">
              <b>Organisateur: </b>
              <span> <b class="fw-500 color-primary">{{ $artists->nom }} {{ $artists->prenom }}</b> </span>
            </div>
            <div class="andro_artist-d-meta-item">
              <b>Contact </b>
              <span>{{$artists->phone}}</span>
            </div>
            @else
            <div class="andro_artist-d-meta-item">
              <b>Organisateur: </b>
              <span> <b class="fw-500 color-primary">{{$eventDetails->organizer}}</b> </span>
            </div>
            <div class="andro_artist-d-meta-item">
              <b>Contact </b>
              <span>{{$eventDetails->organizer_phone}}</span>
            </div>
            @endif
          </div>
          <div class="andro_artist-d-upcoming">
            <div class="andro_artist-d-loc">
              <h6>Evenement à venir: </h6>
              <span> <i class="fal fa-map-marker"></i> {{$eventDetails->location}}</span>
            </div>
            <div class="andro_artist-d-countdown">
              <div class="andro_countdown-timer" data-countdown="{{$eventDetails->end_date}}"></div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8">
        <div class="andro_artist-d-content-wrap">

          <div class="andro_artist-d-content">

            <div class="andro_artist-d-section" id="artistDescription">
              <h4>Description</h4>
              <div class="andro_artist-d-section-content">
                <p>
                 {{ $eventDetails->description }}
                </p>
                
              </div>
            </div>

            
      <div class="andro_post-d-footer">

        @if ($eventDetails->categories)
        <div class="andro_post-d-tags">
          <b>Tags: </b>
          @foreach ($eventDetails->categories->pluck('name')->toArray() as $item)
          <a href="#">{{$item}}</a>@if (!$loop->last), @endif
              
          @endforeach
          
        </div>

        @endif
        
        <ul class="andro_socials">
          
          <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
          
        </ul>
      </div>

      @livewire('front-office.events.event-comment2', ['eventDetails' => $eventDetails])

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="andro_sidebar andro_artist-d-content-wrap">

          <div class="widget widget-albums">
            {{-- <h5 class="widget-title">Evenements recents <a href="#">Voir plus</a></h5> --}}
            <div class="andro_artist-d-section">
              <h4>Evenements recents  </h4>
              <div class="andro_artist-d-section-content">
                @forelse ($events as $event)
                <div class="andro_event">
                  <div class="andro_album-img">
                    <a href="{{route('front.event-details', $event->title)}}"><img src="{{ asset('storage/uploads/'.$event->image_path) }}"width="80" height="60" alt="image event"></a>
                  </div>
                  <div class="andro_event-content">
                    <div class="andro_event-body">
                       <div class="andro_event-data">
                        <span> <a href="{{route('front.event-details', $event->title)}}"> {{$event->title}} </a> </span>
                        <b> <i class="fal fa-map-marker"></i> {{$event->location}} </b>
                          Du {{$event->start_date->format('d M Y')}} Au {{$event->end_date->format('M y')}}  
                      </div>
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

          <div class="widget widget-recent-posts">
            <h5 class="widget-title">Recent News</h5>
            @forelse ( $blogPosts as $blogPost)
            <div class="andro_recent-post">
               {{$blogPost->created_at->format('d/m/Y')}}
              <a href="{{ route('front.blog-post', $blogPost->slug) }}" class="andro_recent-post-title">{{$blogPost->title}}</a>
            </div>
            @empty
            <span>
              <h2>Aucun article trouvé !</h2>
          </span>
            @endforelse
            
          </div>

        </div>
      </div>
    </div>

  </div>
</div>
<!-- events details end -->
@endsection

