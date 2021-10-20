<!-- Gallery Area Start -->
<section class="gallery-area pt-90 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="test-content">
                    <div class="section-title text-center">
                        <h2>{{$titleDesc[3]->title}}</h2>
                        <p>{{$titleDesc[3]->description}} </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="grid" style="position: relative; height: 390px;">
             @foreach ($gallery as $item)
                <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat1 cat3" style="position: absolute; left: 0%; top: 0px;">
                    <div class="portfolio-img single-img">
                        <img src="{{$item->url}}" alt="project">
                        <div class="gallery-icon">
                            <a class="image-popup" href="{{asset ('img/portfolio/' . $item->url)}}">
                                <i class="{{$item->icon}}"></i>
                            </a>
                        </div>
                    </div>
                </div>
             @endforeach
             <div class="container">
                {{ $gallery->links() }}
            </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
        {{$gallery->links()}}
    </div> --}}
</section>    
<!-- Gallery Area End -->