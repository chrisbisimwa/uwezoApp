<aside class="app-sidebar sticky" id="sidebar">

    <div class="main-sidebar-header">
        <a href="{{route('home')}}" class="header-logo">


            <img src="{{ asset('front-office-assets/img/logo-sanaa-yetu2.png') }}" alt="logo" class="desktop-logo">
            <img src="{{ asset('front-office-assets/img/favicon.png') }}" alt="logo"
                class="toggle-logo">
            <img src="{{ asset('front-office-assets/img/logo-sanaa-yetu2.png') }}" alt="logo" class="desktop-dark">
            <img src="{{ asset('front-office-assets/img/favicon.png') }}" alt="logo"
                class="toggle-dark">
        </a>
    </div>



    <div class="main-sidebar" id="sidebar-scroll" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: -8px 0px -80px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 8px 0px 80px;">

                            <!-- Start::nav -->
                            <nav class="main-menu-container nav nav-pills flex-column sub-open open active">
                                <div class="slide-left active d-none" id="slide-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z">
                                        </path>
                                    </svg>
                                </div>
                                <ul class="main-menu" style="display: block; margin-left: 0px; margin-right: 0px;">
                                    <!-- Start::slide__category -->
                                    <li class="slide__category"><span class="category-name">Main</span></li>
                                    <!-- End::slide__category -->

                                    <!-- Start::slide -->
                                    {{-- <li class="slide has-sub active open">
                                    <a href="javascript:void(0);" class="side-menu__item active">
                                        <i class="bx bx-home side-menu__icon"></i>
                                        <span class="side-menu__label">Dashboards<span
                                                class="badge bg-warning-transparent ms-2">12</span></span>
                                        <i class="fe fe-chevron-right side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu child1 active"
                                        style="position: relative; left: 0px; top: 0px; margin: 0px; box-sizing: border-box; transform: translate3d(239.2px, 490.4px, 0px); display: block;"
                                        data-popper-placement="bottom" data-popper-reference-hidden=""
                                        data-popper-escaped="">
                                        
                                    </ul>
                                </li> --}}
                                    <li class="slide {{ Request::routeIs('back-office') ? 'active' : '' }}">
                                        <a href="{{ route('back-office') }}" class="side-menu__item {{ Request::routeIs('back-office') ? 'active' : '' }}">
                                            <i class="bx bx-home side-menu__icon"></i>
                                            <span class="side-menu__label">Tableau de bord</span>
                                        </a>
                                    </li>
                                    <!-- End::slide -->
                                    <li class="slide__category"><span class="category-name">Artiste</span></li>
                                 
                                    <li class="slide {{ Request::routeIs('artist.index') ? 'active' : '' }}">
                                        <a href="{{ route('artist.index') }}" class="side-menu__item {{ Request::routeIs('artist.index') ? 'active' : '' }}">
                                            <i class="bx bx-file side-menu__icon"></i>
                                            <span class="side-menu__label">Artistes</span>
                                        </a>
                                    </li>
                                    <li class="slide {{ Request::routeIs('artist-category.index') ? 'active' : '' }}">
                                        <a href="{{route('artist-category.index')}}" class="side-menu__item {{ Request::routeIs('artist-category.index') ? 'active' : '' }}">
                                            <i class="bx bx-category side-menu__icon"></i>
                                            <span class="side-menu__label">Catégories</span>
                                        </a>
                                    </li>
                                   

                                    <li class="slide__category"><span class="category-name">Actualité</span></li>
                                 
                                    <li class="slide {{ Request::routeIs('blog.index') ? 'active' : '' }}">
                                        <a href="{{ route('blog.index') }}" class="side-menu__item {{ Request::routeIs('blog.index') ? 'active' : '' }}">
                                            <i class="bx bx-file side-menu__icon"></i>
                                            <span class="side-menu__label">Actualité</span>
                                        </a>
                                    </li>
                                    <li class="slide {{ Request::routeIs('blog-category.index') ? 'active' : '' }}">
                                        <a href="{{route('blog-category.index')}}" class="side-menu__item {{ Request::routeIs('blog-category.index') ? 'active' : '' }}">
                                            <i class="bx bx-category side-menu__icon"></i>
                                            <span class="side-menu__label">Catégories</span>
                                        </a>
                                    </li>
                                    <li class="slide {{ Request::routeIs('blog-comment.index') ? 'active' : '' }}">
                                        <a href="{{route('blog-comment.index')}}" class="side-menu__item {{ Request::routeIs('blog-comment.index') ? 'active' : '' }}">
                                            <i class="bx bx-comment side-menu__icon"></i>
                                            <span class="side-menu__label">Commentaires</span>
                                        </a>
                                    </li>
                                    <!-- Start::slide event -->
                                    <li class="slide__category"><span class="category-name">Evénements</span></li>
                                    <li class="slide {{ Request::routeIs('evenement.index') ? 'active' : '' }}">
                                        <a href="{{ route('evenement.index') }}" class="side-menu__item {{ Request::routeIs('evenement.index') ? 'active' : '' }}">
                                            <i class="bx bx-file side-menu__icon"></i>
                                            <span class="side-menu__label">Evenements</span>
                                        </a>
                                    </li>
                                    <li class="slide {{ Request::routeIs('event-category.index') ? 'active' : '' }}">
                                        <a href="{{route('event-category.index')}}" class="side-menu__item {{ Request::routeIs('event-category.index') ? 'active' : '' }}">
                                            <i class="bx bx-category side-menu__icon"></i>
                                            <span class="side-menu__label">Catégories</span>
                                        </a>
                                    </li>
                                    <li class="slide {{ Request::routeIs('event-comment.index') ? 'active' : '' }}">
                                        <a href="{{route('event-comment.index')}}" class="side-menu__item {{ Request::routeIs('event-comment.index') ? 'active' : '' }}">
                                            <i class="bx bx-comment side-menu__icon"></i>
                                            <span class="side-menu__label">Commentaires</span>
                                        </a>
                                    </li>
                                    <!-- End::slide event -->


                                   
                                </ul>
                                <div class="slide-right d-none" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                        <path
                                            d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                        </path>
                                    </svg></div>
                            </nav>
                            <!-- End::nav -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 1372px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; transform: translate3d(0px, 0px, 0px); display: none;">
            </div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 361px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
    </div>
</aside>
