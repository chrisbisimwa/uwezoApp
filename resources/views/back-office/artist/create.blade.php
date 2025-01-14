@extends('back-office.layouts.app')

@section('content')
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Create Artist</h1>
        <div class="ms-md-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Artist</a></li>
                    <li class="breadcrumb
                    -item active" aria-current="page">Create Artist</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-body add-products p-0">
                    <div class="p-4">
                        <div class="row gx-5">
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                @livewire('back-office.artist.create')
                            </div>
                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                <div class="card custom-card shadow-none mb-0 border-0">
                                    <div class="card-body p-0">
                                        <div class="d-flex mb-3 align-items-center justify-content-between">
                                            <p class="mb-0 fw-semibold fs-14">Oeuvre de l'artiste</p>
                                            <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalXl">
                                                <i class="ri-image-add-line me-1 align-middle d-inline-block"></i>
                                                Ajouter
                                            </button>
                                            <div class="modal fade" id="exampleModalXl" tabindex="-1"
                                                aria-labelledby="exampleModalXlLabel" style="display: none;"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    @livewire('back-office.artist.artwork.create')
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @livewire('back-office.artist.artwork.create.liste')
                                        </div>

                                        <hr>
                                        <div class="d-flex mb-3 align-items-center justify-content-between">
                                            <p class="mb-0 fw-semibold fs-14">Evenements de l'artiste</p>
                                            <button class="btn btn-sm btn-primary-light">View All</button>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="table-responsive border border-bottom-0">
                                                    <table class="table text-nowrap table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Nom</th>
                                                                <th scope="col">Type</th>
                                                                <th scope="col">Source</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="files-list">
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar avatar-xs">
                                                                                <img src="../assets/images/media/file-manager/1.png"
                                                                                    alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            VID-00292312-SPK823.mp4
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <td>Videos</td>
                                                                <td>87MB</td>
                                                                <td>22,Nov 2022</td>
                                                                <td>
                                                                    <div class="hstack gap-2 fs-15">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                                class="ri-eye-line"></i></a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                                class="ri-delete-bin-line"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                        <tfoot>
                                                            <tr>

                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                        <button class="btn btn-primary-light m-1">Add Product<i class="bi bi-plus-lg ms-2"></i></button>
                        <button class="btn btn-success-light m-1">Save Product<i class="bi bi-download ms-2"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
