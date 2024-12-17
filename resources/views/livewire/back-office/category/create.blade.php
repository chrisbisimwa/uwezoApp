<div class="card custom-card" wire:ignore.self>
    <div class="card-header justify-content-between">
        <div class="card-title">
            Ajouter ou modifier une catégorie
        </div>
        
    </div>
    <div class="card-body">

        <div class="row gy-3">
            <div class="col-xl-12">
                <label for="input-noradius" class="form-label ">Nom de la
                    catégorie</label>
                <input type="text" class="form-control rounded-0 @error('categoryName') is-invalid @enderror"  placeholder="Nom de la catégorie"
                    wire:model="categoryName" required>
                @error('categoryName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-xl-12">
                <label for="input-rounded" class="form-label">Description (Optionel)</label>
                <textarea  cols="80" class="form-control"  placeholder="Description"
                    wire:model="categoryDescription" > </textarea>
            </div>

        </div>


    </div>
    <div class="card-footer">
        <div class="btn-list text-end">

            <button type="button" class="btn btn-sm btn-primary" wire:click="save()">Enregistrer</button>
            <button type="button" wire:click="resetForm()" class="btn btn-sm btn-light">Annuler</button>
        </div>
    </div>

</div>
