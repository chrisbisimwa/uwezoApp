<div class="row">
    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Modification l'article</div>
            </div>
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-xl-12">
                        <label for="blog-title" class="form-label">Titre</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="blog-title"
                            wire:model="title" placeholder="Blog Title" required>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>





                    <div class="col-xl-12">
                        <label class="form-label">Blog Content</label>
                        <input type="hidden" wire:model="content" class="form-control @error('content') is-invalid @enderror">
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="relative mt-4" wire:ignore>

                            <div id="editor" wire:model="content"></div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="card-footer">
                {{-- <div class="btn-list text-end">
                    <button type="button" class="btn btn-sm btn-light">Save As Draft</button>
                    <button type="button" class="btn btn-sm btn-primary">Post Blog</button>
                </div> --}}
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
                                wire:click="savePost()">Enregistrer</button>
                            <button type="button" wire:click="cancel()" class="btn btn-sm btn-light">Annuler</button>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">

                            <div class="col-xl-12">
                                <label for="blog-category" class="form-label">Published Status</label>

                                <select class="form-control" data-trigger name="choices-single-default"
                                    wire:model="status" id="choices-single-default">

                                    <option value="draft">Brouillon</option>
                                    <option value="published">Publié</option>
                                </select>


                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">
                            <div class="col-xl-12">
                                <label for="blog-category" class="form-label">Blog Category</label>

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
                                <label for="featured_image" class="form-label">Featured Image</label>

                                @if ($featured_image && $featured_image->isValid())
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
                                    <input type="file" wire:model="featured_image"
                                        class=" @error('featured_image') is-invalid @enderror">

                                    @error('featured_image')
                                        <span class="text-sm text-red-500 italic" style="color: red;" role="alert">{{ $message }}</span>
                                    @enderror
                                   

                                    <div wire:loading wire:target="featured_image" class="text-sm text-gray-500 italic">
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


@push('quilEditor')
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

            @this.set('content', editor.root.innerHTML);
        });

        Livewire.on('blogimageUploaded', function(imagePaths) {
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
@endpush
