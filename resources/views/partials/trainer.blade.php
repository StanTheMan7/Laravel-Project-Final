 <!-- Trainer Area Start -->
 <div class="trainer-area pt-90 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>{{$titleDesc[2]->title}}</h2>
                    <p>{{$titleDesc[2]->description}}</p>
                </div>
            </div>
            @foreach ($trainer as $item)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{asset('img/trainer/' . $item->url)}}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>{{$item->name}}</h3>
                        <ul>
                            <li><a href=" {{$item->link1}}"><i class="{{$item->icon1}}"></i></a></li>  
                            <li><a href="{{$item->link2}}"><i class="{{$item->icon2}}"></i></a></li>
                            <li><a href="{{$item->link3}}"><i class="{{$item->icon3}}"></i></a></li>
                            <li><a href="{{$item->link4}}"><i class="{{$item->icon4}}"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Trainer Area End -->