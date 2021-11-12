<!-- Background Area Start -->
<div class="slider-area">	
    <div class="slider-wrapper">
        @if ($background->where('principal', true)->count() != 0 )
            
        @php
        $before=Str::before($background->where('principal', true)->first()->bigTitle,'(');
        $between=Str::between($background->where('principal', true)->first()->bigTitle,'(',')');
        $after=Str::after($background->where('principal', true)->first()->bigTitle,')');
        //  METHODE REGEX
        // $title = $background->where('principal', true)->first()->bigTitle;
        // $pattern='/\(([^\)]+)\)/';
        // $pattern2='/^[^\(]+/';
        // $pattern3='/^[$\(]+|(\)).*/';
        // preg_match($pattern2, $title, $before);
        // preg_match($pattern, $title,$matches);
        // preg_match($pattern3, $title,$after);
        @endphp     

        <div class="single-slide" style="background-image: url({{asset('img/slider/'. $background->where('principal', true)->first()->url)}});">
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                            <div class="text-content-wrapper">
                                <div class="text-content text-left">
                                    <h5>{{$background->where('principal', true)->first()->title}}</h5>
                                    @if ($before == $between && $between == $after)
                                    <h1>{{$before}}</h1>
                                    @else
                                    <h1>{{$before}}<span>{{$between}}</span>{{$after}}</h1>
                                    @endif
                                    <p>{{$background->where('principal', true)->first()->description}}</p>
                                    <a class="banner-btn" href="gallery.html" data-text="read more"><span>{{$background->where('principal', true)->first()->button}}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        @endif

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
                                                    @if ($before == $between && $between == $after)
                                                    <h1>{{$before}}</h1>
                                                    @else
                                                    <h1>{{$before}}<span>{{$between}}</span>{{$after}}</h1>
                                                    @endif
                                                    <p>{{$item->description}}</p>
                                                    <a class="banner-btn" href="gallery.html" data-text="read more"><span>{{$item->button}}</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

        @endforeach
    </div>
</div>
<!-- Background Area End -->