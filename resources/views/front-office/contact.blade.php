@extends("front-office.layouts.app")

@section("content")
<div class="andro_subheader bg-cover bg-center bg-norepeat" style="background-image: url(front-office-assets/img/subheader-1.jpg)">
    <div class="container">

      <h1>Nous contacter</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nous contacter</li>
        </ol>
      </nav>

    </div>
  </div>



  <div class="section pb-0">
    <div class="container-fluid">
      <div class="andro_map">
        <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Uwezo%20Afrika%20Initiative%20Bukavu+()&amp;t=p&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://maps-generator.com/fr'>ajouter plan</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=756b12dacbcad06d86b7df01c982113f2182743d'></script>
      </div>
    </div>
  </div>



  <div class="section mt-negative pt-0">
    <div class="container-fluid">
      <div class="infobox-section">
        <div class="row justify-content-center">

          <div class="col-lg-4 col-md-6">
            <div class="andro_infobox style-3">
              <div class="andro_infobox-icon">
                <i class="flaticon-call"></i>
              </div>
              <div class="andro_infobox-body">
                <h6 class="color-primary">Téléphone</h6>
                <span class="text-white">+(243)971 954 135</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="andro_infobox style-3">
              <div class="andro_infobox-icon">
                <i class="flaticon-mail"></i>
              </div>
              <div class="andro_infobox-body">
                <h6 class="color-primary">Email</h6>
                <span class="text-white">namwezidouce@yahoo.fr</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="andro_infobox style-3">
              <div class="andro_infobox-icon">
                <i class="flaticon-pin"></i>
              </div>
              <div class="andro_infobox-body">
                <h6 class="color-primary">Location</h6>
                <span class="text-white">N°243, Av. FIZI, IBANDA,</span>
                <span class="text-white">Bukavu, RDC</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>



  <div class="section pt-0">
    <div class="container">

      <div class="section-title text-center">
        <h3>Avez-vous des questions ?</h3>
      </div>

      <form method="post">
        <div class="row">
          <div class="col-lg-4 mb-4">
            <input type="text" class="form-control" name="fname" placeholder="Your Name" value="">
          </div>
          <div class="col-lg-4 mb-4">
            <input type="email" class="form-control" name="email" placeholder="Your Email" value="">
          </div>
          <div class="col-lg-4 mb-4">
            <input type="text" class="form-control" name="phone" placeholder="Your Phone Number" value="">
          </div>
          <div class="col-lg-12 mb-4">
            <textarea name="message" class="form-control" placeholder="Your Message" cols="80"></textarea>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="button primary" name="button">Send Message</button>
        </div>
      </form>

    </div>
  </div>
@endsection