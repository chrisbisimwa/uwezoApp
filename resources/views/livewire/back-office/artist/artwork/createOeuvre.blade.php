<div class="modal-content">
    <div class="modal-header">
        <h6 class="modal-title" id="exampleModalXlLabel">Ajouter une
            oeuvre</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row gy-3">
            <div class="col-xl-6">
                <label for="type-oeuvre-add" class="form-label">Type d'oeuvre</label>
                <select class="form-control @error('type') is-invalid @enderror" data-trigger name="type-oeuvre-add"
                    id="type-oeuvre-add" wire:model.live="type">
                    <option value="">Sélectionner</option>
                    <option value="Image">Image</option>
                    <option value="Vidéo">Vidéo</option>
                    <option value="Audio">Musique</option>
                </select>
                @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label for="oeuvre-name-add" class="form-label">Nom de l'oeuvre</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror " id="oeuvre-name-add"
                    placeholder="Name" wire:model="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label for="date-oeuvre-add" class="form-label">Date de sortie</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" id="date-oeuvre-add"
                    placeholder="Date de sortie", wire:model="date">
                @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label for="status-oeuvre-add" class="form-label">Status</label>
                <select class="form-control @error('status') is-invalid @enderror" data-trigger name="status-oeuvre-add"
                    id="status-oeuvre-add" wire:model="status">
                    <option value="">Sélectionner</option>
                    <option value="Activé">Activé</option>
                    <option value="Désactivé">Désactivé</option>
                </select>
                @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="col-xl-12">
                <label for="oeuvre-description-add" class="form-label">Description</label>
                <textarea class="form-control" id="oeuvre-description-add" rows="5" wire:model="description"></textarea>
                <label for="oeuvre-description-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Description
                    should not exceed 500 letters</label>
            </div>

            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <label for="image-oeuvre-add" class="form-label">image</label>
                                <input type="file" class="form-control @error('photo') is-invalid @enderror"
                                    id="image-oeuvre-add" wire:model="photo">

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            @if ($type == 'Vidéo' || $type == 'Audio')
                                <div class="col-xl-12">
                                    <label for="source-oeuvre-add" class="form-label">URL</label>
                                    <input type="text" class="form-control @error('source') is-invalid @enderror"
                                        id="source-oeuvre-add" wire:model="source">

                                    @error('source')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif
                        </div>

                    </div>
                    <div class="col-xl-6">
                        @if ($photo)
                        <center>
                            <img src="{{ $photo->temporaryUrl() }}" style="width: 30%;" class="img-fluid"
                            alt="preview">
                        </center>
                            
                        @endif
                    </div>

                </div>

            </div>


        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" wire:click="addNewArtwork">Ajouter</button>
    </div>
</div>
