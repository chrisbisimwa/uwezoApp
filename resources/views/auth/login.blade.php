@extends('back-office.layouts.app-login')

@section('content')
    <div class="row authentication mx-0">

        <div class="col-xxl-7 col-xl-7 col-lg-12">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-7 col-sm-8 col-12">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="p-5">
                            <div class="mb-3">
                                <a href="index.html">
                                    <img src="{{ asset('back-office-assets/images/logo-uwezo.png') }}" alt=""
                                        class="authentication-brand desktop-logo">
                                    <img src="{{ asset('back-office-assets/images/logo-uwezo.png') }}" alt=""
                                        class="authentication-brand desktop-dark">
                                </a>
                            </div>
                            <p class="h5 fw-semibold mb-2">Connexion</p>
                            <div class="btn-list">

                            </div>
                            <div class="text-center my-5 authentication-barrier">
                            </div>
                            <div class="row gy-3">
                                <div class="col-xl-12 mt-0">
                                    <label for="signin-username"
                                        class="form-label text-default">{{ __('Email Address') }}</label>
                                    <input type="text"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        id="email" type="email" name="email" placeholder="Email Address" required
                                        autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label for="signin-password" class="form-label text-default d-block">Mot de passe
                                        @if (Route::has('password.request'))
                                            <a class="float-end text-danger" href="{{ route('password.request') }}">
                                                Mot de passe oublié ?
                                            </a>
                                        @endif
                                        
                                    </label>
                                    <div class="input-group">
                                        <input id="password" type="password" name="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <button class="btn btn-light" type="button"
                                            onclick="createpassword('signin-password',this)" id="button-addon2"><i
                                                class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                                Se souvenir du mot de passe ?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 d-grid mt-2">
                                    <button type="submit" class="btn btn-lg btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="fs-12 text-muted mt-4">Dont have an account? <a href="sign-up-cover.html"
                                        class="text-primary">Sign Up</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xxl-5 col-xl-5 col-lg-5 d-xl-block d-none px-0">
            <div class="authentication-cover">
                <div class="aunthentication-cover-content rounded">
                    <div
                        class="swiper keyboard-control swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-ca24d161e7ded101c" aria-live="off"
                            style="transform: translate3d(-822px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="2" role="group" aria-label="3 / 3"
                                style="width: 381px; margin-right: 30px;">
                                <div
                                    class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5">
                                            <img src="{{ asset('back-office-assets/images/authentication/slider 1.jpg') }}" class="authentication-image"
                                                alt="">
                                        </div>
                                        <h6 class="fw-semibold">Découvrez l'Art sous un Nouveau Jour</h6>
                                        <p class="fw-normal fs-14 op-7"> Plongez dans un monde où chaque œuvre raconte une histoire unique. Connectez-vous pour explorer notre collection.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group"
                                aria-label="1 / 3" style="width: 381px; margin-right: 30px;">
                                <div
                                    class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5">
                                            <img src="{{ asset('back-office-assets/images/authentication/slider 2.jpg') }}" class="authentication-image"
                                                alt="">
                                        </div>
                                        <h6 class="fw-semibold">Votre Galerie Privée, Ici et Maintenant

                                        </h6>
                                        <p class="fw-normal fs-14 op-7"> Accédez à des chefs-d'œuvre exclusifs. Rejoignez notre communauté et profitez d'une expérience artistique personnalisée.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group"
                                aria-label="2 / 3" style="width: 381px; margin-right: 30px;">
                                <div
                                    class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5">
                                            <img src="{{ asset('back-office-assets/images/authentication/slider 1.jpg') }}" class="authentication-image"
                                                alt="">
                                        </div>
                                        <h6 class="fw-semibold">L'Art, à Portée de Clic

                                        </h6>
                                        <p class="fw-normal fs-14 op-7"> Transformez votre quotidien avec des œuvres qui inspirent. Inscrivez-vous pour commencer votre voyage artistique.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group"
                                aria-label="3 / 3" style="width: 381px; margin-right: 30px;">
                                <div
                                    class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5">
                                            <img src="{{ asset('back-office-assets/images/authentication/slider 3.jpg') }}" class="authentication-image"
                                                alt="">
                                        </div>
                                        <h6 class="fw-semibold">Sign In</h6>
                                        <p class="fw-normal fs-14 op-7"> Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis.
                                            Porro rem voluptates possimus, ad, autem quae culpa architecto, quam labore
                                            blanditiis at ratione.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                data-swiper-slide-index="0" role="group" aria-label="1 / 3"
                                style="width: 381px; margin-right: 30px;">
                                <div
                                    class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5">
                                            <img src="{{ asset('back-office-assets/images/authentication/backLogin.jpg') }}" class="authentication-image"
                                                alt="">
                                        </div>
                                        <h6 class="fw-semibold">Sign In</h6>
                                        <p class="fw-normal fs-14 op-7"> Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis.
                                            Porro rem voluptates possimus, ad, autem quae culpa architecto, quam labore
                                            blanditiis at ratione.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                            aria-controls="swiper-wrapper-ca24d161e7ded101c"></div>
                        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                            aria-controls="swiper-wrapper-ca24d161e7ded101c"></div>
                        <div
                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                            <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 1"></span><span
                                class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 2" aria-current="true"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 3"></span>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>

    </div>







    
@endsection
