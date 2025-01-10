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
  
    <div class="container">

      <div class="andro_isotope-filter-nav">
      <a href="#" class="andro_isotope-trigger active" >Tous les artistes</a>
        @foreach ($categorie as $cat )
        
        <a href="#" class="andro_isotope-trigger active" >{{$cat->name}}</a>
        
        @endforeach
      </div>

      <div class="row andro_isotope-filter" style="position: relative; height: 2981.42px;">
      @foreach ($artiste as $art )
        <div class="col-lg-3 col-md-4 col-sm-6 andro_isotope-item d1" style="position: absolute; left: 0px; top: 0px;">
          <div class="andro_artist style-2">
          
            <div class="andro_artist-img">  
            <img src="{{asset('storage/uploads/'.$art->photo)}}" alt="artist">
              <div class="andro_artist-img-content">
                <div class="andro_artist-meta">  
                </div>
                <ul class="andro_socials">
                  <li> <a class="facebook" href="{{$art->facebook_link}}" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </li>
                  <li> <a class="instagram" href="{{$art->instagram_link}}" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
                  <li> <a class="soundcloud" href="{{$art->soundcloud_link}}" target="_blank"> <i class="fab fa-soundcloud"></i> </a> </li>
                </ul>
              </div>
            </div>

            
            <h5 class="andro_artist-name"> <a href="{{route('front.artisteDetail', $art->id)}}">
            {{ $art->nom }} {{ $art->prenom }}
            </a> </h5>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
  <div class="section light-bg __web-inspector-hide-shortcut__">
    <div class="container">

      <div class="section-title text-center">
        <h3>Retrouvez toute les meilleures musiques </h3>
        <p class="mb-0">La musique et les playlists permettront à vos fans de profiter de l'écoute</p>
      </div>

      <div class="andro_lineup">

      

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
