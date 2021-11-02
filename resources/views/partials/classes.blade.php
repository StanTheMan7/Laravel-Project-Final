<!-- Classes Start -->
<section class="class-area fix bg-gray pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                @php
                $before=Str::before($titleDesc[0]->title,'(');
                $between=Str::between($titleDesc[0]->title,'(',')');
                $after=Str::after($titleDesc[0]->title,')');
                @endphp
                <div class="section-title text-center">
                    @if ($before == $between && $between == $after )
                        
                    <h2>{{$before}}</h2>
                    @else
                        <h2>{{$before}} <span style="color: rgb(95, 199,174)">{{$between}}</span>{{$after}}</h2>
                    @endif
                    <p>{{$titleDesc[0]->description}}</p>
                </div>  
            </div>
        </div>
        <div class="row"> 
           @foreach ($classe as $item)
           <div class="col-md-4 col-sm-6 col-xs-12">     
            <div class="single-class">
                <div class="single-img">
                    <a href="class.html"><img src="{{asset('img/class/' . $item->url)}}" alt="class"></a>
                    <div class="gallery-icon">
                        <a class="image-popup" href="{{asset('img/class/' . $item->url)}}">
                            <i class="zmdi zmdi-zoom-in"></i>
                        </a>   
                    </div>
                </div>
                <div class="single-content">
                    <h3><a href="class.html">{{$item->title}}</a></h3>
                    <ul>
                        <li><i class="zmdi zmdi-face"></i>{{$item->name}}</li>
                        <li><i class="zmdi zmdi-alarm"></i>{{$item->time}}</li>
                        
                    </ul>
                </div>
            </div>
        </div>
        @endforeach

        </div>
    </div>
</section>
<!-- Class Area End -->