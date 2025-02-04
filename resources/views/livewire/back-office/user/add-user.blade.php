<div class="modal-content">
    <div class="modal-header">
        <h6 class="modal-title" id="exampleModalXlLabel">Ajouter une
            oeuvre</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row gy-3">
            <div class="col-xl-6">
                <label for="oeuvre-name-add" class="form-label">Nom et prenom de l'utilisateur</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror " id="oeuvre-name-add"
                    placeholder="Name" wire:model="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label for="type-oeuvre-add" class="form-label">Rôle d'utilisateur</label>
                <select class="form-control @error('type') is-invalid @enderror" data-trigger name="type-oeuvre-add"
                    id="type-oeuvre-add" wire:model.live="type">
                    <option value="">Sélectionner</option>
                    <option value="admin">Administrateur</option>
                    <option value="user">Utilisateur simple</option>
                    <option value="artist">Vidéo</option>
                </select>
                @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-12">
                <label class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label class="form-label">Mot de passe</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" wire:model="password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label class="form-label">Confirmer le mot de passe</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                    wire:model="password_confirmation">
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            


            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <label for="image-oeuvre-add" class="form-label">Photo de profil</label>
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
        <button type="button" class="btn btn-primary" wire:click="save">Ajouter</button>
    </div>
</div>
