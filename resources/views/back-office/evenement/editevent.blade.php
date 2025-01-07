@extends('back-office.layouts.app')

@section('content')
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Modifier l'événement</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Evénements</a></li>
                <li class="breadcrumb-item active" aria-current="page">Modifier l'événement</li>
            </ol>
        </nav>
    </div>
</div>

@livewire('back-office.evenement.editevent', ['events' => $events])
@endsection