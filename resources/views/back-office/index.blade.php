@extends('back-office.layouts.app')

@section('content')
    <!-- Start::app-content -->
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Tableau de Bord</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">

            <div class="col-xxl-8 col-xl-12 col-lg-6 col-md-12">
                <div class="row row-cols-12">
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-primary">
                                            <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path
                                                    d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex mb-1 align-items-top justify-content-between">
                                            <h5 class="fw-semibold mb-0 lh-1">{{ $users }}</h5>
                                        </div>
                                        <p class="mb-0 fs-10 op-7 text-muted fw-semibold">TOTAL UTILISATEURS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-secondary">
                                            <svg class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24"
                                                width="24px" fill="#000000">
                                                <rect fill="none" height="24" width="24" />
                                                <g>
                                                    <path
                                                        d="M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1C4.76,14.04,4.39,14,4,14 c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2 c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85C21.93,14.21,20.99,14,20,14 c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M16.24,13.65c-1.17-0.52-2.61-0.9-4.24-0.9 c-1.63,0-3.07,0.39-4.24,0.9C6.68,14.13,6,15.21,6,16.39V18h12v-1.61C18,15.21,17.32,14.13,16.24,13.65z M8.07,16 c0.09-0.23,0.13-0.39,0.91-0.69c0.97-0.38,1.99-0.56,3.02-0.56s2.05,0.18,3.02,0.56c0.77,0.3,0.81,0.46,0.91,0.69H8.07z M12,8 c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S11.45,8,12,8 M12,6c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3s3-1.34,3-3 C15,7.34,13.66,6,12,6L12,6z" />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex mb-1 align-items-top justify-content-between">
                                            <h5 class="fw-semibold mb-0 lh-1">{{ $artists }}</h5>
                                        </div>
                                        <p class="mb-0 fs-10 op-7 text-muted fw-semibold">TOTAL ARTISTES</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-warning">
                                            <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-.61.08-1.21.21-1.78L8.99 15v1c0 1.1.9 2 2 2v1.93C7.06 19.43 4 16.07 4 12zm13.89 5.4c-.26-.81-1-1.4-1.9-1.4h-1v-3c0-.55-.45-1-1-1h-6v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41C17.92 5.77 20 8.65 20 12c0 2.08-.81 3.98-2.11 5.4z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex mb-1 align-items-top justify-content-between">
                                            <h5 class="fw-semibold mb-0 lh-1">{{ $events }}</h5>
                                        </div>
                                        <p class="mb-0 fs-10 op-7 text-muted fw-semibold">TOTAL EVENEMENTS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-teal">
                                            <svg class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24"
                                                width="24px" fill="#000000">
                                                <g>
                                                    <rect fill="none" height="24" width="24" />
                                                    <g>
                                                        <path
                                                            d="M19,5v14H5V5H19 M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3L19,3z" />
                                                    </g>
                                                    <path d="M14,17H7v-2h7V17z M17,13H7v-2h10V13z M17,9H7V7h10V9z" />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex mb-1 align-items-top justify-content-between">
                                            <h5 class="fw-semibold mb-0 lh-1">{{ $blogs }}</h5>
                                        </div>
                                        <p class="mb-0 fs-10 op-7 text-muted fw-semibold">NOMBRES D'ARTICLES</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3">
                                        <span class="avatar avatar-md p-2 bg-teal">
                                            
                                            <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                viewBox="0 0 24 24" width="24px" height="24px" fill="#000000">
                                                <path
                                                    d="M8.7,18H3c-1.493,0-3-1.134-3-3.666V9.294A9.418,9.418,0,0,1,8.349.023a9,9,0,0,1,9.628,9.628A9.419,9.419,0,0,1,8.7,18ZM20,9.08h-.012c0,.237,0,.474-.012.712C19.59,15.2,14.647,19.778,9.084,19.981l0,.015A8,8,0,0,0,16,24h5a3,3,0,0,0,3-3V16A8,8,0,0,0,20,9.08Z" />
                                            </svg>

                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex mb-1 align-items-top justify-content-between">
                                            <h5 class="fw-semibold mb-0 lh-1">{{ $totalOeuvres }}</h5>
                                        </div>
                                        <p class="mb-0 fs-10 op-7 text-muted fw-semibold">TOTAL D'OEUVRES</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-12 col-xl-6 col-lg-6 col-md-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Articles Récents
                                </div>
                                <div class="dropdown">
                                    <a href="{{ route('blog.index') }}" class="p-2 fs-12 text-muted"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Voir Plus<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    {{--  <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                            </li>
                        </ul> --}}
                                </div>
                            </div>
                            <div class="card-body justify-content-between ">
                                <ul class="list-group list-group-flush" id="recent-jobs">
                                    @foreach ($recentBlogs as $blog)
                                        <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 lh-1">
                                                        <span
                                                            class="avatar avatar-md avatar-rounded bg-primary-transparent">
                                                            AC
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fw-semibold">{{ $blog->title }}</p>
                                                        <p class="fs-12 text-muted mb-0">Achies - 12 hrs ago</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 fs-12">Créer le</p>
                                                        <span
                                                            class="badge bg-success-transparent">{{ $blog->created_at->format('d/m/Y H:i:s') }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Evènements à venir</div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled timeline-widget mb-0 my-3">
                            @foreach ($recentEvents as $event)
                                <li class="timeline-widget-list">
                                    <div class="d-flex align-items-top">
                                        <div class="me-5 text-center">
                                            <span
                                                class="d-block fs-20 fw-semibold text-primary">{{ $event->start_date->format('d') }}</span>
                                            <span
                                                class="d-block fs-12 text-muted">{{ $event->start_date->format('D') }}</span>
                                        </div>
                                        <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                            <div>
                                                <p class="mb-1 text-truncate timeline-widget-content text-wrap">
                                                    {{ $event->title }}</p>
                                                <p class="mb-0 fs-12 lh-1 text-muted">
                                                    {{ $event->start_date->format('H:s') }}<span
                                                        class="badge bg-primary-transparent ms-2">Announcement</span></p>
                                            </div>
                                            <div class="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                {{-- <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                        </ul> --}}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{--         <div class="col-xxl-3 col-xl-12">
            <div class="row">
                <div class="col-xxl-12 col-xl-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="d-flex align-items-top justify-content-between mb-4">
                                <div>
                                    <span class="d-block fs-15 fw-semibold">My Profile</span>
                                    <span class="d-block fs-12 text-muted">67% Completed - <a href="javascript:void(0);" class="text-center text-primary">Click Here<i class="bi bi-box-arrow-up-right fs-10 ms-2 align-middle"></i></a></span>
                                </div>
                                <div class="dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center mb-4">
                                <div class="mb-3">
                                    <span class="avatar avatar-xxl avatar-rounded circle-progress p-1">
                                        <img src="../assets/images/faces/9.jpg" alt="">
                                    </span>
                                </div>
                                <div>
                                    <h5 class="fw-semibold mb-0">Json Taylor</h5>
                                    <span class="fs-13 text-muted">jsontaylor345@gmail.com</span>
                                </div>
                            </div>
                            <div class="btn-list text-center">
                                <a href="profile.html" class="btn btn-primary-light btn-sm">
                                    Edit Profile
                                </a>
                                <a href="profile.html" class="btn btn-primary btn-sm">
                                    View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-4">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">My Goals</div>
                            <button type="button" class="btn btn-sm btn-light">View All</button>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled personal-goals-list mb-0">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded bg-secondary-transparent">
                                                <i class="bi bi-globe2 fs-18"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="d-block fw-semibold">Maldives Trip</span>
                                                <span class="d-block text-secondary">80%</span>
                                            </div>
                                            <div class="progress progress-animate progress-xs" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-secondary" style="width: 80%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded bg-warning-transparent">
                                                <i class="bi bi-balloon-heart fs-18"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="d-block fw-semibold">Savings For Birthday</span>
                                                <span class="d-block text-warning">90%</span>
                                            </div>
                                            <div class="progress progress-animate progress-xs" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-warning" style="width: 90%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded bg-primary-transparent">
                                                <i class="bi bi-lightning fs-18"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="d-block fw-semibold">Join Guitar Class</span>
                                                <span class="d-block text-primary">80%</span>
                                            </div>
                                            <div class="progress progress-animate progress-xs" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-primary" style="width: 40%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-4">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Favourite Contacts
                            </div>
                            <button type="button" class="btn btn-sm btn-light">View All</button>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled personal-favourite-contacts mb-0">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <span class="avatar">
                                                <img src="../assets/images/faces/2.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="fw-semibold d-block mb-1">Kiara Advain</span>
                                            <span class="text-muted d-block fs-12">+(72)-8765700876</span>
                                        </div>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots fs-14"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <span class="avatar">
                                                <img src="../assets/images/faces/9.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="fw-semibold d-block mb-1">Jason Mama</span>
                                            <span class="text-muted d-block fs-12">+(72)-234226333</span>
                                        </div>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots fs-14"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <span class="avatar">
                                                <img src="../assets/images/faces/10.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="fw-semibold d-block mb-1">Stuart Edward</span>
                                            <span class="text-muted d-block fs-12">+(11)-16743256</span>
                                        </div>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots fs-14"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>
        <!--End::row-1 -->

    </div>
    <!-- End::app-content -->
@endsection
