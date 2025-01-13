<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Gérer les événements
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
                        <a href="{{ route('evenement.create') }}"
                            class="btn btn-sm btn-primary btn-wave waves-light waves-effect waves-light"><i
                                class="ri-add-line fw-semibold align-middle me-1"></i> Nouvel évènement</a>
                    </div>
                    
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="w-20 g-300" >Titre</th>
                                <th scope="col" class="w-35">Description</th>
                                <th scope="col" class="w-15">Lieu</th>
                                <th scope="col" class="w-15">Date de début</th>
                                <th scope="col" class="w-15">Date de fin</th>
                                <th scope="col" class="w-5">Status</th>
                                <th scope="col" class="w-5">Créer Par</th>
                                <th scope="col" class="w-5">Date</th>
                                <th scope="col" class="w-5">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($events as $event)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center" >
                                            <div class="me-2 lh-1">
                                                <span class="avatar avatar-sm ">

                                                    @if ($event->image_path)
                                                        <img style="width: 40px"
                                                            src="{{ asset('storage/uploads/event_image_path' . $event->image_path) }}"
                                                            alt="">
                                                    @else
                                                        <img src="../assets/images/faces/11.jpg" alt="">
                                                    @endif

                                                </span>
                                            </div>
                                            <div >
                                                <p class="mb-0 fw-semibold" >{{ $event->title }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $event->description}}
                                    </td>
                                    <td>
                                        {{ $event->location }}
                                    </td>
                                    <td>
                                        {{ $event->start_date }}
                                    </td>
                                    <td>
                                        {{ $event->end_date }}
                                    </td>
                                    <td>
                                        @if ($event->status == 'completed')
                                            <span class="badge bg-danger">Terminé</span>
                                        @endif

                                        @if ($event->status == 'upcoming')
                                            <span class="badge bg-warning">A venir</span>
                                        @endif
                                        @if ($event->status == 'ongoing')
                                            <span class="badge bg-success">En cours</span>
                                        @endif

                                    </td>
                                    <td>
                                        {{ $event->author->name }}
                                    </td>
                                    <td>
                                        {{ $event->created_at->format('M d Y') }}
                                    </td>
                                    
                                    <td>
                                        <a class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Modifier" href="{{ route('evenement.edit', $event->title) }}">
                                            <i class="las la-edit"></i>
                                        </a>
                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"
                                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i
                                                class="ri-delete-bin-5-line" wire:click="delete({{ $event->id }})"></i></button>
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
                {{ $events->links('vendor.livewire.backend') }}
            </div>
        </div>
    </div>

</div>