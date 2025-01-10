@extends("front-office.layouts.app")
<div class="andro_subheader style-4 bg-cover bg-center bg-norepeat dark-overlay dark-overlay-2" style="background-image: url(../assets/img/subheader-7.jpg)">
    <div class="container">
      <h1>Evenements</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Accueil</a></li>
          <li class="active" aria-current="page"> &nbsp;/ Evenements</li>
        </ol>
      </nav>

    </div>
  </div>
@section("content")


@livewire('front-office.events.event')
@livewire('front-office.events.listevent')
{{-- @livewire('front-office.home.newsletter') --}}
{{-- @livewire('front-office.home.section1') --}}
@endsection
