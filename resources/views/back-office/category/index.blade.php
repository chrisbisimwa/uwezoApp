@extends('back-office.layouts.app')

@section('content')
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Liste des catégories</h1>
        <div class="ms-md-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Liste des catégories</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Gérer les catégories d'actualités
                    </div>
                    <div class="d-flex">

                        <button type="button" class="btn btn-sm btn-primary btn-wave waves-light waves-effect waves-light"
                            data-bs-toggle="modal" data-bs-target="#exampleModalLg">Large modal</button>
                        <button type="button" class="btn btn-primary mb-sm-0 mb-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModalXl">Extra large modal</button>
                        <button type="button" class="btn btn-primary-light mb-sm-0 mb-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModalLg">Large modal</button>
                        <button type="button" class="btn btn-primary-light" data-bs-toggle="modal"
                            data-bs-target="#exampleModalSm">Small modal</button>
                        <div class="modal fade" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel"
                            style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalXlLabel">Extra large
                                            modal</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLgLabel">Large modal
                                        </h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalSm" tabindex="-1" aria-labelledby="exampleModalSmLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalSmLabel">Small modal
                                        </h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
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

        </div>
    </div>
@endsection
