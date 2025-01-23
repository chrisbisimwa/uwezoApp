@extends("front-office.layouts.app")

@section("content")
<div class="andro_subheader bg-cover bg-center bg-norepeat" style="background-image: url(front-office-assets/img/subheader-7.jpg)">
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
          <h3> A propos <span class="family-display color-primary">de Sanaa Yetu</span> </h3>
          <p>
            Lorem ipsum dolor sit amet concateur non tropp sit namo, all
            bravo pensare, chicco milo naturoel spresso concateur non a
            roel spresso concateur non value maro troppo Lorem ipsum d
            troppo Lorem ipsum dolorel spres strata. es strata.
          </p>
          
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
        
        <div class="col-lg-6">
        <div class="position-relative h-100">
          <img class="andro_img-cover" src="../front-office-assets/img/videos/10.jpg" alt="Video">
          <a href="https://www.youtube.com/watch?v=u0REqNzqoJk" class="center-absolute andro_video-icon pulse andro_video-popup"> <i class="fas fa-play"></i> </a>
        </div>
      </div>
        
      </div>

    </div>
  </div>
</div>

<div class="section bg-cover" style="background-image: url(../front-office-assets/img/banner-5.jpg)">
  <div class="container text-center">

    <div class="section-title text-center">
      <h3 class="text-white family-display fw-400">Aimez-vous l'art</h3>
      <p class="text-white">Tout savoir sur l'actualité des artistes, l'application mobile vous rapproche de la communauté</p>
      <p class="text-white"> 
      <a href="#" class="button primary icon-after">Télécharger maintenant<i class="fal fa-arrow-right"></i> </a>
      </p>
    </div>
    

  </div>
</div>




@endsection