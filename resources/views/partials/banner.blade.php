		<!-- Banner Area Start -->
        @if (Request::url() === 'http://127.0.0.1:8000/about')
		<section class="banner-area text-left">	
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>About Us</h2>
                                <div class="banner-breadcrumb">
                                    <ul>
                                        <li><a href="{{route('home')}}">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>About us</li>
                                    </ul>
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
		</section>
        @elseif(Request::url() === 'http://127.0.0.1:8000/classes')
        <section class="banner-area text-left">	
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Class</h2>
                                <div class="banner-breadcrumb">
                                    <ul>
                                        <li><a href="{{route('home')}}">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>Class</li>
                                    </ul>
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
		</section>
        @elseif(Request::url() === 'http://127.0.0.1:8000/gallery')
        <section class="banner-area text-left">	
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Gallery</h2>
                                <div class="banner-breadcrumb">
                                    <ul>
                                        <li><a href="{{route('home')}}">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>Gallery</li>
                                    </ul>
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
		</section>
        @elseif(Request::url() === 'http://127.0.0.1:8000/contact')
        <section class="banner-area text-left">	
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Contact</h2>
                                <div class="banner-breadcrumb">
                                    <ul>
                                        <li><a href="{{route('home')}}">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>Contact</li>
                                    </ul>
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
		</section>
        @endif
		<!-- Banner Area End -->