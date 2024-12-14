

<div class="row">
    <div class="col-xl-7">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Gérer les catégories d'évènement
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
                                <th scope="col" class="w-40">Nom</th>
                                <th scope="col" class="w-40">Description</th>
                                <th scope="col" class="w-20">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
        
                                            <div>
                                                <p class="mb-0 fw-semibold">{{ $category->name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $category->description }}
                                    </td>
        
        
        
        
                                    <td>
                                        <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Modifier"
                                            wire:click="edit({{$category->id}})">
                                            <i class="las la-edit"></i>
                                    </button>
                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Delete" wire:click="delete({{$category->id}})"><i class="ri-delete-bin-5-line"></i></button>
                                    </td>
                                </tr>
                            @empty
        
                                <tr class="odd">
                                    <td valign="top" colspan="7" class="dataTables_empty" style="color: red;">Rien à afficher pour
                                        le
                                        moment</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
        
        
        
        
            </div>
            <div class="card-footer">
                {{ $categories->links('vendor.livewire.backend') }}
            </div>
        </div>

    </div>
    <div class="col-xl-5">
        @livewire('back-office.eventcategory.creatcategory')

    </div>
</div>



