 <!-- Event Area Strat -->
 <section class="event-area pt-95 pb-100 bg-gray">
    @php
    $before=Str::before($titleDesc[4]->title,'(');
    $between=Str::between($titleDesc[4]->title,'(',')');
    $after=Str::after($titleDesc[4]->title,')');
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    @if ($before == $between && $between == $after )
                        
                    <h2>{{$before}}</h2>
                    @else
                        <h2>{{$before}} <span style="color: rgb(95, 199,174)">{{$between}}</span>{{$after}}</h2>
                    @endif
                    <p>{{$titleDesc[4]->description}}</p>
                </div>
                <div class="event-wrapper">
                @foreach ($principalEvent as $item)
                    <div class="event-content text-center">
                        <h3>{{$item->title}}</h3>
                        <p>{{$item->description}}</p>
                        <h4>{{$item->date}}</h4>
                        <h5>{{$item->time}}</h5>
                    </div> 
                    @endforeach
                </div>
                <div class="container">
                    {{ $principalEvent->links() }}
                </div>
               
            </div>
        </div>
    </div>
</section>
<!-- Event Area End -->