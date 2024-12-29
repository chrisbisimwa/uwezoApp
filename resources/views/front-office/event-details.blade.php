@extends("front-office.layouts.app")

<div class="andro_subheader style-4 bg-cover bg-center bg-norepeat dark-overlay dark-overlay-2" style="background-image: url(font-office-assets/img/subheader-7.jpg)">
    <div class="container">
      <h1>Détails Evenement</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Evenement</a></li>
          <li class="active" aria-current="page"> &nbsp;/ Détails de l'évèvenements</li>
        </ol>
      </nav>

    </div>
  </div>
@section("content")
<div class="section andro_post-d style-3">
    <div class="container">

      <div class="andro_post-d-img">
        @if ($eventDetails->image_path)
            <img src="{{ asset('storage/uploads/' . $eventDetails->image_path) }}" alt="event">
        @else
        <img src="{{ asset('front-office-assets/img/blog/details/11.jpg') }}" alt="event">
        @endif
        
        <span class="andro_post-d-date">{{$eventDetails->created_at->format('d/m/Y')}}</span>
      </div>

      <div class="entry-content">

        <h2 class="h3 entry-title">{{$eventDetails->title}}</h2>
        <div class="andro_post-author">
          <div class="andro_post-author-thumb">
            @if ($eventDetails->author->profile_image)
            <img src="{{ asset('storage/uploads/' . $eventDetails->author->profile_image) }}" alt="post author">
                
            @else
            <img src="{{ asset('front-office-assets/img/no-image.jpg') }}" alt="post author">
            @endif
            
          </div>
          <div class="andro_post-author-body">
            <span>Publié par: </span>
            <b>{{$eventDetails->author->name}}</b>
          </div>
        </div>

        {!! $eventDetails->event_body_output() !!}
        


       


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

    

      @livewire('front-office.events.eventcomment', ['eventDetails' => $eventDetails])

    </div>
  </div>
  @endsection