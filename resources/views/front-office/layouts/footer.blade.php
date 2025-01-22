  <!-- Footer Start -->
  <footer class="andro_footer footer-dark style-5 dark-overlay dark-overlay-2 bg-cover bg-center" style="background-image: url(../assets/img/footer-4.jpg)">
    <div class="container">
      <div class="row">

        <div class="col-lg-3">
          <div class="andro_footer-logo">
            <img src="/front-office-assets/img/logo-sanaa-yetu2.png" alt="logo">
          </div>
          <p class="m-0"> <a href="#">SANAA YETU APP</a> - Copyright 2024 © - Designer by KIVUTECH</p>
        </div>
        <div class="col-lg-3 offset-lg-1">
          <div class="widget">
            <h5 class="widget-title">Liens rapides</h5>
            <ul>
              <li> <a href="{{ route('front.artistes')}}">Artistes</a> </li>
              <li> <a href="{{route('front.evenements')}}">Evenements</a> </li>
              <li> <a href="{{route('front.blog')}}">Actualités</a> </li>
              <li> <a href="{{route('front.about')}}">A propos</a> </li>
              <li> <a href="{{route('front.contact')}}">Nous contacter</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-5">
          @livewire('front-office.home.subscription')

          {{-- <ul class="andro_footer-socials">
            <li> <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a> </li>
            <li> <a href="#"> <i class="fab fa-instagram"></i> Instagram </a> </li>
            <li> <a href="#"> <i class="fab fa-twitter"></i> Twitter </a> </li>
          </ul> --}}

        </div>

      </div>
    </div>
  </footer>
  <!-- Footer End -->