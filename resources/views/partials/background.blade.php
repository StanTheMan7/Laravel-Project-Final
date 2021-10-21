<!-- Background Area Start -->
<div class="slider-area">	
    <div class="slider-wrapper">
        @php
    $bigTitle = $background[0]->bigTitle;
    @endphp
    @php
    if(preg_match("/^(?P<avant>[^)(])?(?P<tout_par>((?P<entre_par>[^)()]+)))(?P<apres>[^)(])?$/"," $bigTitle",$matches));
    $text1 = $matches["avant"]; // tout ce qu'il y a avant les parenthèses, optionel => 'Bordeaux '
    $matches["tout_par"]; // parenthèses + intérieur => '(33000)'
    $text2 = $matches["entre_par"]; // intérieur => '33000'
    $text3 = $matches["apres"];

@endphp
        @foreach ($background as $item)
		        <div class="single-slide" style="background-image: url('img/slider/slider1.jpg');">
                    <div class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                                    <div class="text-content-wrapper">
                                        <div class="text-content text-left">
                                            <h5>{{$background[0]->title}}</h5>
                                            <h1>{{$background[0]->bigTtitle}} <span>{{$text2 }}</span></h1>
                                            <p>{{$background[0]->description}}</p>
                                            <a class="banner-btn" href="gallery.html" data-text="read more"><span>{{$background[0]->button}}</span></a>
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