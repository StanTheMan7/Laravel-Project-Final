<!-- Classes Start -->
<section class="class-area fix bg-gray pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>our classes</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem </p>
                </div>  
            </div>
        </div>
        <div class="row"> 
           @foreach ($classe as $item)
           <div class="col-md-4 col-sm-6 col-xs-12">     
            <div class="single-class">
                <div class="single-img">
                    <a href="class.html"><img src="{{$item->url}}" alt="class"></a>
                    <div class="gallery-icon">
                        <a class="image-popup" href="{{$item->url}}">
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