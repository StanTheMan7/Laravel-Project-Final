<!-- Gallery Area Start -->
<section class="gallery-area pt-90 pb-100">
    @php
    $before=Str::before($titleDesc[3]->title,'(');
    $between=Str::between($titleDesc[3]->title,'(',')');
    $after=Str::after($titleDesc[3]->title,')');
    @endphp

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="test-content">
                    <div class="section-title text-center">
                        @if ($before == $between && $between == $after)
                            <h2>{{$before}}</h2>
                        @else
                            <h2>{{$before}} <span style="color: rgb(95, 199,174)">{{$between}}</span>{{$after}}</h2>
                        @endif
                        <p>{{$titleDesc[3]->description}} </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="grid" style="position: relative; height: 390px;">
                @foreach ($gallery->shuffle() as $item)
                    <div class="col-md-4 col-sm-4 col-xs-12 grid-item" >
                        <div class="portfolio-img single-img">
                                    <img src="{{asset('img/portfolio/' . $item->url)}}" alt="project">
                            <div class="gallery-icon">
                                
                                <a class="image-popup" href="{{asset ('img/portfolio/' . $item->url)}}">
                                    <i class="{{$item->icon}}"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container">
                {{ $gallery->links() }}
            </div>
        </div>
    </div>
</section>    
<!-- Gallery Area End -->