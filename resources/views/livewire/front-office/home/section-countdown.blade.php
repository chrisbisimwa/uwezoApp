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

            </script>
            <div class="andro_countdown-timer andro_event-countdown-timer" id="countdown-timer" data-countdown="{{ $event->start_date }}" >
             
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


