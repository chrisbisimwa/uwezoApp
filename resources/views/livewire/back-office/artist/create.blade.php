<div class="card custom-card shadow-none mb-0 border-0">
    <div class="card-body p-0">
        <div class="row gy-3">
            <div class="col-xl-6">
                <label for="product-name-add" class="form-label">Nom</label>
                <input type="text" class="form-control" id="product-name-add" placeholder="Name">
            </div>
            <div class="col-xl-6">
                <label for="product-name-add" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="product-name-add" placeholder="Name">
            </div>
            <div class="col-xl-6">
                <label for="product-category-add" class="form-label">Categorie</label>
                <select class="form-control" data-trigger name="product-category-add" id="product-category-add">
                    <option value="">Categorie</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="col-xl-6">
                <label for="product-gender-add" class="form-label">Gender</label>
                <select class="form-control" data-trigger name="product-gender-add" id="product-gender-add">
                    <option value="">Sélectionner</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
            </div>
            <div class="col-xl-12">
                <label for="product-size-add" class="form-label">Numéro
                    d'enregistrement</label>
                <input type="text" class="form-control" id="product-name-add" placeholder="Name">
            </div>
            <div class="col-xl-12">
                <label for="product-description-add" class="form-label">Biographie</label>
                <textarea class="form-control" id="product-description-add" rows="5"></textarea>
                <label for="product-description-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Description
                    should
                    not exceed 500 letters</label>
            </div>
            <div class="col-xl-6">
                <label for="product-size-add" class="form-label">Numéro de téléphone</label>
                <input type="text" class="form-control" id="product-name-add" placeholder="Name">
            </div>
            <div class="col-xl-6">
                <label for="product-size-add" class="form-label">Email</label>
                <input type="text" class="form-control" id="product-name-add" placeholder="Name">
            </div>
            <div class="col-xl-12">
                <label for="product-size-add" class="form-label">Facebook</label>
                <input type="text" class="form-control" id="product-name-add" placeholder="Name">
            </div>
            <div class="col-xl-12">
                <label for="product-size-add" class="form-label">Twitter</label>
                <input type="text" class="form-control" id="product-name-add" placeholder="Name">
            </div>
            <div class="col-xl-12">
                <label for="product-size-add" class="form-label">Instagram</label>
                <input type="text" class="form-control" id="product-name-add" placeholder="Name">
            </div>
            <div class="col-xl-12">
                <label for="product-size-add" class="form-label">SoundCloud</label>
                <input type="text" class="form-control" id="product-name-add" placeholder="Name">
            </div>
            <div class="col-xl-12">
                <label for="product-size-add" class="form-label">Youtube</label>
                <input type="text" class="form-control" id="product-name-add" placeholder="Name">
            </div>




        </div>
    </div>
</div>
