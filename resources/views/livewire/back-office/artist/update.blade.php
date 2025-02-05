<div class="row">
    <div class="col-xxl-4 col-xl-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-body p-0">
                <div class="d-sm-flex align-items-top p-4 border-bottom border-block-end-dashed main-profile-cover">
                    <div>
                        @if ($artist->photo)
                            <span class="avatar avatar-xxl avatar-rounded me-3">
                                <img src="{{ \Storage::url('uploads/'.$artist->photo) }}"alt="">
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
                                    class="ri-pencil-line me-1 align-middle d-inline-block"></i>Modifier</button>
                        </div>
                        <p class="mb-1 text-muted text-fixed-white op-7">{{ $artist->category->name }}</p>
                         {{--<p class="fs-12 text-fixed-white mb-4 op-5">
                            <span class="me-3"><i class="ri-building-line me-1 align-middle"></i>Georgia</span>
                            <span><i class="ri-map-pin-line me-1 align-middle"></i>Washingtons D.C</span>
                        </p> --}}
                        <div class="d-flex mb-0">
                            <div class="me-4">
                                <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">
                                    {{ count($artist->artworks) }}</p>
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
                    <p class="fs-15 mb-2 me-4 fw-semibold">Réseaux sociaux:</p>
                    <div class="btn-list mb-0">
                        @if ($artist->facebook_link)
                            <a href="{{ $artist->facebook_link }}"
                                class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light"
                                target="_blank">
                                <i class="ri-facebook-line fw-semibold"></i>
                            </a>
                        @endif
                        @if ($artist->twitter_link)
                            <a href="{{ $artist->twitter_link }}"
                                class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light"
                                target="_blank">
                                <i class="ri-twitter-line fw-semibold"></i>
                            </a>
                        @endif
                        @if ($artist->instagram_link)
                            <a href="{{ $artist->instagram_link }}"
                                class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light"
                                target="_blank">
                                <i class="ri-instagram-line fw-semibold"></i>
                            </a>
                        @endif
                        @if ($artist->tiktok_link)
                            <a href="{{ $artist->tiktok_link }}"
                                class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light"
                                target="_blank">
                                <i class="ri-tiktok-line fw-semibold"></i>
                            </a>
                        @endif
                        @if ($artist->soundcloud_link)
                            <a href="{{ $artist->soundcloud_link }}"
                                class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light"
                                target="_blank">
                                <i class="ri-spotify-line fw-semibold"></i>
                            </a>
                        @endif
                        @if ($artist->youtube_link)
                            <a href="{{ $artist->youtube_link }}"
                                class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light"
                                target="_blank">
                                <i class="ri-youtube-line fw-semibold"></i>
                            </a>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>
   
</div>
