<div class="card custom-card shadow-none mb-0 border-0">
    <div class="card-body p-0">
        <div class="row gy-3">
            <div class="col-xl-6">
                <label for="product-name-add" class="form-label">Nom</label>
                <input type="text" class="form-control @error('nom') is-invalid @enderror" id="product-name-add"
                    placeholder="Nom" wire:model="nom">
                    @error('nom')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label for="product-name-add" class="form-label">Prénom</label>
                <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="product-name-add" placeholder="Prénom" wire:model="prenom">
                @error('prenom')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label for="product-category-add" class="form-label">Categorie</label>
                <select class="form-control @error('category_id') is-invalid @enderror" data-trigger name="product-category-add" id="product-category-add" wire:model="category_id">
                    <option value="">Sélectionner</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>
                @error('category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label for="product-gender-add" class="form-label">Sexe</label>
                <select class="form-control @error('genre') is-invalid @enderror" data-trigger name="product-gender-add" id="product-gender-add" wire:model="genre">
                    <option value="">Sélectionner</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
                @error('genre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label for="product-size-add" class="form-label">Numéro
                    d'enregistrement</label>
                <input type="text" class="form-control @error('numeroCerticat') is-invalid @enderror" placeholder="Numéro d'enregistrement" wire:model="numeroCerticat">
                @error('numeroCerticat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label for="product-size-add" class="form-label">Date de naissance</label>
                <input type="date" class="form-control @error('datenaissance') is-invalid @enderror" placeholder="Date de naissance" wire:model="datenaissance">
                @error('datenaissance')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-12">
                <label for="product-description-add" class="form-label">Biographie</label>
                <textarea class="form-control" id="product-description-add" rows="5" wire:model="biography"></textarea>
                <label for="product-description-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*La description ne doit pas dépasser 500 lettres</label>
            </div>
            <div class="col-xl-6">
                <label for="product-size-add" class="form-label">Numéro de téléphone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="product-name-add" placeholder="Téléphone" wire:model="phone">
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label for="product-size-add" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="product-name-add" placeholder="Email" wire:model="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-12">
                <label for="product-size-add" class="form-label">Photo</label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" wire:model.live="photo">
                @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label for="product-size-add" class="form-label">Facebook</label>
                <input type="text" class="form-control"  placeholder="Facebook" wire:model="facebook_link">
            </div>
            <div class="col-xl-6">
                <label for="product-size-add" class="form-label">Twitter</label>
                <input type="text" class="form-control"  placeholder="Twiter" wire:model="twitter_link">
            </div>
            <div class="col-xl-6">
                <label for="product-size-add" class="form-label">Instagram</label>
                <input type="text" class="form-control"  placeholder="Instagram" wire:model="instagram_link">
            </div>
            <div class="col-xl-6">
                <label for="product-size-add" class="form-label">Spotify</label>
                <input type="text" class="form-control"  placeholder="Spotify" wire:model="spotify_link">
            </div>
            <div class="col-xl-6">
                <label for="product-size-add" class="form-label">Youtube</label>
                <input type="text" class="form-control"  placeholder="Youtube" wire:model="youtube_link">
            </div>
            <div class="col-xl-6">
                <label for="product-size-add" class="form-label">TikTok</label>
                <input type="text" class="form-control"  placeholder="TikTok" wire:model="tiktok_link">
            </div>




        </div>
    </div>
</div>

