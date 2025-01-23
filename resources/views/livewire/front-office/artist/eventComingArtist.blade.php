<div class="andro_artist-d-loc">
@foreach ($events as $event)
<script>
            document.addEventListener("DOMContentLoaded", function () {
                // Récupérer la date depuis l'attribut data-date
                const eventDateTime = document.getElementById('countdown-timer').dataset.datetime;
    
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
        @endforeach
    <h6>Evenement à venir: </h6>
    <span> <i class="fal fa-map-marker"></i> Air centre, London, UK </span>
</div>
<div class="andro_artist-d-countdown">
    <div class="andro_countdown-timer" data-countdown="2023/01/01"></div>
</div>