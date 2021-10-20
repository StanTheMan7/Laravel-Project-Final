 <!-- Event Area Strat -->
 <section class="event-area pt-95 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>{{$titleDesc[4]->title}}</h2>
                    <p>{{$titleDesc[4]->description}}</p>
                </div>
                <div class="event-wrapper">
                    <div class="event-content text-center">
                        <h3>{{$event[0]->title}}</h3>
                        <p>{{$event[0]->description}}</p>
                        <h4>{{$event[0]->date}}</h4>
                        <h5>{{$event[0]->time}}</h5>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Event Area End -->