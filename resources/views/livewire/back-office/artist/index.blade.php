<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card mt-4">
            <div class="card-body">
                <div class="contact-header">
                    <div class="d-sm-flex d-block align-items-center justify-content-between">
                        <div class="h5 fw-semibold mb-0">Gérer les artistes</div>
                        <div class="d-flex mt-sm-0 mt-2 align-items-center">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0"
                                    placeholder="Rechercher un artiste..." aria-describedby="search-contact-member"
                                    wire:model.live="searchTerm">
                                <button class="btn btn-light" type="button" id="search-contact-member"><i
                                        class="ri-search-line text-muted"></i></button>
                            </div>
                            <div class="dropdown ms-2">
                                <button class="btn btn-icon btn-primary-light btn-wave waves-effect waves-light"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Delete All</a></li>
                                    <li><a class="dropdown-item" href="#">Copy All</a></li>
                                    <li><a class="dropdown-item" href="#">Move To</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-icon btn-secondary-light ms-2" data-bs-toggle="tooltip" wire:click="goToAddArtist"
                                data-bs-placement="top" data-bs-title="Ajouter un artiste"><i class="ri-add-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @forelse($artists as $artist)
        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="card custom-card">
                <div class="card-body contact-action">
                    <div class="contact-overlay"></div>
                    <div class="d-flex align-items-top ">
                        <div class="d-flex flex-fill flex-wrap gap-2">
                            @if ($artist->photo)
                            <div class="avatar avatar-xl avatar-rounded me-3">*
                                
                                    <img style="width: 40px" src="{{ asset('storage/uploads/' . $artist->photo) }}"
                                        alt="">
                                
                            </div>
                            @else
                            <div class="avatar avatar-xl avatar-rounded me-3 bg-primary">
                                {{strtoupper(substr($artist->nom, 0, 1))}}{{strtoupper(substr($artist->prenom, 0, 1))}}
                            </div>
                                
                                @endif
                            <div>
                                <h6 class="mb-1 fw-semibold">
                                    {{ $artist->nom }} {{ $artist->prenom }}
                                </h6>
                                <p class="mb-1 text-muted contact-mail text-truncate">{{$artist->genre}}</p>
                                <p class="fw-semibold fs-11 mb-0 text-primary">
                                    {{ $artist->category->name }}
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                        <button type="button" class="btn btn-sm btn-light contact-hover-btn" wire:click="goToShowArtist({{ $artist->id }})">
                            Voir l'artiste
                        </button>
                        <div class="dropdown contact-hover-dropdown">
                            <button class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i
                                            class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                        Call</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <h5>Aucun artiste disponible pour le moment !</h5>
                    </div>
                </div>
            </div>
        </div>
    @endforelse



    {{ $artists->links('vendor.livewire.backend') }}





</div>
