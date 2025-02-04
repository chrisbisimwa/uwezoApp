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
                        {{-- <p class="fs-12 text-fixed-white mb-4 op-5">
                            <span class="me-3"><i class="ri-building-line me-1 align-middle"></i>Georgia</span>
                            <span><i class="ri-map-pin-line me-1 align-middle"></i>Washington D.C</span>
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
                        @if ($artist->soundcloud_link)
                            <a href="{{ $artist->soundcloud_link }}"
                                class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light"
                                target="_blank">
                                <i class="ri-soundcloud-line fw-semibold"></i>
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
                                            aria-controls="followers-tab-pane" aria-selected="false" tabindex="-1"><i
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

                                <div class="tab-pane show active fade p-0 border-0" id="followers-tab-pane"
                                    role="tabpanel" aria-labelledby="followers-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="table-responsive border border-bottom-0">
                                                <table class="table text-nowrap table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nom de l'oeuvre</th>
                                                            <th scope="col">Type</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="files-list">
                                                        @forelse ($artist->oeuvres as $oeuvre)
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar avatar-xs">
                                                                                @if ($oeuvre->type == 'Image')
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        class="svg-primary"
                                                                                        enable-background="new 0 0 24 24"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path opacity="0.3"
                                                                                            d="M19 2H5a3.009 3.009 0 0 0-3 3v8.86l3.88-3.88a3.075 3.075 0 0 1 4.24 0l2.871 2.887.888-.888a3.008 3.008 0 0 1 4.242 0L22 15.86V5a3.009 3.009 0 0 0-3-3z">
                                                                                        </path>
                                                                                        <path opacity="1"
                                                                                            d="M10.12 9.98a3.075 3.075 0 0 0-4.24 0L2 13.86V19a3.009 3.009 0 0 0 3 3h14c.815 0 1.595-.333 2.16-.92L10.12 9.98z">
                                                                                        </path>
                                                                                        <path opacity="0.1"
                                                                                            d="m22 15.858-3.879-3.879a3.008 3.008 0 0 0-4.242 0l-.888.888 8.165 8.209c.542-.555.845-1.3.844-2.076v-3.142z">
                                                                                        </path>
                                                                                    </svg>
                                                                                @elseif($oeuvre->type == 'Vidéo')
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        class="svg-secondary"
                                                                                        enable-background="new 0 0 24 24"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path opacity="0.3"
                                                                                            d="M14 18H5a3.003 3.003 0 0 1-3-3V9a3.003 3.003 0 0 1 3-3h9a3.003 3.003 0 0 1 3 3v6a3.003 3.003 0 0 1-3 3z">
                                                                                        </path>
                                                                                        <path opacity="1"
                                                                                            d="M21.895 7.554a1 1 0 0 0-1.342-.449l-3.564 1.783c.001.038.01.073.011.112v6c0 .039-.01.074-.011.112l3.564 1.783A1 1 0 0 0 22 16V8a1 1 0 0 0-.105-.446z">
                                                                                        </path>
                                                                                    </svg>
                                                                                @elseif($oeuvre->type == 'Audio')
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        class="svg-info"
                                                                                        enable-background="new 0 0 24 24"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path opacity="0.3"
                                                                                            d="M6 21H3a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h3a3.003 3.003 0 0 1 3 3v2a3.003 3.003 0 0 1-3 3zm15 0h-3a3.003 3.003 0 0 1-3-3v-2a3.003 3.003 0 0 1 3-3h3a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1z">
                                                                                        </path>
                                                                                        <path opacity="1"
                                                                                            d="M12 3C6.477 3 2 7.477 2 13v1a1 1 0 0 1 1-1h1a8 8 0 0 1 16 0h1a1 1 0 0 1 1 1v-1c0-5.523-4.477-10-10-10z">
                                                                                        </path>
                                                                                    </svg>
                                                                                @endif
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            {{ $oeuvre->nom }}
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <td>{{ $oeuvre->type }}</td>
                                                                <td>{{ $oeuvre->date }}</td>
                                                                <td>{{ $oeuvre->statut }}</td>
                                                                <td>
                                                                    <div class="hstack gap-2 fs-15">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                                class="ri-eye-line"></i></a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                                class="ri-delete-bin-line"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                        @endforelse


                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="5">
                                                                <nav aria-label="Page navigation">
                                                                    <ul class="pagination justify-content-end mb-0">
                                                                        <li class="page-item disabled"><a
                                                                                class="page-link"
                                                                                href="#">Previous</a></li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">1</a></li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">2</a></li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">Next</a></li>
                                                                    </ul>
                                                                </nav>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade p-0 border-0" id="gallery-tab-pane" role="tabpanel"
                                    aria-labelledby="gallery-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="table-responsive border border-bottom-0">
                                                <table class="table text-nowrap table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nom de l'oeuvre</th>
                                                            <th scope="col">Type</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="files-list">
                                                        @forelse ($artist->oeuvres as $oeuvre)
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar avatar-xs">
                                                                                @if ($oeuvre->type == 'Image')
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        class="svg-primary"
                                                                                        enable-background="new 0 0 24 24"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path opacity="0.3"
                                                                                            d="M19 2H5a3.009 3.009 0 0 0-3 3v8.86l3.88-3.88a3.075 3.075 0 0 1 4.24 0l2.871 2.887.888-.888a3.008 3.008 0 0 1 4.242 0L22 15.86V5a3.009 3.009 0 0 0-3-3z">
                                                                                        </path>
                                                                                        <path opacity="1"
                                                                                            d="M10.12 9.98a3.075 3.075 0 0 0-4.24 0L2 13.86V19a3.009 3.009 0 0 0 3 3h14c.815 0 1.595-.333 2.16-.92L10.12 9.98z">
                                                                                        </path>
                                                                                        <path opacity="0.1"
                                                                                            d="m22 15.858-3.879-3.879a3.008 3.008 0 0 0-4.242 0l-.888.888 8.165 8.209c.542-.555.845-1.3.844-2.076v-3.142z">
                                                                                        </path>
                                                                                    </svg>
                                                                                @elseif($oeuvre->type == 'Vidéo')
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        class="svg-secondary"
                                                                                        enable-background="new 0 0 24 24"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path opacity="0.3"
                                                                                            d="M14 18H5a3.003 3.003 0 0 1-3-3V9a3.003 3.003 0 0 1 3-3h9a3.003 3.003 0 0 1 3 3v6a3.003 3.003 0 0 1-3 3z">
                                                                                        </path>
                                                                                        <path opacity="1"
                                                                                            d="M21.895 7.554a1 1 0 0 0-1.342-.449l-3.564 1.783c.001.038.01.073.011.112v6c0 .039-.01.074-.011.112l3.564 1.783A1 1 0 0 0 22 16V8a1 1 0 0 0-.105-.446z">
                                                                                        </path>
                                                                                    </svg>
                                                                                @elseif($oeuvre->type == 'Audio')
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        class="svg-info"
                                                                                        enable-background="new 0 0 24 24"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path opacity="0.3"
                                                                                            d="M6 21H3a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h3a3.003 3.003 0 0 1 3 3v2a3.003 3.003 0 0 1-3 3zm15 0h-3a3.003 3.003 0 0 1-3-3v-2a3.003 3.003 0 0 1 3-3h3a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1z">
                                                                                        </path>
                                                                                        <path opacity="1"
                                                                                            d="M12 3C6.477 3 2 7.477 2 13v1a1 1 0 0 1 1-1h1a8 8 0 0 1 16 0h1a1 1 0 0 1 1 1v-1c0-5.523-4.477-10-10-10z">
                                                                                        </path>
                                                                                    </svg>
                                                                                @endif
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            {{ $oeuvre->nom }}
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <td>{{ $oeuvre->type }}</td>
                                                                <td>{{ $oeuvre->date }}/td>
                                                                <td>{{ $oeuvre->statut }}/td>
                                                                <td>
                                                                    <div class="hstack gap-2 fs-15">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                                class="ri-eye-line"></i></a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                                class="ri-delete-bin-line"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                        @endforelse


                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="5">
                                                                <nav aria-label="Page navigation">
                                                                    <ul class="pagination justify-content-end mb-0">
                                                                        <li class="page-item disabled"><a
                                                                                class="page-link"
                                                                                href="#">Previous</a></li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">1</a></li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">2</a></li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">Next</a></li>
                                                                    </ul>
                                                                </nav>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
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
