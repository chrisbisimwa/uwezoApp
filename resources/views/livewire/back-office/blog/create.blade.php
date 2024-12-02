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
                    <div class="col-xl-12">
                        <label for="blog-category" class="form-label">Blog Category</label>

                        <select class="form-control" name="choices-multiple-remove-button"
                            id="choices-multiple-remove-button" multiple="" hidden="" tabindex="-1"
                            data-choice="active">
                            <option value="Choice 1">Choice 1</option>
                        </select>


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
                    <div class="col-xl-6">
                        <label for="product-status-add" class="form-label">Published Status</label>
                        <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                            aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                            <div class="choices__inner"><select class="form-control choices__input" data-trigger=""
                                    name="product-status-add" id="product-status-add" hidden="" tabindex="-1"
                                    data-choice="active">
                                    <option value="">Select</option>
                                </select>
                                <div class="choices__list choices__list--single">
                                    <div class="choices__item choices__placeholder choices__item--selectable"
                                        data-item="" data-id="1" data-value="" data-custom-properties="null"
                                        aria-selected="true">Select</div>
                                </div>
                            </div>
                            <div class="choices__list choices__list--dropdown" aria-expanded="false"><input
                                    type="text" class="choices__input choices__input--cloned" autocomplete="off"
                                    autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list"
                                    aria-label="Select" placeholder="Search">
                                <div class="choices__list" role="listbox">
                                    <div id="choices--product-status-add-item-choice-3"
                                        class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                        role="option" data-choice="" data-id="3" data-value=""
                                        data-select-text="Press to select" data-choice-selectable=""
                                        aria-selected="true">Select</div>
                                    <div id="choices--product-status-add-item-choice-1"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="1" data-value="Scheduled"
                                        data-select-text="Press to select" data-choice-selectable="">Hold</div>
                                    <div id="choices--product-status-add-item-choice-2"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="2" data-value="Published"
                                        data-select-text="Press to select" data-choice-selectable="">Published</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <label for="blog-tags" class="form-label">Blog Tags</label>
                        <div class="choices" data-type="select-multiple" role="combobox" aria-autocomplete="list"
                            aria-haspopup="true" aria-expanded="false">
                            <div class="choices__inner"><select class="form-control choices__input" name="blog-tags"
                                    id="blog-tags" multiple="" hidden="" tabindex="-1"
                                    data-choice="active">
                                    <option value="Landscape">Landscape</option>
                                    <option value="Top Blog">Top Blog</option>
                                </select>
                                <div class="choices__list choices__list--multiple">
                                    <div class="choices__item choices__item--selectable" data-item=""
                                        data-id="1" data-value="Landscape" data-custom-properties="null"
                                        aria-selected="true" data-deletable="">Landscape<button type="button"
                                            class="choices__button" aria-label="Remove item: 'Landscape'"
                                            data-button="">Remove item</button></div>
                                    <div class="choices__item choices__item--selectable" data-item=""
                                        data-id="2" data-value="Top Blog" data-custom-properties="null"
                                        aria-selected="true" data-deletable="">Top Blog<button type="button"
                                            class="choices__button" aria-label="Remove item: 'Top Blog'"
                                            data-button="">Remove item</button></div>
                                </div><input type="text" class="choices__input choices__input--cloned"
                                    autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox"
                                    aria-autocomplete="list" aria-label="false">
                            </div>
                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                <div class="choices__list" aria-multiselectable="true" role="listbox">
                                    <div id="choices--blog-tags-item-choice-1"
                                        class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                        role="option" data-choice="" data-id="1" data-value="Adventure"
                                        data-select-text="Press to select" data-choice-selectable=""
                                        aria-selected="true">Adventure</div>
                                    <div id="choices--blog-tags-item-choice-2"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="2" data-value="Blogger"
                                        data-select-text="Press to select" data-choice-selectable="">Blogger</div>
                                </div>
                            </div>
                        </div>
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
                    <div class="col-xl-12">
                        <label class="form-label">Blog Type</label>
                        <div class="d-flex align-items-center">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="blog-type" id="blog-free1"
                                    checked="">
                                <label class="form-check-label" for="blog-free1">
                                    Free
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="blog-type" id="blog-paid1">
                                <label class="form-check-label" for="blog-paid1">
                                    Paid
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="btn-list text-end">
                    <button type="button" class="btn btn-sm btn-light">Save As Draft</button>
                    <button type="button" class="btn btn-sm btn-primary">Post Blog</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">
                    Recent Blogs
                </div>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">
                            <span class="avatar avatar-xl me-1">
                                <img src="../assets/images/media/media-39.jpg" class="img-fluid" alt="...">
                            </span>
                            <div class="flex-fill">
                                <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Animals</a>
                                <p class="mb-1 popular-blog-content text-truncate">
                                    There are many variations of passages of Lorem Ipsum available
                                </p>
                                <span class="text-muted fs-11">24,Nov 2022 - 18:27</span>
                            </div>
                            <div>
                                <button aria-label="button" type="button"
                                    class="btn btn-icon btn-light btn-sm rtl-rotate"><i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">
                            <span class="avatar avatar-xl me-1">
                                <img src="../assets/images/media/media-56.jpg" class="img-fluid" alt="...">
                            </span>
                            <div class="flex-fill">
                                <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Travel</a>
                                <p class="mb-1 popular-blog-content text-truncate">
                                    Latin words, combined with a handful of model sentence
                                </p>
                                <span class="text-muted fs-11">28,Nov 2022 - 10:45</span>
                            </div>
                            <div>
                                <button aria-label="button" type="button"
                                    class="btn btn-icon btn-light btn-sm rtl-rotate"><i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">
                            <span class="avatar avatar-xl me-1">
                                <img src="../assets/images/media/media-54.jpg" class="img-fluid" alt="...">
                            </span>
                            <div class="flex-fill">
                                <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Interior</a>
                                <p class="mb-1 popular-blog-content text-truncate">
                                    Contrary to popular belief, Lorem Ipsum is not simply random
                                </p>
                                <span class="text-muted fs-11">30,Nov 2022 - 08:32</span>
                            </div>
                            <div>
                                <button aria-label="button" type="button"
                                    class="btn btn-icon btn-light btn-sm rtl-rotate"><i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">
                            <span class="avatar avatar-xl me-1">
                                <img src="../assets/images/media/media-52.jpg" class="img-fluid" alt="...">
                            </span>
                            <div class="flex-fill">
                                <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Nature</a>
                                <p class="mb-1 popular-blog-content text-truncate">
                                    It was popularised in the 1960s with the release of Letraset sheets containing
                                </p>
                                <span class="text-muted fs-11">3,Dec 2022 - 12:56</span>
                            </div>
                            <div>
                                <button aria-label="button" type="button"
                                    class="btn btn-icon btn-light btn-sm rtl-rotate"><i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">
                            <span class="avatar avatar-xl me-1">
                                <img src="../assets/images/media/media-74.jpg" class="img-fluid" alt="...">
                            </span>
                            <div class="flex-fill">
                                <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Health</a>
                                <p class="mb-1 popular-blog-content text-truncate">
                                    It was popularised in the 1960s with the release of Letraset sheets containing
                                </p>
                                <span class="text-muted fs-11">16,Dec 2022 - 04:56</span>
                            </div>
                            <div>
                                <button aria-label="button" type="button"
                                    class="btn btn-icon btn-light btn-sm rtl-rotate"><i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">
                            <span class="avatar avatar-xl me-1">
                                <img src="../assets/images/media/media-49.jpg" class="img-fluid" alt="...">
                            </span>
                            <div class="flex-fill">
                                <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Food</a>
                                <p class="mb-1 popular-blog-content text-truncate">
                                    It was popularised in the 1960s with the release of Letraset sheets containing
                                </p>
                                <span class="text-muted fs-11">31,Dec 2022 - 18:06</span>
                            </div>
                            <div>
                                <button aria-label="button" type="button"
                                    class="btn btn-icon btn-light btn-sm rtl-rotate"><i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">
                            <span class="avatar avatar-xl me-1">
                                <img src="../assets/images/media/media-76.jpg" class="img-fluid" alt="...">
                            </span>
                            <div class="flex-fill">
                                <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Travel</a>
                                <p class="mb-1 popular-blog-content text-truncate">
                                    It was popularised in the 1960s with the release of Letraset sheets containing
                                </p>
                                <span class="text-muted fs-11">15,Dec 2022 - 14:31</span>
                            </div>
                            <div>
                                <button aria-label="button" type="button"
                                    class="btn btn-icon btn-light btn-sm rtl-rotate"><i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item text-center">
                        <button type="button" class="btn btn-primary-light">Load more</button>
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
