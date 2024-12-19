<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Gérer les commentaires
                </div>
                <div class="d-flex">

                    <div class="input-group">
                        <a href="javascript:void(0);" class="input-group-text" id="Search-Grid">
                            <i class="fe fe-search header-link-icon fs-18"></i>
                        </a>
                        <input type="search" class="form-control  px-2" placeholder="Recherche..."
                            wire:model.live="searchTerm">
                    </div>


                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="w-40">Auteur</th>
                                <th scope="col" class="w-40">Evènement</th>
                                <th scope="col" class="w-40">Contenu</th>
                                <th scope="col" class="w-40">Status</th>
                                <th scope="col" class="w-20">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($comments as $comment)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div>
                                                <p class="mb-0 fw-semibold">{{ $comment->user->name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $comment->Event->title }}
                                    </td>
                                    <td>
                                        {{ $comment->content }}
                                    </td>

                                    <td>
                                        @if ($comment->status == 'approved')
                                            <span class="badge bg-success">Approuvé</span>
                                        @endif

                                        @if ($comment->status == 'pending')
                                            <span class="badge bg-warning">En attente</span>
                                        @endif

                                        @if ($comment->status == 'rejected')
                                            <span class="badge bg-danger">Rejeté</span>
                                        @endif
                                    </td>


                                    <td>
                                        @if ($comment->status == 'pending')
                                            <button
                                                class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Approuver" wire:click="approve({{ $comment->id }})">
                                                <i class="las la-check"></i>
                                            </button>
                                        @endif
                                        @if ($comment->status == 'approved')
                                            <button class="btn btn-primary-light btn-icon btn-sm"
                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Rejeter"
                                                wire:click="reject({{ $comment->id }})">
                                                <i class="bi bi-slash-circle"></i>
                                            </button>
                                        @endif

                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"
                                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Supprimer"
                                            wire:click="delete({{ $comment->id }})"><i
                                                class="ri-delete-bin-5-line"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty

                                <tr class="odd">
                                    <td valign="top" colspan="7" class="dataTables_empty" style="color: red;">Rien à afficher pour
                                        le moment</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="card-footer">
                {{ $comments->links('vendor.livewire.backend') }}
            </div>
        </div>
    </div>
</div>
