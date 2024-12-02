@extends('back-office.layouts.app')

@section('content')
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Liste d'articles</h1>
        <div class="ms-md-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Liste d'articles</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Gérer les articles
                    </div>
                    <div class="d-flex">
                        <a href="{{route('blog.create')}}" class="btn btn-sm btn-primary btn-wave waves-light waves-effect waves-light"><i
                                class="ri-add-line fw-semibold align-middle me-1"></i> Créer un article</a>
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
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    @if ($post->featured_image)
                                                        <img src="{{ asset('storage/uploads/' . $post->featured_image) }}" alt="">
                                                    @else
                                                    <img src="../assets/images/faces/11.jpg" alt="">
                                                    @endif
                                                    
                                                </span>
                                            </div>
                                            <div>
                                                <p class="mb-0 fw-semibold">{{ $post->title }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                       {!! Str::limit($post->content, 150, ' ...') !!}
                                    </td>
                                    <td>
                                        {{ $post->author->name }}
                                    </td>
                                    <td>
                                        {{ $post->created_at->format('M d Y') }}
                                    </td>
                                    <td>
                                        @if ( $post->status == 'published')
                                        <span class="badge bg-success">Publié</span>
                                        @endif

                                        @if ( $post->status == 'draft')
                                        <span class="badge bg-warning">Brouillon</span>
                                        @endif
                                        
                                    </td>
                                    
                                        <td>
                                            <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Print"><i
                                                    class="ri-printer-line"></i></button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"
                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i
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
                    <nav aria-label="Page navigation">
                        <ul class="pagination mb-0 float-end">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
@endsection
