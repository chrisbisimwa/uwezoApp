<div class="row">
    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Nouvel événement</div>
            </div>
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-xl-12">
                        <label for="event-title" class="form-label">Titre</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="event-title"
                            wire:model="title" placeholder="Event Title" required>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="col-xl-12">
                    <label class="form-label">Event description</label>
                    <br>
                    <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror" cols="100" rows="10"></textarea>
                    {{-- <input type="hidden" wire:model="description" class="form-control @error('description') is-invalid @enderror"> --}}
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                     <div class="relative mt-4" wire:ignore>

                        <div id="editor" wire:model="description"></div>
                    </div>
                </div>


                    <div class="col-xl-12">
                        <label class="form-label">Event Location</label>
                        <input type="text" wire:model="location" class="form-control @error('location') is-invalid @enderror">
                        @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="relative mt-4" wire:ignore>

                            <div id="editor" wire:model="location"></div>
                        </div>
                    </div>
                    <div class="row tm-3">
                        <div class="col-xl-6">
                        <label for="form-label">Date de début :</label>
                        <input type="datetime-local" class="form-control" wire:model="start_date" id="editor" name="start-date">
                         </div>
                        <div class="col-xl-6">
                        <label for="form-label">Date de fin :</label>
                        <input type="datetime-local" class="form-control" wire:model="end_date" id="editor" name="end-date">
                    </div>
                    </div>
                    
                    <div class="col-xl-12">
                        <label class="form-label">Type d'organisateur</label>
                        <select  class="form-control" wire:model.live="typeOrganisateur">
                            <option value="">-- Sélectionnez un type --</option>
                            <option value="externe">Organisateur Externe</option>
                            <option value="artiste">Artiste</option>
                        </select>
                    </div>
                    <!-- Section pour l'Organisateur -->
                    @if ($typeOrganisateur==="externe")
                    <div id="organizerSection" class="mt-4" >
                        <div class="col-xl-12">
                            <label class="form-label">Organisateur</label>
                            <input type="text" id="organizer" class="form-control" wire:model="organizer" placeholder="Organizer Event" >
                        </div>
                        <div class="row mt-3">
                            <div class="col-xl-6">
                                <label class="form-label">Téléphone/Contact</label>
                                <input type="text" id="organizer_phone" class="form-control" wire:model="organizer_phone" placeholder="organizer Pphone" >
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label">Adresse Mail</label>
                                <input type="email" id="organizer_email" class="form-control" wire:model="organizer_email" placeholder="Mail Organizer" >
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    <!-- Section pour les Artiste -->
                    @if($typeOrganisateur==="artiste")
                    <div id="articlesSection" class="mt-4" >
                        <label class="form-label">Artites disponible</label>
                        <select class="form-control" id="articlesList" wire:model="artist_id" name="artist-id">
                            <!-- Les articles seront injectés ici -->
                            @foreach ($artists as $artist)
                                        <option  value="{{ $artist->id }}">{{ $artist->nom }}</option>
                                    @endforeach
                        </select>
                    </div>
                    @endif
                    
                    {{-- <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const typeSelector = document.getElementById('typeSelector');
                            const organizerSection = document.getElementById('organizerSection');
                            const articlesSection = document.getElementById('articlesSection');
                            const articlesList = document.getElementById('articlesList');
                            const artistes = @json($artists);
                            // Fonction pour afficher ou masquer les sections
                            typeSelector.addEventListener('change', function () {
                                const selectedType = typeSelector.value;
                                if (selectedType === 'organisateur') {
                                    organizerSection.style.display = 'block';
                                    articlesSection.style.display = 'none';
                                } else if (selectedType === 'artiste') {
                                    organizerSection.style.display = 'none';
                                    articlesSection.style.display = 'block';
                                    // Injecter la liste des articles
                                    //articlesList.innerHTML = artists.map(artist => `<select class="form-control" >${artists.nom}</select>`).join('');
                                } else {
                                    organizerSection.style.display = 'none';
                                    articlesSection.style.display = 'none';
                                }
                            });
                        });
                    </script>      --}}            
                    
            </div>
            <div class="card-footer">
               
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">
                    Actions
                </div>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="btn-list text-end">

                            <button type="button" class="btn btn-sm btn-primary"
                                wire:click="saveEvent()">Enregistrer</button>
                            <button type="button" wire:click="cancel()" class="btn btn-sm btn-light">Annuler</button>
                        </div>
                    </li>
                    {{-- <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">

                            <div class="col-xl-12">
                                <label for="event-category" class="form-label">Completed Status</label>

                                <select class="form-control" data-trigger name="choices-single-default"
                                    wire:model="status" id="choices-single-default">
                                    <option value="upcoming">A venir</option>
                                    <option value="ongoing">Encours</option>
                                    <option value="completed">Terminé</option>
                                </select>


                            </div>
                        </div>
                    </li> --}}

                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">
                            <div class="col-xl-12">
                                <label for="event-category" class="form-label">Event Category</label>

                                <select class="form-control" name="choices-multiple-remove-button"
                                    wire:model="selectedCategories" id="choices-multiple-remove-button" multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>


                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">
                            <div class="col-xl-12">
                                <label for="image_path" class="form-label">Image Path</label>

                                @if ($image_path && $image_path->isValid())
                                    <div class="card custom-card product-card">
                                        <div class="card-body">
                                            <a href="javascript:void(0);" class="product-image">
                                                <img src="{{ asset('back-office-assets/images/ecommerce/png/2.png') }}"
                                                    class="card-img mb-3" alt="...">
                                            </a>
                                            <div class="product-icons" style="cursor: pointer;">
                                                <a wire:click="removeImage()" class="wishlist btn-delete"><i
                                                        class="ri-close-line"></i></a>
                                            </div>

                                        </div>

                                    </div>
                                @else
                                    <input type="file" wire:model="image_path"
                                        class=" @error('image_path') is-invalid @enderror">

                                    @error('image_path')
                                        <span class="text-sm text-red-500 italic" style="color: red;" role="alert">{{ $message }}</span>
                                    @enderror
                                   

                                    <div wire:loading wire:target="image_path" class="text-sm text-gray-500 italic">
                                        Uploading...</div>
                                @endif





                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>

