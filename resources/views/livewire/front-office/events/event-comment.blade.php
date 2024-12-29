<div>
    <div class="andro_post-d-section">
        <h4>{{ count($eventcomments) }} Commentaires</h4>
        <div class="andro_post-d-section-content">
            <ol class="andro_comment-list">
                @forelse ($eventcomments as $eventcomment)
                    @if ($eventcomment->status == 'approved' || $eventcomment->user_id == Auth()->user()->id)
                        <li>
                            <div class="andro_comment-item">
                                <div class="andro_comment-author">
                                    @if ($eventcomment->user->profile_image)
                                        <img src="{{ asset('storage/uploads/' . $eventcomment->user->profile_photo_path) }}"
                                            alt="eventcomment">
                                    @else
                                        <img src="{{ asset('front-office-assets/img/no-image.jpg') }}" alt="eventcomment">
                                    @endif

                                    <div class="andro_comment-author-body">
                                        <h6>{{ $eventcomment->user->name }}</h6>
                                        <span>{{ $eventcomment->user->role }}</span>
                                    </div>
                                </div>
                                <div class="andro_comment-body">
                                    <p>{{ $eventcomment->content }}</p>
                                </div>
                                @if ($eventcomment->status != 'approved' && $eventcomment->user_id == Auth()->user()->id)
                                    <a href="#" class="andro_comment-reply-link">En attente de validation</a>
                                @endif

                            </div>

                        </li>
                    @endif

                @empty
                <center>
                    <span style="color: red;">Rien à afficher pour le moment</span>
                </center>
                @endforelse

            </ol>
        </div>
    </div>

    <div class="andro_post-d-section">
        <h4>Laisser un commentaire</h4>
        <div class="andro_post-d-section-content">
            @if (Auth()->guest())
                <div class="container text-center">


                    <a href="{{ route('login') }}" class="button primary">Se connecter</a>
                    <hr>

                </div>
            @else
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <input type="text" class="form-control" name="fname" placeholder="Votre nom" readonly
                            value="{{ Auth()->user()->name }}">
                    </div>
                    <div class="col-lg-4 mb-4">
                        <input type="email" class="form-control" name="email" placeholder="Adresse Email" readonly
                            value="{{ Auth()->user()->email }}">
                    </div>
                    <div class="col-lg-4 mb-4">
                        <input type="text" class="form-control" name="phone" placeholder="Your Phone Number"
                            readonly value="{{ Auth()->user()->type }}">
                    </div>
                    <div class="col-lg-12 mb-4">
                        <textarea name="message" class="form-control @error('eventcomment') is-invalid @enderror" placeholder="Votre commentaire"
                            cols="80" wire:model="eventcomment"></textarea>
                        @error('eventcomment')
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: brown;">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="button primary" name="button" wire:click="eventcommenter()">Commenter</button>
            @endif


        </div>
    </div>
</div>
