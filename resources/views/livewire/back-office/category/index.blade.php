<div class="card custom-card">
    <div class="card-header justify-content-between">
        <div class="card-title">
            Gérer les catégories d'actualités
        </div>
        <div class="d-flex">

        
            
        
            <div class="dropdown ms-2">
                <button
                    class="btn btn-icon btn-secondary-light btn-sm btn-wave waves-light waves-effect waves-light"
                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">All Invoices</a></li>
                    <li><a class="dropdown-item" href="#">Paid Invoices</a></li>
                    <li><a class="dropdown-item" href="#">Pending Invoices</a></li>
                    <li><a class="dropdown-item" href="#">Overdue Invoices</a></li>
                </ul>
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
                                <a class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Modifier"
                                    href="{{ route('blog-category.edit', $category->id) }}">
                                    <i class="las la-edit"></i>
                                </a>
                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Delete" wire:click="delete({{$category->id}})"><i class="ri-delete-bin-5-line"></i></button>
                            </td>
                        </tr>
                    @empty

                        <tr class="odd">
                            <td valign="top" colspan="7" class="dataTables_empty">Rien à afficher pour
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
