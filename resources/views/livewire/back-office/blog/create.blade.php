<div class="row">
    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">New Blog</div>
            </div>
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-xl-12">
                        <label for="blog-title" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="blog-title" placeholder="Blog Title">
                    </div>



                    <div class="col-xl-6">
                        <label for="publish-date" class="form-label">Publish Date</label>
                        <input type="text" class="form-control flatpickr-input" id="publish-date"
                            placeholder="Choose date" readonly="readonly">
                    </div>
                    <div class="col-xl-6">
                        <label for="publish-time" class="form-label">Publish Time</label>
                        <input type="text" class="form-control flatpickr-input" id="publish-time"
                            placeholder="Choose time" readonly="readonly">
                    </div>

                    
                    <div class="col-xl-12">
                        <label class="form-label">Blog Content</label>
                        <div class="relative mt-4" wire:ignore>
                            <div id="editor" wire:model="content"></div>
                        </div>
                    </div>
                    <div class="col-xl-12 blog-images-container">
                        <label for="blog-author-email" class="form-label">Blog Images</label>
                        <div class="filepond--root blog-images filepond--hopper"
                            data-style-button-remove-item-position="left"
                            data-style-button-process-item-position="right" data-style-load-indicator-position="right"
                            data-style-progress-indicator-position="right" data-style-button-remove-item-align="false"
                            style="height: 76px;"><input class="filepond--browser" type="file"
                                id="filepond--browser-nrpmorg9z" name="filepond"
                                aria-controls="filepond--assistant-nrpmorg9z"
                                aria-labelledby="filepond--drop-label-nrpmorg9z" multiple=""><a
                                class="filepond--credits" aria-hidden="true" href="https://pqina.nl/"
                                target="_blank" rel="noopener noreferrer"
                                style="transform: translateY(68px);">Powered by PQINA</a>
                            <div class="filepond--drop-label"
                                style="transform: translate3d(0px, 0px, 0px); opacity: 1;"><label
                                    for="filepond--browser-nrpmorg9z" id="filepond--drop-label-nrpmorg9z"
                                    aria-hidden="true">Drag &amp; Drop your files or <span
                                        class="filepond--label-action" tabindex="0">Browse</span></label></div>
                            <div class="filepond--list-scroller" style="transform: translate3d(0px, 60px, 0px);">
                                <ul class="filepond--list" role="list"></ul>
                            </div>
                            <div class="filepond--panel filepond--panel-root" data-scalable="true">
                                <div class="filepond--panel-top filepond--panel-root"></div>
                                <div class="filepond--panel-center filepond--panel-root"
                                    style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.6, 1);"></div>
                                <div class="filepond--panel-bottom filepond--panel-root"
                                    style="transform: translate3d(0px, 68px, 0px);"></div>
                            </div><span class="filepond--assistant" id="filepond--assistant-nrpmorg9z" role="status"
                                aria-live="polite" aria-relevant="additions"></span>
                            <div class="filepond--drip"></div>
                            <fieldset class="filepond--data"></fieldset>
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
                            
                            <button type="button" class="btn btn-sm btn-primary">Enregistrer</button>
                            <button type="button" wire:click="cancel()" class="btn btn-sm btn-light">Annuler</button>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">

                            <div class="col-xl-12">
                                <label for="blog-category" class="form-label">Published Status</label>

                                <select class="form-control" data-trigger name="choices-single-default"
                                    id="choices-single-default">

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
                                    id="choices-multiple-remove-button" multiple>
                                    <option value="Choice 1" selected>Choice 1</option>
                                    <option value="Choice 2">Choice 2</option>
                                    <option value="Choice 3">Choice 3</option>
                                    <option value="Choice 4">Choice 4</option>
                                </select>


                            </div>
                        </div>


                    
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
