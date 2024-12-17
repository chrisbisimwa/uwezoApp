@extends("front-office.layouts.app")

@section('styles')
    div#social-links {
        margin: 0 auto;
        max-width: 500px;
    }

    div#social-links ul li {
        display: inline-block;
    }   

    div#social-links ul li a {
        padding: 20px;
        border: 1px solid #ccc;
        margin: 1px;
        font-size: 30px;
        color: #222;
        background-color: #ccc;
    }
@endsection
@section("content")

<div class="andro_subheader style-4 bg-cover bg-center bg-norepeat dark-overlay dark-overlay-2" style="background-image: url(../front-office-assets/img/subheader-7.jpg)">
    <div class="container">

      <h1>Détails de l'actualité</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('front.blog')}}">Actualités</a></li>
          <li class="breadcrumb-item active" aria-current="page">Détails de l'actualité</li>
        </ol>
      </nav>

    </div>
  </div>



  <div class="section andro_post-d style-3">
    <div class="container">

      <div class="andro_post-d-img">
        @if ($blogPost->featured_image)
            <img src="{{ asset('storage/uploads/' . $blogPost->featured_image) }}" alt="blog">
        @else
        <img src="{{ asset('front-office-assets/img/blog/details/11.jpg') }}" alt="blog">
        @endif
        
        <span class="andro_post-d-date">{{$blogPost->created_at->format('d/m/Y')}}</span>
      </div>

      <div class="entry-content">

        <h2 class="h3 entry-title">{{$blogPost->title}}</h2>
        <div class="andro_post-author">
          <div class="andro_post-author-thumb">
            @if ($blogPost->author->profile_image)
            <img src="{{ asset('storage/uploads/' . $blogPost->author->profile_image) }}" alt="post author">
                
            @else
            <img src="{{ asset('front-office-assets/img/no-image.jpg') }}" alt="post author">
            @endif
            
          </div>
          <div class="andro_post-author-body">
            <span>Publié par: </span>
            <b>{{$blogPost->author->name}}</b>
          </div>
        </div>

        {!! $blogPost->post_body_output() !!}
        


       


      </div>

      <div class="andro_post-d-footer">

        @if ($blogPost->categories)
        <div class="andro_post-d-tags">
          <b>Tags: </b>
          @foreach ($blogPost->categories->pluck('name')->toArray() as $item)
          <a href="#">{{$item}}</a>@if (!$loop->last), @endif
              
          @endforeach
          
        </div>

        @endif
        
        <ul class="andro_socials">
          
          <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
          
        </ul>

      </div>

    

      @livewire('front-office.blog.comment', ['blogPost' => $blogPost])

    </div>
  </div>

@endsection