@extends('front-office.layouts.app')

@section('content')
    <div class="andro_subheader bg-cover bg-center bg-norepeat"
        style="background-image: url(front-office-assets/img/subheader-7.jpg)">
        <div class="container">

            <h1>A propos</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
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
                        <h3> La mission <span class="family-display color-primary">de Sanaa Yetu</span> </h3>
                        <p>
                            La mission de la plate forme est la promotion des artistes et des évènements culturels
                        </p>
                        <ul style="list-style-type: none;margin: 0;padding: 0;">
                            <li style="margin-bottom: 10px;padding: 5px 0;background-color: #f9f9f9;border-radius: 3px;">
                                Mettre en avant les évènements culturels à venir (Concerts, expositions, festivals, ect.) à
                                travers des agendas en ligne et des alertes personnalisées,</li>
                            <li style="margin-bottom: 10px;padding: 5px 0;background-color: #f9f9f9;border-radius: 3px;">
                                Diffuser des contenus culturels variés ( vidéos, photos, articles) pour faire connaître les
                                artistes et les expressions culturelles </li>
                            <li style="margin-bottom: 10px;padding: 5px 0;background-color: #f9f9f9;border-radius: 3px;">
                                Faciliter la mise en relation entre les artistes et le public (réservations, ventes de
                                billets, etc)</li>
                        </ul>

                        <style>
                            /* Si vous voulez ajouter des puces personnalisées */
                            ul.custom-bullets {
                                list-style-type: none;
                            }

                            ul.custom-bullets li:before {
                                content: "•";
                                /* Bullet point */
                                color: #333;
                                /* Couleur de la puce */
                                font-weight: bold;
                                /* Met en gras la puce pour qu'elle se détache */
                                display: inline-block;
                                width: 1em;
                                margin-left: -1em;
                            }
                        </style>


                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">

                    <div class="col-lg-6">
                        <div class="position-relative h-100">
                            <img class="andro_img-cover" src="../front-office-assets/img/videos/10.jpg" alt="Video">
                            <a href="https://www.youtube.com/watch?v=u0REqNzqoJk"
                                class="center-absolute andro_video-icon pulse andro_video-popup"> <i
                                    class="fas fa-play"></i> </a>
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
                <p class="text-white">Tout savoir sur l'actualité des artistes, l'application mobile vous rapproche de la
                    communauté</p>
                <p class="text-white">
                    <a href="#" class="button primary icon-after">Télécharger maintenant<i
                            class="fal fa-arrow-right"></i> </a>
                </p>
            </div>


        </div>
    </div>
@endsection
