@if ($q)
    <div class="search-results-container">
        <h5>Résultats pour "{{ $q }}"</h5>

        @if ($artists)
            <div>
                <strong>Artistes :</strong>
                <ul>
                    @forelse($artists as $artist)
                        <li>
                            <a href="{{ route('front.artisteDetail', ['slug' => $artist->slug]) }}">
                                {{ $artist->nom }} {{ $artist->prenom }}
                            </a>
                        </li>
                    @empty
                        <li>Aucun artiste</li>
                    @endforelse
                </ul>
            </div>
        @endif

        @if ($oeuvres)
            <div>
                <strong>Œuvres :</strong>
                <ul>
                    @forelse($oeuvres as $oeuvre)
                        <li>{{ $oeuvre->nom }}</li>
                    @empty
                        <li>Aucune œuvre</li>
                    @endforelse
                </ul>
            </div>
        @endif


        @if ($evenements)
            <div>
                <strong>Événements :</strong>
                <ul>
                    @forelse($evenements as $event)
                        <li>
                            <a href="{{ route('front.event-details', ['title' => $event->title]) }}">
                                {{ $event->title }}
                            </a>
                        </li>
                    @empty
                        <li>Aucun événement</li>
                    @endforelse
                </ul>
            </div>
        @endif

        @if ($blogPosts)
            <div>
                <strong>Actualités :</strong>
                <ul>
                    @forelse($blogPosts as $post)
                        <li>
                            <a href="{{ route('front.blog-post', ['slug' => $post->slug]) }}">
                                {{ $post->title }}
                            </a>
                        </li>
                    @empty
                        <li>Aucune actualité</li>
                    @endforelse
                </ul>
            </div>
        @endif

    </div>
@endif