{{-- @push('quilEditor')
    <script>
        var editor = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline'],
                    [{
                        'header': 1
                    }, {
                        'header': 2
                    }],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    ['image', 'link'],
                    ['align', {
                        'align': 'center'
                    }],
                    ['clean']
                ]
            }
        });

        editor.getModule('toolbar').addHandler('image', function() {
            @this.set('content', editor.root.innerHTML);

            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.click();

            input.onchange = function() {
                var file = input.files[0];
                if (file) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        var base64Data = event.target.result;

                        @this.uploadImage(base64Data);
                    };
                    // Read the file as a data URL (base64)
                    reader.readAsDataURL(file);
                }
            };
        });

        let previousImages = [];

        editor.on('text-change', function(delta, oldDelta, source) {
            var currentImages = [];

            var container = editor.container.firstChild;

            container.querySelectorAll('img').forEach(function(img) {
                currentImages.push(img.src);
            });

            var removedImages = previousImages.filter(function(image) {
                return !currentImages.includes(image);
            });

            removedImages.forEach(function(image) {
                @this.deleteImage(image);
                console.log('Image removed:', image);
            });

            // Update the previous list of images
            previousImages = currentImages;

            @this.set('description', editor.root.innerHTML);
        });

        Livewire.on('eventimageUploaded', function(imagePaths) {
            if (Array.isArray(imagePaths) && imagePaths.length > 0) {
                var imagePath = imagePaths[0]; // Extract the first image path from the array
                console.log('Received imagePath:', imagePath);

                if (imagePath && imagePath.trim() !== '') {
                    var range = editor.getSelection(true);
                    editor.insertText(range ? range.index : editor.getLength(), '\n', 'user');
                    editor.insertEmbed(range ? range.index + 1 : editor.getLength(), 'image', imagePath);
                } else {
                    console.warn('Received empty or invalid imagePath');
                }
            } else {
                console.warn('Received empty or invalid imagePaths array');
            }
        });
    </script>
@endpush --}}
