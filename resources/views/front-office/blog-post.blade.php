@extends("front-office.layouts.app")

@section("content")
<div class="andro_subheader style-4 bg-cover bg-center bg-norepeat dark-overlay dark-overlay-2" style="background-image: url(../assets/img/subheader-7.jpg)">
    <div class="container">

      <h1>Blog details</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Blog details</li>
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
            <img src="{{ asset('front-office-assets/img/blog/author/1.jpg') }}" alt="post author">
          </div>
          <div class="andro_post-author-body">
            <span>Posted By: </span>
            <b>Heather Grew</b>
          </div>
        </div>

        {!! $blogPost->post_body_output() !!}
        


       


      </div>

      <div class="andro_post-d-footer">

        <div class="andro_post-d-tags">
          <b>Tags: </b>
          <a href="#">Kally</a>,
          <a href="#">Amazing</a>,
          <a href="#">Photography</a>
        </div>

        <ul class="andro_socials">
          <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-soundcloud"></i> </a> </li>
        </ul>

      </div>

    

      <div class="andro_post-d-section">
        <h4>02 Comments</h4>
        <div class="andro_post-d-section-content">
          <ol class="andro_comment-list">
            <li>
              <div class="andro_comment-item">
                <div class="andro_comment-author">
                  <img src="{{ asset('front-office-assets/img/blog/details/7.jpg') }}" alt="comment">
                  <div class="andro_comment-author-body">
                    <h6>Jakki James</h6>
                    <span>CEO Message</span>
                  </div>
                </div>
                <div class="andro_comment-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sceleri
                    augue Donec malesuada sodales neque in faucibus.</p>
                </div>
                <a href="#" class="andro_comment-reply-link">Reply</a>
              </div>
              <ol>
                <li>
                  <div class="andro_comment-item">
                    <div class="andro_comment-author">
                      <img src="{{ asset('front-office-assets/img/blog/details/7.jpg') }}" alt="comment">
                      <div class="andro_comment-author-body">
                        <h6>Jakki James</h6>
                        <span>CEO Message</span>
                      </div>
                    </div>
                    <div class="andro_comment-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sceleri
                        augue Donec malesuada sodales neque in faucibus.</p>
                    </div>
                    <a href="#" class="andro_comment-reply-link">Reply</a>
                  </div>
                </li>
              </ol>
            </li>
          </ol>
        </div>
      </div>

      <div class="andro_post-d-section">
        <h4>Leave a Comment</h4>
        <div class="andro_post-d-section-content">
          <form method="post">
            <div class="row">
              <div class="col-lg-4 mb-4">
                <input type="text" class="form-control" name="fname" placeholder="Your Name" value="">
              </div>
              <div class="col-lg-4 mb-4">
                <input type="email" class="form-control" name="email" placeholder="Your Email" value="">
              </div>
              <div class="col-lg-4 mb-4">
                <input type="text" class="form-control" name="phone" placeholder="Your Phone Number" value="">
              </div>
              <div class="col-lg-12 mb-4">
                <textarea name="message" class="form-control" placeholder="Your Comment" cols="80"></textarea>
              </div>
            </div>
            <button type="submit" class="button primary" name="button">Post Comment</button>
          </form>
        </div>
      </div>

    </div>
  </div>

@endsection