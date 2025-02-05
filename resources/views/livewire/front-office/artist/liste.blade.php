<div class="row andro_isotope-filter" >
    @forelse ($artistes as $art)
        <div class="col-lg-3 col-md-4 col-sm-6 andro_isotope-item d1" >
            <div class="andro_artist style-2">

                <div class="andro_artist-img">
                    <img src="{{\Storage::url('uploads/'.$art->photo)}}" alt="{{$art->prenom}} ">
                    <div class="andro_artist-img-content">
                        <div class="andro_artist-meta">
                        </div>
                        <ul class="andro_socials">
                            <li> <a class="facebook" href="{{ $art->facebook_link }}" target="_blank"> <i
                                        class="fab fa-facebook-f"></i> </a> </li>
                            <li> <a class="instagram" href="{{ $art->instagram_link }}" target="_blank"> <i
                                        class="fab fa-instagram"></i> </a> </li>
                            <li> <a class="soundcloud" href="{{ $art->soundcloud_link }}" target="_blank"> <i
                                        class="fab fa-soundcloud"></i> </a> </li>
                            <li> <a class="soundcloud" href="{{ $art->soundcloud_link }}" target="_blank"> <i
                                        class="fab fa-tiktok"></i> </a> </li>
                        </ul>
                    </div>
                </div>


                <h5 class="andro_artist-name"> 
                    <a href="{{ route('front.artisteDetail', $art->slug) }}">{{$art->nom}} {{$art->prenom}} </a> 
                </h5>
            </div>
        </div>
        @empty
        <div class="col-lg-12">
            <center>
                <div class="alert alert-warning" role="alert">
                    Aucun artiste trouvé
                </div>
            </center>
            
        </div>
    @endforelse

</div>
