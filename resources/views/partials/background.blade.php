<!-- Background Area Start -->
<div class="slider-area">	
    <div class="slider-wrapper">
        @foreach ($background as $item)

        @php
        
        $before=Str::before($item->bigTitle,'(');
        $between=Str::between($item->bigTitle,'(',')');
        $after=Str::after($item->bigTitle,')');
        //  METHODE REGEX
        // $title = $item->bigTitle;
        // $pattern='/\(([^\)]+)\)/';
        // $pattern2='/^[^\(]+/';
        // $pattern3='/^[$\(]+|(\)).*/';
        // preg_match($pattern2, $title, $before);
        // preg_match($pattern, $title,$matches);
        // preg_match($pattern3, $title,$after);
        @endphp


                        <div class="single-slide" style="background-image: url({{asset('img/slider/'. $item->url)}});">
                            <div class="slider-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content text-left">
                                                    <h5>{{$item->title}}</h5>
                                                    <h1>{{$before}}<span>{{$between}}</span>{{$after}}</h1>
                                                    <p>{{$item->description}}</p>
                                                    <a class="banner-btn" href="gallery.html" data-text="read more"><span>{{$item->button}}</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>git 
                        </div> 

        @endforeach
    </div>
</div>
<!-- Background Area End -->