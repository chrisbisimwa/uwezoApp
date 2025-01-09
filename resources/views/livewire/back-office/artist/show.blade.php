<div class="row">
    <div class="col-xxl-4 col-xl-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-body p-0">
                <div class="d-sm-flex align-items-top p-4 border-bottom border-block-end-dashed main-profile-cover">
                    <div>
                        @if ($artist->photo)
                            <span class="avatar avatar-xxl avatar-rounded me-3">
                                <img src="../assets/images/faces/9.jpg" alt="">
                            </span>
                        @else
                            <div class="avatar avatar-xl avatar-rounded me-3 bg-primary">
                                {{ strtoupper(substr($artist->nom, 0, 1)) }}{{ strtoupper(substr($artist->prenom, 0, 1)) }}
                            </div>
                        @endif


                    </div>
                    <div class="flex-fill main-profile-info">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold mb-1 text-fixed-white">{{ $artist->nom }} {{ $artist->prenom }}</h6>
                            <button class="btn btn-light btn-wave waves-effect waves-light"><i
                                    class="ri-add-line me-1 align-middle d-inline-block"></i>Follow</button>
                        </div>
                        <p class="mb-1 text-muted text-fixed-white op-7">{{ $artist->category->name }}</p>
                        <p class="fs-12 text-fixed-white mb-4 op-5">
                            <span class="me-3"><i class="ri-building-line me-1 align-middle"></i>Georgia</span>
                            <span><i class="ri-map-pin-line me-1 align-middle"></i>Washington D.C</span>
                        </p>
                        <div class="d-flex mb-0">
                            <div class="me-4">
                                <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">{{count($artist->artworks)}}</p>
                                <p class="mb-0 fs-11 op-5 text-fixed-white">Oeuvres</p>
                            </div>
                            <div class="me-4">
                                <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">0</p>
                                <p class="mb-0 fs-11 op-5 text-fixed-white">Evenemnts</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="p-4 border-bottom border-block-end-dashed">
                    <div class="mb-4">
                        <p class="fs-15 mb-2 fw-semibold">Biographie :</p>
                        <p class="fs-12 text-muted op-7 mb-0">
                            {{ $artist->biography }}
                        </p>
                    </div>

                </div>
                <div class="p-4 border-bottom border-block-end-dashed">
                    <p class="fs-15 mb-2 me-4 fw-semibold">Contacts :</p>
                    <div class="text-muted">
                        <p class="mb-2">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                <i class="ri-mail-line align-middle fs-14"></i>
                            </span>
                            {{ $artist->email }}
                        </p>
                        <p class="mb-2">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                <i class="ri-phone-line align-middle fs-14"></i>
                            </span>
                            {{ $artist->phone }}
                        </p>
                        <p class="mb-0">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                <i class="ri-map-pin-line align-middle fs-14"></i>
                            </span>
                            MIG-1-11, Monroe Street, Georgetown, Washington D.C, USA,20071
                        </p>
                    </div>
                </div>
                <div class="p-4 border-bottom border-block-end-dashed d-flex align-items-center">
                    <p class="fs-15 mb-2 me-4 fw-semibold">Social Networks :</p>
                    <div class="btn-list mb-0">
                        <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light">
                            <i class="ri-facebook-line fw-semibold"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                            <i class="ri-twitter-line fw-semibold"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                            <i class="ri-instagram-line fw-semibold"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                            <i class="ri-github-line fw-semibold"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                            <i class="ri-youtube-line fw-semibold"></i>
                        </button>
                    </div>
                </div>

                <div class="p-4">
                    <p class="fs-15 mb-2 me-4 fw-semibold">Followers :</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="../assets/images/faces/1.jpg" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Alicia Sierra</p>
                                    <span class="fs-11 text-muted op-7">aliciasierra389@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm waves-effect waves-light">Follow</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="../assets/images/faces/3.jpg" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Samantha Mery</p>
                                    <span class="fs-11 text-muted op-7">samanthamery@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm waves-effect waves-light">Follow</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="../assets/images/faces/6.jpg" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Juliana Pena</p>
                                    <span class="fs-11 text-muted op-7">juliapena555@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm waves-effect waves-light">Follow</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="../assets/images/faces/15.jpg" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Adam Smith</p>
                                    <span class="fs-11 text-muted op-7">adamsmith99@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm waves-effect waves-light">Follow</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="../assets/images/faces/13.jpg" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Farhaan Amhed</p>
                                    <span class="fs-11 text-muted op-7">farhaanahmed989@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm waves-effect waves-light">Follow</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-8 col-xl-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-0">
                        <div
                            class="p-3 border-bottom border-block-end-dashed d-flex align-items-center justify-content-between">
                            <div>
                                <ul class="nav nav-tabs mb-0 tab-style-6 justify-content-start" id="myTab"
                                    role="tablist">
                                    
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="followers-tab" data-bs-toggle="tab"
                                            data-bs-target="#followers-tab-pane" type="button" role="tab"
                                            aria-controls="followers-tab-pane" aria-selected="false"
                                            tabindex="-1"><i
                                            class="ri-exchange-box-line me-1 align-middle d-inline-block"></i>Oeuvres</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="gallery-tab" data-bs-toggle="tab"
                                            data-bs-target="#gallery-tab-pane" type="button" role="tab"
                                            aria-controls="gallery-tab-pane" aria-selected="false" tabindex="-1"><i
                                            class="ri-bill-line me-1 align-middle d-inline-block"></i>Evenements</button>
                                    </li>
                                </ul>
                            </div>
                           
                        </div>
                        <div class="p-3">
                            <div class="tab-content" id="myTabContent">
                                
                                <div class="tab-pane show active fade p-0 border-0" id="followers-tab-pane" role="tabpanel"
                                    aria-labelledby="followers-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xl avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="">
                                                        </span>
                                                        <div class="mt-2">
                                                            <p class="mb-0 fw-semibold">Samantha May</p>
                                                            <p class="fs-12 op-7 mb-1 text-muted">
                                                                samanthamay2912@gmail.com</p>
                                                            <span class="badge bg-info-transparent rounded-pill">Team
                                                                Member</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="btn-list">
                                                        <button
                                                            class="btn btn-sm btn-light btn-wave waves-effect waves-light">Block</button>
                                                        <button
                                                            class="btn btn-sm btn-primary btn-wave waves-effect waves-light">Unfollow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xl avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg" alt="">
                                                        </span>
                                                        <div class="mt-2">
                                                            <p class="mb-0 fw-semibold">Andrew Garfield</p>
                                                            <p class="fs-12 op-7 mb-1 text-muted">
                                                                andrewgarfield98@gmail.com</p>
                                                            <span
                                                                class="badge bg-success-transparent rounded-pill">Team
                                                                Lead</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="btn-list">
                                                        <button
                                                            class="btn btn-sm btn-light btn-wave waves-effect waves-light">Block</button>
                                                        <button
                                                            class="btn btn-sm btn-primary btn-wave waves-effect waves-light">Unfollow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xl avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="">
                                                        </span>
                                                        <div class="mt-2">
                                                            <p class="mb-0 fw-semibold">Jessica Cashew</p>
                                                            <p class="fs-12 op-7 mb-1 text-muted">
                                                                jessicacashew143@gmail.com</p>
                                                            <span class="badge bg-info-transparent rounded-pill">Team
                                                                Member</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="btn-list">
                                                        <button
                                                            class="btn btn-sm btn-light btn-wave waves-effect waves-light">Block</button>
                                                        <button
                                                            class="btn btn-sm btn-primary btn-wave waves-effect waves-light">Unfollow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xl avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="">
                                                        </span>
                                                        <div class="mt-2">
                                                            <p class="mb-0 fw-semibold">Simon Cowan</p>
                                                            <p class="fs-12 op-7 mb-1 text-muted">
                                                                jessicacashew143@gmail.com</p>
                                                            <span
                                                                class="badge bg-warning-transparent rounded-pill">Team
                                                                Manager</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="btn-list">
                                                        <button
                                                            class="btn btn-sm btn-light btn-wave waves-effect waves-light">Block</button>
                                                        <button
                                                            class="btn btn-sm btn-primary btn-wave waves-effect waves-light">Unfollow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xl avatar-rounded">
                                                            <img src="../assets/images/faces/7.jpg" alt="">
                                                        </span>
                                                        <div class="mt-2">
                                                            <p class="mb-0 fw-semibold">Amanda nunes</p>
                                                            <p class="fs-12 op-7 mb-1 text-muted">
                                                                amandanunes45@gmail.com</p>
                                                            <span class="badge bg-info-transparent rounded-pill">Team
                                                                Member</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="btn-list">
                                                        <button
                                                            class="btn btn-sm btn-light btn-wave waves-effect waves-light">Block</button>
                                                        <button
                                                            class="btn btn-sm btn-primary btn-wave waves-effect waves-light">Unfollow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xl avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="">
                                                        </span>
                                                        <div class="mt-2">
                                                            <p class="mb-0 fw-semibold">Mahira Hose</p>
                                                            <p class="fs-12 op-7 mb-1 text-muted">
                                                                mahirahose9456@gmail.com</p>
                                                            <span class="badge bg-info-transparent rounded-pill">Team
                                                                Member</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="btn-list">
                                                        <button
                                                            class="btn btn-sm btn-light btn-wave waves-effect waves-light">Block</button>
                                                        <button
                                                            class="btn btn-sm btn-primary btn-wave waves-effect waves-light">Unfollow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="text-center mt-4">
                                                <button
                                                    class="btn btn-primary-light btn-wave waves-effect waves-light">Show
                                                    All</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade p-0 border-0" id="gallery-tab-pane" role="tabpanel"
                                    aria-labelledby="gallery-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <a href="{{asset('back-office-assets/images/media/media-40.jpg')}}" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="{{asset('back-office-assets/images/media/media-40.jpg')}}" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <a href="../assets/images/media/media-41.jpg" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="../assets/images/media/media-41.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <a href="../assets/images/media/media-42.jpg" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="../assets/images/media/media-42.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <a href="../assets/images/media/media-43.jpg" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="../assets/images/media/media-43.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <a href="../assets/images/media/media-44.jpg" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="../assets/images/media/media-44.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <a href="../assets/images/media/media-45.jpg" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="../assets/images/media/media-45.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <a href="../assets/images/media/media-46.jpg" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="../assets/images/media/media-46.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <a href="../assets/images/media/media-60.jpg" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="../assets/images/media/media-60.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <a href="../assets/images/media/media-26.jpg" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="../assets/images/media/media-26.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <a href="../assets/images/media/media-32.jpg" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="../assets/images/media/media-32.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <a href="../assets/images/media/media-30.jpg" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="../assets/images/media/media-30.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <a href="../assets/images/media/media-31.jpg" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="../assets/images/media/media-31.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="text-center mt-4">
                                                <button
                                                    class="btn btn-primary-light btn-wave waves-effect waves-light">Show
                                                    All</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        
    </div>
</div>
