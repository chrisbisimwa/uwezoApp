@extends('back-office.layouts.app')

@section('content')
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Liste des catégories</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Evènement</a></li>
                <li class="breadcrumb-item active" aria-current="page">Liste des catégories</li>
            </ol>
        </nav>
    </div>
</div>

@livewire('back-office.event-category.index')

@endsection
