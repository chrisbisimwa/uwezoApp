@extends("front-office.layouts.app")

@section("content")
<div class="andro_subheader style-4 bg-cover bg-center bg-norepeat dark-overlay dark-overlay-2" style="background-image: url(../assets/img/subheader-7.jpg)">
    <div class="container">

      <h1>Blog</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
      </nav>

    </div>
  </div>

  @livewire('front-office.blog.blog')
@endsection