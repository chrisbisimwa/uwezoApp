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
                                <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">113</p>
                                <p class="mb-0 fs-11 op-5 text-fixed-white">Projects</p>
                            </div>
                            <div class="me-4">
                                <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">12.2k</p>
                                <p class="mb-0 fs-11 op-5 text-fixed-white">Followers</p>
                            </div>
                            <div class="me-4">
                                <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">128</p>
                                <p class="mb-0 fs-11 op-5 text-fixed-white">Following</p>
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
                                        <button class="nav-link active" id="activity-tab" data-bs-toggle="tab"
                                            data-bs-target="#activity-tab-pane" type="button" role="tab"
                                            aria-controls="activity-tab-pane" aria-selected="true"><i
                                                class="ri-gift-line me-1 align-middle d-inline-block"></i>Activity</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="posts-tab" data-bs-toggle="tab"
                                            data-bs-target="#posts-tab-pane" type="button" role="tab"
                                            aria-controls="posts-tab-pane" aria-selected="false" tabindex="-1"><i
                                                class="ri-bill-line me-1 align-middle d-inline-block"></i>Posts</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="followers-tab" data-bs-toggle="tab"
                                            data-bs-target="#followers-tab-pane" type="button" role="tab"
                                            aria-controls="followers-tab-pane" aria-selected="false"
                                            tabindex="-1"><i
                                                class="ri-money-dollar-box-line me-1 align-middle d-inline-block"></i>Friends</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="gallery-tab" data-bs-toggle="tab"
                                            data-bs-target="#gallery-tab-pane" type="button" role="tab"
                                            aria-controls="gallery-tab-pane" aria-selected="false" tabindex="-1"><i
                                                class="ri-exchange-box-line me-1 align-middle d-inline-block"></i>Gallery</button>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p class="fw-semibold mb-2">Profile 60% completed - <a href="javscript:void(0);"
                                        class="text-primary fs-12">Finish now</a></p>
                                <div class="progress progress-xs progress-animate">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active fade p-0 border-0" id="activity-tab-pane"
                                    role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                                    <ul class="list-unstyled profile-timeline">
                                        <li>
                                            <div>
                                                <span
                                                    class="avatar avatar-sm bg-primary-transparent avatar-rounded profile-timeline-avatar">
                                                    E
                                                </span>
                                                <p class="mb-2">
                                                    <b>You</b> Commented on <b>alexander taylor</b> post <a
                                                        class="text-secondary"
                                                        href="javascript:void(0);"><u>#beautiful day</u></a>.<span
                                                        class="float-end fs-11 text-muted">24,Dec 2022 - 14:34</span>
                                                </p>
                                                <p class="profile-activity-media mb-0">
                                                    <a href="javascript:void(0);">
                                                        <img src="../assets/images/media/media-17.jpg" alt="">
                                                    </a>
                                                    <a href="javascript:void(0);">
                                                        <img src="../assets/images/media/media-18.jpg" alt="">
                                                    </a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="../assets/images/faces/11.jpg" alt="">
                                                </span>
                                                <p class="text-muted mb-2">
                                                    <span class="text-default"><b>Json Smith</b> reacted to the post
                                                        👍</span>.<span class="float-end fs-11 text-muted">18,Dec 2022
                                                        - 12:16</span>
                                                </p>
                                                <p class="text-muted mb-0">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Repudiandae, repellendus rem rerum excepturi aperiam ipsam
                                                    temporibus inventore ullam tempora eligendi libero sequi dignissimos
                                                    cumque, et a sint tenetur consequatur omnis!
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="../assets/images/faces/4.jpg" alt="">
                                                </span>
                                                <p class="text-muted mb-2">
                                                    <span class="text-default"><b>Alicia Keys</b> shared a document
                                                        with <b>you</b></span>.<span
                                                        class="float-end fs-11 text-muted">21,Dec 2022 - 15:32</span>
                                                </p>
                                                <p class="profile-activity-media mb-0">
                                                    <a href="javascript:void(0);">
                                                        <img src="../assets/images/media/file-manager/3.png"
                                                            alt="">
                                                    </a>
                                                    <span class="fs-11 text-muted">432.87KB</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span
                                                    class="avatar avatar-sm bg-success-transparent avatar-rounded profile-timeline-avatar">
                                                    P
                                                </span>
                                                <p class="text-muted mb-2">
                                                    <span class="text-default"><b>You</b> shared a post with 4 people
                                                        <b>Simon,Sasha,Anagha,Hishen</b></span>.<span
                                                        class="float-end fs-11 text-muted">28,Dec 2022 - 18:46</span>
                                                </p>
                                                <p class="profile-activity-media mb-2">
                                                    <a href="javascript:void(0);">
                                                        <img src="../assets/images/media/media-75.jpg" alt="">
                                                    </a>
                                                </p>
                                                <div>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="../assets/images/faces/5.jpg" alt="">
                                                </span>
                                                <p class="text-muted mb-1">
                                                    <span class="text-default"><b>Melissa Blue</b> liked your post
                                                        <b>travel excites</b></span>.<span
                                                        class="float-end fs-11 text-muted">11,Dec 2022 - 11:18</span>
                                                </p>
                                                <p class="text-muted">you are already feeling the tense atmosphere of
                                                    the video playing in the background</p>
                                                <p class="profile-activity-media mb-0">
                                                    <a href="javascript:void(0);">
                                                        <img src="../assets/images/media/media-59.jpg" class="m-1"
                                                            alt="">
                                                    </a>
                                                    <a href="javascript:void(0);">
                                                        <img src="../assets/images/media/media-60.jpg" class="m-1"
                                                            alt="">
                                                    </a>
                                                    <a href="javascript:void(0);">
                                                        <img src="../assets/images/media/media-61.jpg" class="m-1"
                                                            alt="">
                                                    </a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="../assets/images/media/media-39.jpg" alt="">
                                                </span>
                                                <p class="mb-1">
                                                    <b>You</b> Commented on <b>Peter Engola</b> post <a
                                                        class="text-secondary" href="javascript:void(0);"><u>#Mother
                                                            Nature</u></a>.<span
                                                        class="float-end fs-11 text-muted">24,Dec 2022 - 14:34</span>
                                                </p>
                                                <p class="text-muted">Technology id developing rapidly kepp uo your
                                                    work 👌</p>
                                                <p class="profile-activity-media mb-0">
                                                    <a href="javascript:void(0);">
                                                        <img src="../assets/images/media/media-26.jpg" alt="">
                                                    </a>
                                                    <a href="javascript:void(0);">
                                                        <img src="../assets/images/media/media-29.jpg" alt="">
                                                    </a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade p-0 border-0" id="posts-tab-pane" role="tabpanel"
                                    aria-labelledby="posts-tab" tabindex="0">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center lh-1">
                                                <div class="me-3">
                                                    <span class="avatar avatar-md avatar-rounded">
                                                        <img src="../assets/images/faces/9.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill me-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Recipient's username"
                                                            aria-label="Recipient's username with two button addons">
                                                        <button class="btn btn-light btn-wave waves-effect waves-light"
                                                            type="button"><i class="bi bi-emoji-smile"></i></button>
                                                        <button class="btn btn-light btn-wave waves-effect waves-light"
                                                            type="button"><i class="bi bi-paperclip"></i></button>
                                                        <button class="btn btn-light btn-wave waves-effect waves-light"
                                                            type="button"><i class="bi bi-camera"></i></button>
                                                        <button
                                                            class="btn btn-primary btn-wave waves-effect waves-light"
                                                            type="button">Post</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item" id="profile-posts-scroll" data-simplebar="init">
                                            <div class="simplebar-wrapper" style="margin: -12px -20px;">
                                                <div class="simplebar-height-auto-observer-wrapper">
                                                    <div class="simplebar-height-auto-observer"></div>
                                                </div>
                                                <div class="simplebar-mask">
                                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                        <div class="simplebar-content-wrapper" tabindex="0"
                                                            role="region" aria-label="scrollable content"
                                                            style="height: auto; overflow: hidden;">
                                                            <div class="simplebar-content"
                                                                style="padding: 12px 20px;">
                                                                <div class="row gy-3">
                                                                    <div
                                                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="rounded border">
                                                                            <div
                                                                                class="p-3 d-flex align-items-top flex-wrap">
                                                                                <div class="me-2">
                                                                                    <span
                                                                                        class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="../assets/images/faces/9.jpg"
                                                                                            alt="">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-fill">
                                                                                    <p class="mb-1 fw-semibold lh-1">
                                                                                        You</p>
                                                                                    <p class="fs-11 mb-2 text-muted">
                                                                                        24, Dec - 04:32PM</p>
                                                                                    <p class="fs-12 text-muted mb-0">
                                                                                        Lorem ipsum dolor sit amet
                                                                                        consectetur adipisicing elit.
                                                                                    </p>
                                                                                    <p class="fs-12 text-muted mb-3">As
                                                                                        opposed to using 'Content here
                                                                                        👌</p>
                                                                                    <div
                                                                                        class="d-flex align-items-center justify-content-between mb-md-0 mb-2">
                                                                                        <div>
                                                                                            <div class="btn-list">
                                                                                                <button
                                                                                                    class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">
                                                                                                    Comment
                                                                                                </button>
                                                                                                <button
                                                                                                    class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                                                                    <i
                                                                                                        class="ri-thumb-up-line"></i>
                                                                                                </button>
                                                                                                <button
                                                                                                    class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                                                    <i
                                                                                                        class="ri-share-line"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex align-items-top">
                                                                                    <div>
                                                                                        <span
                                                                                            class="badge bg-primary-transparent me-2">Fashion</span>
                                                                                    </div>
                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light"
                                                                                            type="button"
                                                                                            data-bs-toggle="dropdown"
                                                                                            aria-expanded="false">
                                                                                            <i
                                                                                                class="ti ti-dots-vertical"></i>
                                                                                        </button>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#">Delete</a>
                                                                                            </li>
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#">Hide</a>
                                                                                            </li>
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#">Edit</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="rounded border">
                                                                            <div
                                                                                class="p-3 d-flex align-items-top flex-wrap">
                                                                                <div class="me-2">
                                                                                    <span
                                                                                        class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="../assets/images/faces/9.jpg"
                                                                                            alt="">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-fill">
                                                                                    <p class="mb-1 fw-semibold lh-1">
                                                                                        You</p>
                                                                                    <p class="fs-11 mb-2 text-muted">
                                                                                        26, Dec - 12:45PM</p>
                                                                                    <p class="fs-12 text-muted mb-1">
                                                                                        Shared pictures with 4 of
                                                                                        friends
                                                                                        <span>Hiren,Sasha,Biden,Thara</span>.
                                                                                    </p>
                                                                                    <div
                                                                                        class="d-flex lh-1 justify-content-between mb-3">
                                                                                        <div>
                                                                                            <a
                                                                                                href="javascript:void(0);">
                                                                                                <span
                                                                                                    class="avatar avatar-md me-1">
                                                                                                    <img src="../assets/images/media/media-52.jpg"
                                                                                                        alt="">
                                                                                                </span>
                                                                                            </a>
                                                                                            <a
                                                                                                href="javascript:void(0);">
                                                                                                <span
                                                                                                    class="avatar avatar-md me-1">
                                                                                                    <img src="../assets/images/media/media-56.jpg"
                                                                                                        alt="">
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="d-flex align-items-center justify-content-between mb-md-0 mb-2">
                                                                                        <div>
                                                                                            <div class="btn-list">
                                                                                                <button
                                                                                                    class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">
                                                                                                    Comment
                                                                                                </button>
                                                                                                <button
                                                                                                    class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                                                                    <i
                                                                                                        class="ri-thumb-up-line"></i>
                                                                                                </button>
                                                                                                <button
                                                                                                    class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                                                    <i
                                                                                                        class="ri-share-line"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex align-items-top">
                                                                                        <div>
                                                                                            <span
                                                                                                class="badge bg-success-transparent me-2">Nature</span>
                                                                                        </div>
                                                                                        <div class="dropdown">
                                                                                            <button
                                                                                                class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light"
                                                                                                type="button"
                                                                                                data-bs-toggle="dropdown"
                                                                                                aria-expanded="false">
                                                                                                <i
                                                                                                    class="ti ti-dots-vertical"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu">
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Delete</a>
                                                                                                </li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Hide</a>
                                                                                                </li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Edit</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="avatar-list-stacked d-block mt-4 text-end">
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="../assets/images/faces/2.jpg"
                                                                                                alt="img">
                                                                                        </span>
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="../assets/images/faces/8.jpg"
                                                                                                alt="img">
                                                                                        </span>
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="../assets/images/faces/2.jpg"
                                                                                                alt="img">
                                                                                        </span>
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="../assets/images/faces/10.jpg"
                                                                                                alt="img">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="rounded border">
                                                                            <div
                                                                                class="p-3 d-flex align-items-top flex-wrap">
                                                                                <div class="me-2">
                                                                                    <span
                                                                                        class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="../assets/images/faces/9.jpg"
                                                                                            alt="">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-fill">
                                                                                    <p class="mb-1 fw-semibold lh-1">
                                                                                        You</p>
                                                                                    <p class="fs-11 mb-2 text-muted">
                                                                                        29, Dec - 09:53AM</p>
                                                                                    <p class="fs-12 text-muted mb-1">
                                                                                        Sharing an article that excites
                                                                                        me about nature more than what i
                                                                                        thought.</p>
                                                                                    <p class="mb-3 profile-post-link">
                                                                                        <a href="javascript:void(0);"
                                                                                            class="fs-12 text-primary">
                                                                                            <u>https://www.discovery.com/nature/caring-for-coral</u>
                                                                                        </a>
                                                                                    </p>
                                                                                    <div
                                                                                        class="d-flex align-items-center justify-content-between mb-md-0 mb-2">
                                                                                        <div>
                                                                                            <div class="btn-list">
                                                                                                <button
                                                                                                    class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">
                                                                                                    Comment
                                                                                                </button>
                                                                                                <button
                                                                                                    class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                                                                    <i
                                                                                                        class="ri-thumb-up-line"></i>
                                                                                                </button>
                                                                                                <button
                                                                                                    class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                                                    <i
                                                                                                        class="ri-share-line"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex align-items-top">
                                                                                    <div>
                                                                                        <span
                                                                                            class="badge bg-secondary-transparent me-2">Travel</span>
                                                                                    </div>
                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light"
                                                                                            type="button"
                                                                                            data-bs-toggle="dropdown"
                                                                                            aria-expanded="false">
                                                                                            <i
                                                                                                class="ti ti-dots-vertical"></i>
                                                                                        </button>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#">Delete</a>
                                                                                            </li>
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#">Hide</a>
                                                                                            </li>
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#">Edit</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="rounded border">
                                                                            <div
                                                                                class="p-3 d-flex align-items-top flex-wrap">
                                                                                <div class="me-2">
                                                                                    <span
                                                                                        class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="../assets/images/faces/9.jpg"
                                                                                            alt="">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-fill">
                                                                                    <p class="mb-1 fw-semibold lh-1">
                                                                                        You</p>
                                                                                    <p class="fs-11 mb-2 text-muted">
                                                                                        22, Dec - 11:22PM</p>
                                                                                    <p class="fs-12 text-muted mb-1">
                                                                                        Shared pictures with 3 of your
                                                                                        friends
                                                                                        <span>Maya,Jacob,Amanda</span>.
                                                                                    </p>
                                                                                    <div
                                                                                        class="d-flex lh-1 justify-content-between mb-3">
                                                                                        <div>
                                                                                            <a
                                                                                                href="javascript:void(0);">
                                                                                                <span
                                                                                                    class="avatar avatar-md me-1">
                                                                                                    <img src="../assets/images/media/media-40.jpg"
                                                                                                        alt="">
                                                                                                </span>
                                                                                            </a>
                                                                                            <a
                                                                                                href="javascript:void(0);">
                                                                                                <span
                                                                                                    class="avatar avatar-md me-1">
                                                                                                    <img src="../assets/images/media/media-45.jpg"
                                                                                                        alt="">
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="d-flex align-items-center justify-content-between mb-md-0 mb-2">
                                                                                        <div>
                                                                                            <div class="btn-list">
                                                                                                <button
                                                                                                    class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">
                                                                                                    Comment
                                                                                                </button>
                                                                                                <button
                                                                                                    class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                                                                    <i
                                                                                                        class="ri-thumb-up-line"></i>
                                                                                                </button>
                                                                                                <button
                                                                                                    class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                                                    <i
                                                                                                        class="ri-share-line"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex align-items-top">
                                                                                        <div>
                                                                                            <span
                                                                                                class="badge bg-success-transparent me-2">Nature</span>
                                                                                        </div>
                                                                                        <div class="dropdown">
                                                                                            <button
                                                                                                class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light"
                                                                                                type="button"
                                                                                                data-bs-toggle="dropdown"
                                                                                                aria-expanded="false">
                                                                                                <i
                                                                                                    class="ti ti-dots-vertical"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu">
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Delete</a>
                                                                                                </li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Hide</a>
                                                                                                </li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Edit</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="avatar-list-stacked d-block mt-4 text-end">
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="../assets/images/faces/1.jpg"
                                                                                                alt="img">
                                                                                        </span>
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="../assets/images/faces/5.jpg"
                                                                                                alt="img">
                                                                                        </span>
                                                                                        <span
                                                                                            class="avatar avatar-xs avatar-rounded">
                                                                                            <img src="../assets/images/faces/16.jpg"
                                                                                                alt="img">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="rounded border">
                                                                            <div
                                                                                class="p-3 d-flex align-items-top flex-wrap">
                                                                                <div class="me-2">
                                                                                    <span
                                                                                        class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="../assets/images/faces/9.jpg"
                                                                                            alt="">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-fill">
                                                                                    <p class="mb-1 fw-semibold lh-1">
                                                                                        You</p>
                                                                                    <p class="fs-11 mb-2 text-muted">
                                                                                        18, Dec - 12:28PM</p>
                                                                                    <p class="fs-12 text-muted mb-1">
                                                                                        Followed this author for top
                                                                                        class themes with best code you
                                                                                        can get in the market.</p>
                                                                                    <p class="mb-3 profile-post-link">
                                                                                        <a href="https://themeforest.net/user/spruko/portfolio"
                                                                                            target="_blank"
                                                                                            class="fs-12 text-primary">
                                                                                            <u>https://themeforest.net/user/spruko/portfolio</u>
                                                                                        </a>
                                                                                    </p>
                                                                                    <div
                                                                                        class="d-flex align-items-center justify-content-between mb-md-0 mb-2">
                                                                                        <div>
                                                                                            <div class="btn-list">
                                                                                                <button
                                                                                                    class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">
                                                                                                    Comment
                                                                                                </button>
                                                                                                <button
                                                                                                    class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                                                                    <i
                                                                                                        class="ri-thumb-up-line"></i>
                                                                                                </button>
                                                                                                <button
                                                                                                    class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                                                    <i
                                                                                                        class="ri-share-line"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex align-items-top">
                                                                                    <div>
                                                                                        <span
                                                                                            class="badge bg-secondary-transparent me-2">Travel</span>
                                                                                    </div>
                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light"
                                                                                            type="button"
                                                                                            data-bs-toggle="dropdown"
                                                                                            aria-expanded="false">
                                                                                            <i
                                                                                                class="ti ti-dots-vertical"></i>
                                                                                        </button>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#">Delete</a>
                                                                                            </li>
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#">Hide</a>
                                                                                            </li>
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#">Edit</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="rounded border">
                                                                            <div
                                                                                class="p-3 d-flex align-items-top flex-wrap">
                                                                                <div class="me-2">
                                                                                    <span
                                                                                        class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="../assets/images/faces/9.jpg"
                                                                                            alt="">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-fill">
                                                                                    <p class="mb-1 fw-semibold lh-1">
                                                                                        You</p>
                                                                                    <p class="fs-11 mb-2 text-muted">
                                                                                        02, Dec - 06:32AM</p>
                                                                                    <p class="fs-12 text-muted mb-0">
                                                                                        Lorem ipsum dolor sit amet
                                                                                        consectetur adipisicing elit.
                                                                                    </p>
                                                                                    <p class="fs-12 text-muted mb-3">
                                                                                        There are many variations of
                                                                                        passages 👏😍</p>
                                                                                    <div
                                                                                        class="d-flex align-items-center justify-content-between mb-md-0 mb-2">
                                                                                        <div>
                                                                                            <div class="btn-list">
                                                                                                <button
                                                                                                    class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">
                                                                                                    Comment
                                                                                                </button>
                                                                                                <button
                                                                                                    class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                                                                    <i
                                                                                                        class="ri-thumb-up-line"></i>
                                                                                                </button>
                                                                                                <button
                                                                                                    class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                                                    <i
                                                                                                        class="ri-share-line"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex align-items-top">
                                                                                    <div>
                                                                                        <span
                                                                                            class="badge bg-primary-transparent me-2">Fashion</span>
                                                                                    </div>
                                                                                    <div class="dropdown">
                                                                                        <button
                                                                                            class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light"
                                                                                            type="button"
                                                                                            data-bs-toggle="dropdown"
                                                                                            aria-expanded="false">
                                                                                            <i
                                                                                                class="ti ti-dots-vertical"></i>
                                                                                        </button>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#">Delete</a>
                                                                                            </li>
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#">Hide</a>
                                                                                            </li>
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#">Edit</a>
                                                                                            </li>
                                                                                        </ul>
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
                                                <div class="simplebar-placeholder" style="width: 0px; height: 0px;">
                                                </div>
                                            </div>
                                            <div class="simplebar-track simplebar-horizontal"
                                                style="visibility: hidden;">
                                                <div class="simplebar-scrollbar" style="width: 0px; display: none;">
                                                </div>
                                            </div>
                                            <div class="simplebar-track simplebar-vertical"
                                                style="visibility: hidden;">
                                                <div class="simplebar-scrollbar" style="height: 0px; display: none;">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="text-center">
                                                <button
                                                    class="btn btn-primary-light btn-wave waves-effect waves-light">Show
                                                    All</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade p-0 border-0" id="followers-tab-pane" role="tabpanel"
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
                                            <a href="../assets/images/media/media-40.jpg" class="glightbox card"
                                                data-gallery="gallery1">
                                                <img src="../assets/images/media/media-40.jpg" alt="image">
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
