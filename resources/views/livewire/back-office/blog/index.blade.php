<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Gérer les articles
                </div>
                <div class="d-flex flex-row">
                    <div class="p-2">
                        <div class="input-group">
                            <a href="javascript:void(0);" class="input-group-text" id="Search-Grid">
                                <i class="fe fe-search header-link-icon fs-18"></i>
                            </a>
                            <input type="search" class="form-control  px-2" placeholder="Recherche..."
                                wire:model.live="searchTerm">
                        </div>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('blog.create') }}"
                            class="btn btn-sm btn-primary btn-wave waves-light waves-effect waves-light"><i
                                class="ri-add-line fw-semibold align-middle me-1"></i> Créer un article</a>
                    </div>
                    
                </div>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="w-20"></th>
                                <th scope="col" class="w-20">Titre</th>
                                <th scope="col" class="w-35">Contenu</th>
                                <th scope="col" class="w-15">Auteur</th>
                                <th scope="col" class="w-15">Date</th>
                                <th scope="col" class="w-5">Status</th>
                                <th scope="col" class="w-5">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    <td>
                                        <div class="me-2 lh-1">
                                            <span class="avatar avatar-sm ">

                                                @if ($post->featured_image)
                                                    <img style="width: 40px"
                                                        src="{{ asset('storage/uploads/' . $post->featured_image) }}"
                                                        alt="">
                                                @else
                                                    <img src="../assets/images/faces/11.jpg" alt="">
                                                @endif

                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div>
                                                <p class="mb-0 fw-semibold">{{ $post->title }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {!! Str::limit($post->short_content(), 150, ' ...') !!}
                                    </td>
                                    <td>
                                        {{ $post->author->name }}
                                    </td>
                                    <td>
                                        {{ $post->created_at->format('M d Y') }}
                                    </td>
                                    <td>
                                        @if ($post->status == 'published')
                                            <span class="badge bg-success">Publié</span>
                                        @endif

                                        @if ($post->status == 'draft')
                                            <span class="badge bg-warning">Brouillon</span>
                                        @endif

                                    </td>

                                    <td>
                                        <a class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Modifier"
                                            href="{{ route('blog.edit', $post->slug) }}">
                                            <i class="las la-edit"></i>
                                        </a>
                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"
                                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"
                                            wire:click="delete({{ $post->id }})"><i
                                                class="ri-delete-bin-5-line"></i></button>
                                    </td>
                                </tr>
                            @empty

                                <tr class="odd">
                                    <td valign="top" colspan="7" class="dataTables_empty">Rien à afficher pour le
                                        moment</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>




            </div>
            <div class="card-footer">


                {{ $posts->links('vendor.livewire.backend') }}
            </div>
        </div>
    </div>

</div>
