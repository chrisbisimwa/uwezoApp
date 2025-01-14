<div class="section p-0">
    <div class="container">
        @foreach ($events as $event)
        <div class="andro_event-countdown mt-negative" id="countdown">
            <div class="andro_event-countdown-date">
                {{-- <h5>Début</h5> <span></span> --}}
                <span>{{$event->start_date->format('j')}}</span>
                <div>
                    <span>{{$event->start_date->format('M Y')}}</span>
                    <span>{{$event->start_date->format('H:i')}}</span>
                </div>
            </div>
            <div class="andro_event-countdown-name">
                <h5>{{$event->title}}</h5>
                <span>{{$event->location}}</span>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    // Récupérer la date depuis l'attribut data-date
                    const eventDateTime = document.getElementById('section-countdown-timer').dataset.datetime;
        
                    // Convertir la date en millisecondes pour JavaScript
                    const eventDate = new Date(eventDateTime).getTime();
        
                    // Démarrer le compte à rebours
                    const countdownInterval = setInterval(function () {
                        const now = new Date().getTime();
                        const timeLeft = eventDate - now;
        
                        // Calcul des jours, heures, minutes, secondes
                        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
        
                        // Mettre à jour le contenu HTML
                        if (timeLeft > 0) {
                            document.getElementById('countdown-timer').innerHTML = `
                                ${days}d ${hours}h ${minutes}m ${seconds}s
                            `;
                        } else {
                            // Arrêter le timer et afficher "Terminé"
                            clearInterval(countdownInterval);
                            document.getElementById('countdown-timer').innerHTML = 'Événement terminé';
                        }
                    }, 1000); // Mise à jour toutes les secondes
                });
            </script>
            <div class="andro_countdown-timer andro_event-countdown-timer" data-countdown="{{ $event->end_date }}" >
                
                <span><i>days</i></span> 
                <span><i>hrs</i></span> 
                <span><i>mins</i></span>
                <span><i>sec</i></span>
                
            </div>
            <div class="andro_event-countdown-date">
               {{--  <h5>Fin</h5> <span></span> --}}
                <span>{{$event->end_date->format('j')}}</span>
                <div>
                    <span>{{$event->end_date->format('M Y')}}</span>
                    <span>{{$event->end_date->format('H:i')}}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


