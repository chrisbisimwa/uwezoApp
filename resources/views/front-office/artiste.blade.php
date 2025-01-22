@extends('front-office.layouts.app')

@section('content')
    <div class="andro_subheader bg-cover bg-center bg-norepeat"
        style="background-image: url(../front-office-assets/img/subheader-7.jpg)">
        <div class="container">

            <h1>Les Artistes</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Artistes</li>
                </ol>
            </nav>

        </div>
    </div>

    <div class="section md white-bg">

        <div class="container">
    
            @livewire('front-office.artist.cat')
    
            @livewire('front-office.artist.liste')
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
                            <span class="text-white">+(243)998 564 037</span>
                            
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
                            <span class="text-white">info@sanaayetu.art</span>
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
                            <span class="text-white">N°3, Av. FIZI, IBANDA,</span>
                            <span class="text-white">Bukavu, RDC</span>
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
